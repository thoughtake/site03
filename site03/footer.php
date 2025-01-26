  <footer class="footer">
    <p>Copyright&copy; 無憂扇 豊海 All Rights Reserved.</p>
  </footer><!-- /footer -->

  <div class="modal-dial" id="modal-dial">
    <div class="dial-box">
      <div class="dial-title"><span>びわきゅう</span><span>相談ダイヤル</span></div><!-- /.dial-title -->
      <a href="tel:0363143600" class="dial-tell"><i class="fa fa-phone"></i>03-6314-3600</a>
      <p class="dial-text">
        お気軽にご相談ください。<br><span>営業時間は平日9時〜17時</span><span>となっております。</span>
      </p>
    </div><!-- /.dial-box -->
  </div><!-- /#for-modal.modal -->

  <!-- ダイヤルボタン -->
  <button class="dial" id="for-dial"><i class="fa fa-phone"></i></button>  

  <!-- トップへ戻るボタン -->
  <button class="pagetop" id="pagetop"><span></span><span></span></button>  

  <div class="loader" id="for-loader">
    <div class="loader__load">
      Loading...
    </div><!-- /.loader__load -->
  </div><!-- /#for-loader.loader -->

  <?php 
  wp_enqueue_script('jquery') ;
  // wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('modaal', get_template_directory_uri() . '/js/modaal.min.js', array( 'jquery' ), '1.0.0', true);
  wp_enqueue_script('muyusen-main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.7', true);
  $tmp_path_arr = array(
    'temp_uri' => get_template_directory_uri(),
    'home_url' => home_url()
   );
   wp_localize_script( 'muyusen-main', 'tmp_path', $tmp_path_arr );
  wp_footer(); 
  ?>
</body>
</html>