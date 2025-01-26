<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-index <?php if(get_query_var('category_name')) { echo get_query_var('category_name'); } ?>">
    <main class="main">

      <?php 
          $cat = get_the_category();
      ; ?>
      <!-- ページタイトル -->
      <div class="page-title index">
        <h1 class="page-title__title"><?php echo $cat[0]->cat_name; ?></h1><!-- /.page-title__title -->
      </div><!-- /.page-title index -->

      <!-- パンクズ -->
      <div class="container">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

     <!-- お知らせ一覧 -->
     <div class="page-section index-content">
       <div class="container">
        <ul class="index-lists">
          <?php 
            $paged = get_query_var('paged', 1);
            $args = Array(
                    'paged' => $paged,
                    'post_type' => 'post',        
                    'orderby' => 'modified',
                    'posts_per_page' => 10,
                    'post_status' => 'publish',
                    'cat' => $cat[0]->cat_ID
            );
            $wp_query = new WP_Query( $args );
          ; ?>
          <?php if ($wp_query->have_posts()): ?>
            <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
              <?php get_template_part('template-parts/index', 'posts'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul><!-- /.index-lists -->
       </div><!-- /.container -->
     </div><!-- /.page-section index-content -->

     <!-- page-navi -->
     <div class="page-section index-pagenavi">
       <div class="container">
        <?php if ( function_exists('wp_pagenavi') ) { wp_pagenavi(array('query' => $wp_query)); }; ?>
        <?php wp_reset_postdata(); ?> 
       </div><!-- /.container -->
     </div><!-- /.page-section index-pagenavi -->

      
    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-page-index -->
<?php get_footer(); ?>
