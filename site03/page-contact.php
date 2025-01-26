<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-contact">
    <main class="main">

      <!-- ページタイトル -->
      <div class="page-title contact">
        <h1 class="page-title__title"><?php the_title(); ?></h1><!-- /.page-title__title -->
      </div><!-- /.page-title contact-->

      <!-- パンクズ -->
      <div class="container container-fluid">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

     <!-- フォーム全体 -->
     <div class="page-section contact-content">
      <div class="container container-fluid">
        <!-- メッセージ -->
        <p class="contact-content__message">
          <span>施術の予約・直接のご相談をご希望のかたは</span><br><span>お気軽にお電話にてお問い合わせください。</span>
        </p><!-- /.contact-content__message -->
        <!-- 電話 -->
        <p class="contact-content__tel">
          <i class="fa fa-phone"></i><span class="access-content__contact__tel"><a href="tel:0363143600">03-6314-3600</a></span><!-- /.access-content__contact__tel -->
        </p><!-- /.contact-content__tel -->

        <!-- 注意書き -->
        <div class="contact-content__notes">
          <ul>
            <li class="contact-content__notes__note">
              ・ご回答は原則、月曜日～金曜日(祝日および12月28日～1月5日を除く)の営業時間にご連絡させていただいております。
            </li><!-- /.contact-content__notes__note -->
            <li class="contact-content__notes__note">
              ・お問い合わせの内容によってはご返答いたし兼ねる場合もございますので、予めご了承ください。
            </li><!-- /.contact-content__notes__note -->
            <li class="contact-content__notes__note">
              ・迷惑メールフィルターを設定の方は「<span class="strong">contact@muyusen-toyomi.com</span>」から受信できるように設定をお願いいたします
            </li><!-- /.contact-content__notes__note -->
            <li class="contact-content__notes__note">
              ・お問い合わせの送信後3日以上過ぎてもメールが届かない場合はお手数ですがお電話にてご連絡ください。
            </li><!-- /.contact-content__notes__note -->
            <li class="contact-content__notes__note">
              ・<span class="strong">営業を目的としたお問合わせ</span>はご遠慮ください。
            </li><!-- /.contact-content__notes__note -->
          </ul>
        </div><!-- /.contact-content__notes -->
        <!-- 通常フォーム -->
        <div class="contact-content__form">
           <!-- wp-form -->
           <?php the_content(); ?>
        </div><!-- /.contact-content__form -->

      </div><!-- /.container container-fluid -->
     </div><!-- /.page-section .contact-content -->

     <div class="page-section contact-access">
      <?php get_template_part('template-parts/access'); ?>
     </div><!-- /.page-section contact-access -->

      
    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-page-contact -->
<?php get_footer(); ?>