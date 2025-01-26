<?php if (get_field('display')['value'] === "show"): ?>
  <div class="thoughts-lists__list masonry-list tlist">
    <div class="reviewer">
      <?php if (get_field('gender')['value'] === "man"): ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/man01.jpg" alt="男性アイコン">
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/img/woman01.jpg" alt="女性アイコン">
      <?php endif; ?>
      <div class="detail">
        <span><?php echo get_field('gender')['label']; ?></span><span><?php echo get_field('age')['label']; ?></span>
      </div><!-- /.detail -->                
    </div><!-- /.reviewer -->
    <p>
      <?php the_field('text'); ?>
    </p>
  </div><!-- /.thoughts-lists__list -->
<?php endif; ?>