<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-notfound">
    <main class="main">

      <!-- ページタイトル -->
      <div class="page-title notfound">
        <h1 class="page-title__title">404 NOT FOUND</h1><!-- /.page-title__title -->
      </div><!-- /.page-title -->

     <!-- 文章 -->
     <div class="page-section notfound-content">
      <div class="container container-fluid">

        <p>
          お探しのページが見つかりませんでした。<br>
          申し訳ございませんが、<a href="<?php echo home_url(); ?>">こちらのリンク</a>からトップページにお戻りください。
        </p>
          

      </div><!-- /.container container-fluid -->
     </div><!-- /.page-section .notfound-content -->

      
    </main><!-- /main -->
  </div><!-- /#wrapper.front-page -->
<?php get_footer(); ?>