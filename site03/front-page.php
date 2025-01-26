<?php get_header(); ?>
  <div id="main-wrapper" class="wp-front-page">
    <main class="main">

      <!-- トップ画像 -->
      <div class="main-visual">
        <div class="main-visual__logo" id="js-main-logo"></div>
        <div class="slide-wrapper" id="js-main-slide">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpeg" alt="イメージ1" class="slide-common">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide2-sp.jpg" alt="イメージ2" class="slide-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide2-pc.jpg" alt="イメージ2" class="slide-pc">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide3-sp.jpg" alt="イメージ3" class="slide-sp">
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide3-pc.jpg" alt="イメージ3" class="slide-pc">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpeg" alt="イメージ4" class="slide-common">
          </div>
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/slide5-pc.jpg" alt="イメージ5" class="slide-common">
          </div>
        </div><!-- /.slide-wrapper -->
      </div><!-- /.main-visual -->

      <!-- 冒頭 -->
      <section class="section-leading">
        <div class="container container-fluid fadeInUp">
          <h2 class="section-title">極上の癒し<br>「びわきゅう」</h2>
          <p class="section-lead">「びわきゅう」は、びわのエキスと棒もぐさを利用した温きゅうです。<br>無憂扇 豊海は、「びわきゅう」による施術をサポートします。</p>
        </div><!-- /.container -->
      </section><!-- /.section-leading -->

      <!-- びわきゅうとは -->
      <section class="section-about">
        <div class="container container-fluid fadeInUp">
          <h2 class="section-title">びわきゅうの効果</h2>
          <p class="section-lead"><span>健康意識がかつてないほど高まっている今、</span><br><span>体が本来持っている免疫力を向上させる事により、</span><span>様々な感染症への抵抗力を強めることができるのが「びわきゅう」です。</span></p>
          <div class="section-box">
            <div class="box-left">
              <img src="<?php echo get_template_directory_uri(); ?>/img/biwakyu1.png" alt="びわきゅう">
            </div><!-- /.box-left -->
            <div class="box-right">
              <h3 class="efficacy-title colorTrigger efficacy01">グローミュー効果</h3><!-- /.efficacy-title -->
              <p class="efficacy-text">
                <span>全身にあるミクロの微小な血管（グローミュー）を</span><span>復活させます。</span>
              </p><!-- /.efficacy-text -->
              <h3 class="efficacy-title colorTrigger efficacy01">温熱効果</h3><!-- /.efficacy-title -->
              <p class="efficacy-text">
                <span>血管拡張作用で</span><span>血行促進効果があります。</span>
              </p><!-- /.efficacy-text -->
              <h3 class="efficacy-title colorTrigger efficacy01">びわエキス効果</h3><!-- /.efficacy-title -->
              <p class="efficacy-text">
                <span>びわエキスのもつ薬効成分が</span><span>自然治癒力を高めます。</span>        
              </p><!-- /.efficacy-text -->
              <h3 class="efficacy-title colorTrigger efficacy01">手当て効果</h3><!-- /.efficacy-title -->
              <p class="efficacy-text">
                <span>手技・足技を使う「びわきゅう」独特の技術で、</span><span>身体がほぐれ、血行も良くなります。</span>
              </p><!-- /.efficacy-text -->
            </div><!-- /.box-right -->
          </div><!-- /.section-box -->
          <div class="link-button button">
            <a href="<?php echo home_url('/about'); ?>">びわきゅうとは</a>
          </div><!-- /.link-button button -->
        </div><!-- /.container -->
      </section><!-- /.section-about -->
    
      <!-- 武藤つや子 -->
      <section class="section-greeting">
        <div class="frame-circle topleft"></div>
        <div class="frame-circle topright"></div>
        <div class="frame-circle bottomleft"></div>
        <div class="frame-circle bottomright"></div>
        <div class="container container-fluid fadeInUp">
          <h2 class="section-title"><span>代表</span><span>武藤 つや子</span></h2><!-- /.section-title -->
          <div class="section-box">
            <div class="box-left">
              <h3 class="box-title">奇跡の３５年</h3><!-- /.box-title -->
              <div class="history-box">
                <p>2005年6月</p>
                <p><span>卵巣がんで余命数ヶ月と診断される。</span></p>
              </div><!-- /.history-box -->
              <div class="history-box">
                <p>2007年2月</p>
                <p><span>バス事故にて脊髄損傷</span><br><span>車椅子生活になると宣言される。</span></p>
              </div><!-- /.history-box -->
            </div><!-- /.box-left -->
            <div class="box-center">
              <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/tuyako1.jpeg" alt="当時の写真"></div><!-- /.img-box -->
              <p>2006年3月、腹水が胸部にまで達し不整脈が出ていた。</p>
            </div><!-- /.box-center -->
            <div class="box-right">
              <p class="box-lead">今では…私にとってガンはお宝になりました！</p><!-- /.box-lead -->
              <p>無憂扇きゅうは、予防医学の最先端だと思っております。<br>治療医学から予防医学へ…<br>自分の身は自分で守る！</p>
            </div><!-- /.box-right -->
          </div><!-- /.section-box -->
          <div class="movie-box">
            <h3 class="box-title"><span><span>動画</span><br>自己紹介</span></h3><!-- /.box-title -->
            <div class="iframe-wrapper youtube">
              <iframe src="https://www.youtube.com/embed/ZZqwxDSTAuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div><!-- /.iframe-wrapper -->
          </div><!-- /.movie-box -->
          <div class="link-button button">
            <a href="<?php echo home_url('/greeting'); ?>">ごあいさつ</a>
          </div><!-- /.link-button button -->
        </div><!-- /.container container-fluid fadeInUp -->
      </section><!-- /.section-greeting -->

      <!-- コース -->
      <section class="section-course">
        <div class="container container-fluid fadeInUp">
          <h2 class="section-title">施術のご案内</h2><!-- /.section-title -->
          <div class="section-box">
            <div class="box-left">
              <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/course2.jpg" alt="施術の写真"></div><!-- /.img-box -->
            </div><!-- /.box-left -->
            <div class="box-right">
              <div class="course-price">
                <h3>料金</h3>
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
                <h3>施術内容</h3>
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
      <section class="section-thoughts">
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
              <i class="fa fa-phone"></i><span class="dial-tel">03-6314-3600</span>
            </div><!-- /.dial-tel -->
          </div><!-- /.thoughts-dial -->
          <div class="link-button button">
            <a href="<?php echo home_url('/contact'); ?>"><span>お問い合わせフォーム</span><span>もございます</span></a>
          </div><!-- /.link-button button -->
        </div><!-- /.container -->
      </section><!-- /.section-thoughts -->

      <!-- 施設の画像 -->
      <div class="sub-visual01">
        <div class="sub-visual01__box left">
          <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/shiten01.jpg" alt="支店の画像01"></div><!-- /.img-box -->
          <p class="sub-visual01__box__name">
          無憂扇豊海 日本橋支店
          </p><!-- /.sub-visual01__box__name -->
        </div><!-- /.sub-visual__left -->
        <div class="sub-visual01__box right">
          <div class="img-box"><img src="<?php echo get_template_directory_uri(); ?>/img/hoyojo1.jpeg" alt="保養所の画像01"></div><!-- /.img-box -->
          <p class="sub-visual01__box__name">
          無憂扇豊海 湯河原保養所
          </p><!-- /.sub-visual01__box__name -->
        </div><!-- /.sub-visual__right -->
      </div><!-- /.sub-visual01 -->

      <!-- お知らせ -->
      <section class="section-news">
        <div class="container container-fluid fadeInUp">
          <h2 class="section-title">お知らせ</h2><!-- /.section-title -->
          <ul class="news-lists">
            <?php 
            $args = Array(
                    'post_type' => 'post',        
                    'posts_per_page' => 5,    
                    'category_name' => 'information',
                    'orderby' => 'modified',
                    'post_status' => 'publish'
            );
            $wp_query = new WP_Query( $args );
            ; ?>
            <?php if ($wp_query->have_posts()): ?>
              <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <li class="news-lists__list">
                <a href="<?php the_permalink(); ?>">
                  <time class="news-lists__list__time" datetime="<?php the_modified_date('Y-m-d') ?>"><?php the_modified_date('Y/m/d'); ?></time><!-- /.news-lists__list__time -->
                  <p class="news-lists__list__title"><?php the_title(''); ?></p><!-- /.news-lists__list__title -->
                </a>
              </li><!-- /.news-lists__list -->                
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?> 
          </ul><!-- /.news-lists -->
          <div class="link-button button">
            <?php $cat=get_category_by_slug('information'); ?>
            <a href="<?php echo get_category_link($cat->cat_ID); ?>">お知らせ一覧</a>
          </div><!-- /.link-button button -->
        </div><!-- /.container -->
      </section><!-- /.section-news -->

      <section class="section-access">
        <?php get_template_part('template-parts/access'); ?>
      </section><!-- /.section-access -->

    </main><!-- /main -->
  </div><!-- /#wrapper.front-page -->
<?php get_footer(); ?>