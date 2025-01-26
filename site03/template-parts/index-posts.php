<li id="post-<?php the_ID(); ?>" class="index-lists__list">
  <a href="<?php the_permalink(); ?>">
    <div class="index-lists__list__image">
      <?php if (has_post_thumbnail()): ?>
        <div class="index-lists__list__image__box">
          <?php the_post_thumbnail('medium'); ?>
        </div><!-- /.index-lists__list__image__box -->
      <?php else: ?>
        <div class="index-lists__list__image__box box-default">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cover1.png" alt="アイキャッチ画像" >
        </div><!-- /.index-lists__list__image__box -->
      <?php endif; ?>
    </div><!-- /.index-lists__list__image -->
    <?php 
      $categories = get_the_category();
    ; ?>
    <div class="wrapper">
      <div class="wrapper__box">
        <div class="index-lists__list__category">
          <?php foreach ($categories as $cat): ?>
            <?php echo '<span class="'.$cat->slug.'">'.$cat->name.'</span>'; ?>
          <?php endforeach; ?>
        </div><!-- /.index-lists__list__category -->
        <h2 class="index-lists__list__title"><span><?php the_title(''); ?></span></h2><!-- /.index-lists__list__title -->
        <time class="index-lists__list__time" datetime="<?php the_modified_date('Y-m-d') ?>"><i class="fas fa-redo-alt"></i><?php the_modified_date('Y/m/d'); ?></time><!-- /.index-lists__list__time -->
        <div class="index-lists__list__text">
          <?php the_excerpt(); ?>
        </div><!-- /.index-lists__list__text -->
      </div><!-- /.wrapper__box -->
    </div><!-- /.wrapper -->
  </a>
</li><!-- /.index-lists__list -->