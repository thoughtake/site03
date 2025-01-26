<?php 
// <title>タグを出力
add_theme_support('title-tag'); 

//区切り文字変更
add_filter( 'document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator) {
  $separator = "|";
  return $separator;
}

// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// カスタムメニューを追加
add_theme_support('menus');

//投稿一覧にサムネイルカラム追加
function customize_manage_columns($columns) {
  $columns['thumbnail'] = __('Thumbnail');
  return $columns;
}
add_filter( 'manage_posts_columns', 'customize_manage_columns' );
add_filter( 'manage_pages_columns', 'customize_manage_columns' );

//投稿一覧にサムネイル画像表示設定
function customize_manage_custom_column($column_name, $post_id) {
  if ( 'thumbnail' == $column_name ) {
    $thumb = get_the_post_thumbnail($post_id, array(100,100), 'thumbnail');
    echo ( $thumb ) ? $thumb : '－';
    }
}
add_action( 'manage_posts_custom_column', 'customize_manage_custom_column', 10, 2 );
add_action( 'manage_pages_custom_column', 'customize_manage_custom_column', 10, 2 );

// レビュー投稿画面から削除
function my_remove_post_support() {
  remove_post_type_support('review','title');           // タイトル
  remove_post_type_support('review','editor');          // 本文
}
add_action('init','my_remove_post_support');

// レビュー投稿のカテゴリーBOXを非表示に
function review_label_meta_box_remove() {
  $id = 'kinddiv';
  $post_type = 'review';
  $position = 'side';
  remove_meta_box( $id, $post_type, $position );
}
add_action( 'admin_menu', 'review_label_meta_box_remove');

//一覧表示時のレビューのデフォルトタイトルを変更
function my_auto_title($title_message){
  global $post;
  /* ポストタイプがカスタムかどうかチェック */
  if( $post->post_type == 'review' ) {
    $question_title = get_post_custom_values('name');
    if( $question_title ){
    $title_message = $question_title[0];
    }
  }
  return $title_message;
}
add_filter('single_post_title', 'my_auto_title');
add_filter('the_title', 'my_auto_title');

//タイトルの自動生成
function rename_post_title($post_id){
  global $post;
  if($post->post_type == 'review'){ #投稿タイプの確認
    //タイトルになる文字列を生成
    $title = get_post_meta($post_id, 'name', true);

    //もし現在のタイトルと異なる場合のみ、タイトルを更新（ループ回避）
    if(get_the_title($post_id) !== $title){
      wp_update_post(['ID' => $post_id, 'post_title' => $title]); #生成したタイトルに書き換え
    }
  }
}
add_action('save_post', 'rename_post_title', 10);

// レビューにカラム追加
function add_review_posts_columns( $columns ) {
  $columns['no'] = '表示順';
  $columns['display'] = '表示';
  $columns['gender'] = '性別';
  return $columns;
}
add_filter( 'manage_review_posts_columns', 'add_review_posts_columns' );


// レビューの表示内容設定
function add_review_posts_columns_row( $column_name, $post_id ) {
  if ( $column_name == 'no' ) {
    $no_data = get_field('no', $post_id);
    if (isset($no_data) && $no_data) {
      echo esc_attr($no_data);
    } else {
      echo __('None');
    }
  }
  if ( $column_name == 'display' ) {
    $display_data = get_field('display', $post_id);
    $display_value = $display_data['value'];
    $display_label = $display_data['label'];
    if (isset($display_label) && $display_label) {
      echo esc_attr($display_label);
    } else {
      echo __('None');
    }
  }
  if ( $column_name == 'gender' ) {
    $gender_data = get_field('gender', $post_id);
    $gender_value = $gender_data['value'];
    $gender_label = $gender_data['label'];
    if (isset($gender_label) && $gender_label) {
      echo esc_attr($gender_label);
    } else {
      echo __('None');
    }
  }
  if ( $column_name == 'age' ) {
    $age_data = get_field('age', $post_id);
    $age_value = $age_data['value'];
    $age_label = $age_data['label'];
    if (isset($age_label) && $age_label) {
      echo esc_attr($age_label);
    } else {
      echo __('None');
    }
  }
}
add_action( 'manage_review_posts_custom_column', 'add_review_posts_columns_row', 10, 2 );
