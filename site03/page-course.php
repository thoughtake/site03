<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-course">
    <main class="main">

      <!-- ページタイトル -->
      <div class="page-title course">
        <h1 class="page-title__title"><?php the_title(); ?></h1><!-- /.page-title__title -->
      </div><!-- /.page-title course -->

      <!-- パンクズ -->
      <div class="container container-fluid">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

     <!-- コース -->
     <section class="page-section course-content">
        <div class="container container-fluid">
          <div class="section-box">
            <div class="box-left">
              <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/course2.jpg" alt="施術の写真"></div><!-- /.img-box -->
            </div><!-- /.box-left -->
            <div class="box-right">
              <div class="course-price">
                <h2>料金</h2>
                <table>
                  <tr>
                    <td>60<span class="unit">分</span></td>
                    <td><span class="price">6,000<span class="unit">円</span></span></td>
                  </tr>
                  <tr>
                    <td>120<span class="unit">分</span></td>
                    <td><span class="price">10,000<span class="unit">円</span></span></td>
                  </tr>
                </table>
              </div><!-- /.course-price -->
              <div class="course-content">
                <h2>施術内容</h2>
                <p>症状に合わせて施術をさせていただきます。</p>
                <p>症状によって、<span>びわ温湿布</span><span>踏み込み</span><span>指圧マッサージ</span><span>ツボ刺激</span><span>経絡びわきゅう</span>などを加えます。<br>ご希望がございましたらお気軽にお申し付けください。</p>
              </div><!-- /.course-content -->
              <div class="course-note01"></div><!-- /.course-note01 -->
              <div class="course-note02"></div><!-- /.course-note02 -->
            </div><!-- /.box-right -->
          </div><!-- /.section-box -->
        </div><!-- /.container container-fluid fadeInUp -->
      </section><!-- /.section-course -->

      <!-- 講座の感想 -->
      <section class="page-section course-thoughts">
        <div class="container container-fluid fadeInUp">
          <div class="thoughts-title">びわきゅうを体験された方々から<br>嬉しい感想が届いています</div><!-- /.section-title -->
          <?php 
              // 投稿タイプ
            $postargs = array(
            'post_type' => 'review',
            'posts_per_page' => -1,
            'meta_key'			=> 'no',
            'orderby'			=> 'meta_value',
            'order'				=> 'ASC'
            );
            $the_query = new WP_Query($postargs);
            if (!empty($the_query)):
          ?>  
              <div class="thoughts-lists masonry-lists listTrigger">
                <div class="masonry-sizer"></div><!-- /.masonry-sizer -->
                <?php if( $the_query->have_posts() ) : ?>
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                  <?php get_template_part('template-parts/review', 'posts', $args); ?>
                <?php endwhile; ?>
                <?php endif; ?>
              </div><!-- /.thoughts-lists -->
            <?php endif; ?>
          <?php wp_reset_postdata(); ?>
          <div class="thoughts-dial">
            <div class="dial-title"><span>まずはお気軽に</span><span>ご相談ください</span></div><!-- /.dial-title -->
            <div class="dial-tel">
              <i class="fa fa-phone"></i><a href="tel:0363143600" class="dial-tel">03-6314-3600</a>
            </div><!-- /.dial-tel -->
          </div><!-- /.thoughts-dial -->
          <div class="link-button button">
            <a href="<?php echo home_url('/contact'); ?>"><span>お問い合わせフォーム</span><span>もございます</span></a>
          </div><!-- /.link-button button -->
        </div><!-- /.container -->
      </section><!-- /.section-thoughts -->

      
    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-page-course -->
<?php get_footer(); ?>