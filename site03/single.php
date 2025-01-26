<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-single">
    <main class="main">

      <!-- パンクズ -->
      <div class="container container-fluid">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

      <!-- コンテンツ -->
      <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" class="page-section single-content">
            <div class="container">
              <div class="title-wrapper">
                <h1 class="single-content__title"><span><?php the_title(); ?></span></h1><!-- /.single-content__title -->
              </div><!-- /.title-wrapper -->
              <div class="main-wrapper">
                <time class="single-content__date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time><!-- /.single-content__date -->
                <div class="single-content__content">
                  <?php the_content(); ?>
                </div><!-- /.single-content__content -->
                <div class="single-content__postLinks">
                  <div class="postLink postLink-prev button">
                    <?php previous_post_link('%link','%title',true); ?>
                  </div>
                  <div class="postLink postLink-next button">
                    <?php next_post_link('%link','%title',true); ?>
                  </div>
                </div>  
              </div><!-- /.main-wrapper -->
            </div><!-- /.container container-fluid -->
          </article><!-- /.page-section .single-content -->
        <?php endwhile; ?>
      <?php endif; ?>
      
    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-single -->
<?php get_footer(); ?>