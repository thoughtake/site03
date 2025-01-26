<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/apple-touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css?<?php echo date('Ymd-Hi'); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
  <?php 
  wp_enqueue_style('slick', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css', array(), '1.0.1');
  wp_enqueue_style('slick-theme', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.0.1');
  wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css', array(), '1.0.0');
  ; ?>
  <?php if( is_user_logged_in() ) : ?>
    <style type="text/css">
      .header {
        top: 46px;
      }
      @media screen and (min-width: 768px) {
        .header {
          top: 32px;
        }
      } 
    </style>
  <?php endif; ?>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header" id="header">
    <div class="container container-fluid">
      <div class="header-left">
        <a href="<?php echo home_url(); ?>">
          <?php if ( is_front_page() ): ?>
            <h1 class="header-title"><img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="無憂扇豊海"></h1>
          <?php else: ?>
            <div class="header-title"><img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="無憂扇豊海"></div>
          <?php endif; ?>
        </a>
      </div><!-- /.header-left -->
      <div class="header-right">
      <?php $cat=get_category_by_slug('information'); ?>
        <ul class="header-menu">
          <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
          <li><a href="<?php echo home_url('/greeting'); ?>">ごあいさつ</a></li>
          <li><a href="<?php echo home_url('/about'); ?>">びわきゅうとは</a></li>
          <li><a href="<?php echo home_url('/course'); ?>">施術</a></li>
          <li><a href="<?php echo get_category_link($cat->cat_ID); ?>">お知らせ</a></li>
          <li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
        </ul><!-- /.header-menu -->
        <div class="header-toggle js-toggle" id="js-header-toggle" data-js="toggle">
          <span></span><span></span><span></span>
        </div><!-- /.header-toggle -->
        <div class="header-toggle-menu js-toggle" id="js-header-toggle-menu">
          <div class="container">
            <ul class="header-toggle-menu__menu">
              <li><a href="<?php echo home_url(); ?>">ホーム</a></li>
              <li><a href="<?php echo home_url('/greeting'); ?>">ごあいさつ</a></li>
              <li><a href="<?php echo home_url('/about'); ?>">びわきゅうとは</a></li>
              <li><a href="<?php echo home_url('/course'); ?>">施術</a></li>
              <li><a href="<?php echo get_category_link($cat->cat_ID); ?>">お知らせ</a></li>
              <li><a href="<?php echo home_url('/access'); ?>">アクセス</a></li>
              <li><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
            </ul><!-- /.header-menu -->
            <div class="header-toggle-menu__logo">
              <img src="<?php echo get_template_directory_uri(); ?>/img/logo1.png" alt="無憂扇豊海">
            </div><!-- /.header-toggle-menu__logo -->
            <div class="header-toggle-menu__access nihonbashi">
              <div class="header-toggle-menu__access__title">
                日本橋支店
              </div><!-- /.header-toggle-menu__access__title -->
              <div class="header-toggle-menu__access__address">
                <p>〒103-0005</p>
                <p>東京都中央区日本橋久松町12-11<br>リバース日本橋久松町201</p>
              </div><!-- /.header-toggle-menu__access__address -->
              <div class="header-toggle-menu__access__contact">
                <p>TEL:03-6314-3600</p>
              </div><!-- /.header-toggle-menu__access__contact -->
            </div><!-- /.header-toggle-menu__access nihonbashi -->
            <div class="header-toggle-menu__access yugawara">
              <div class="header-toggle-menu__access__title">
                湯河原保養所
              </div><!-- /.header-toggle-menu__access__title -->
              <div class="header-toggle-menu__access__address">
                <p>〒259-0304</p>
                <p>神奈川県足柄下郡湯河原町宮下737-40</p>
              </div><!-- /.header-toggle-menu__access__address -->
              <div class="header-toggle-menu__access__contact">
                <p>TEL:0465-46-6790</p>
                <p>FAX:0465-46-6791</p>
              </div><!-- /.header-toggle-menu__access__contact -->
            </div><!-- /.header-toggle-menu__access yugawara -->
          </div><!-- /.container -->
        </div><!-- /.header-toggle-menu -->
      </div><!-- /.header-right -->
    </div><!-- /.container-fluid -->
  </header><!-- /header -->