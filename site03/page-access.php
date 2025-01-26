<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-access">
    <main class="main">

      <!-- ページタイトル -->
      <div class="page-title access">
        <h1 class="page-title__title"><?php the_title(); ?></h1><!-- /.page-title__title -->
      </div><!-- /.page-title access-->

      <!-- パンクズ -->
      <div class="container container-fluid">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

     <!-- アクセス 日本橋-->
     <div class="page-section access-content nihonbashi">
       <div class="container container-fluid">
        <h2 class="access-content__title">
          <span data-ruby="むゆうせんとよみ">無憂扇豊海</span><span class="hoyojo">日本橋支店</span>
        </h2><!-- /.access-content__title -->
        <div class="access-content__address access-text">
          <p class="wrapper">
          〒103-0005<br>東京都中央区日本橋久松町12-11<br>リバース日本橋久松町201
          </p><!-- /.wrapper -->
        </div><!-- /.access-content__address -->
        <div class="access-content__access access-text">
          <p class="wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/train_64_ffd900.png" alt="電車"><span class="access-access__train">都営新宿線「馬喰横山」 徒歩3分</span><br><!-- /.access-access__train -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/train_64_ffd900.png" alt="電車"><span class="access-access__train">都営浅草線「東日本橋」 徒歩3分</span><br><!-- /.access-access__train -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/train_64_ffd900.png" alt="電車"><span class="access-access__train">JR「馬喰町駅」 徒歩6分</span><br><!-- /.access-access__train -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/train_64_ffd900.png" alt="電車"><span class="access-access__train">地下鉄日比谷線「人形町」 徒歩8分</span><br><!-- /.access-access__train -->           
          </p><!-- /.wrapper -->
        </div><!-- /.access-content__access -->
        <div class="access-content__contact access-text">
          <p class="wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/tel_64.png" alt="電話"><img src="<?php echo get_template_directory_uri(); ?>/img/icon/fax_64.png" alt="FAX"><span class="access-content__contact__tel"><a href="tel:0363143600">03-6314-3600</a></span><span class="access-contact__kinds">(TEL・FAX)</span><!-- /.access-contact__tel -->
          </p><!-- /.wrapper -->
        </div><!-- /.access-content__contact -->
      </div><!-- /.container container-fluid -->
      <div class="access-content__image">
         <div class="img-box">
           <img src="<?php echo get_template_directory_uri(); ?>/img/shiten01.jpg" alt="支店写真01" class="access-img01">
         </div><!-- /.img-box -->
         <div class="img-box">
           <img src="<?php echo get_template_directory_uri(); ?>/img/slide5-pc.jpg" alt="支店写真02" class="access-img02">
         </div><!-- /.img-box -->
       </div><!-- /.access-content__image -->
       <div class="access-content__map">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4817010681613!2d139.7822662156844!3d35.68976208019236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018894dc0358459%3A0xa1d6a2991ec1b400!2z44CSMTAzLTAwMDUg5p2x5Lqs6YO95Lit5aSu5Yy65pel5pys5qmL5LmF5p2-55S677yR77yS4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1645956461354!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="google-map"></iframe>
       </div><!-- /.access-content__map -->
     </div><!-- /.page-section .access-content -->

     <!-- アクセス 湯河原 -->
     <div class="page-section access-content yugawara">
       <div class="container container-fluid">
        <h2 class="access-content__title">
          <span data-ruby="むゆうせんとよみ">無憂扇豊海</span><span class="hoyojo">湯河原保養所</span>
        </h2><!-- /.access-content__title -->
        <div class="access-content__address access-text">
          <p class="wrapper">
            〒259-0304<br>神奈川県足柄下郡湯河原町宮下737-40
          </p><!-- /.wrapper -->
        </div><!-- /.access-content__address -->
        <div class="access-content__access access-text">
          <p class="wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/train_64.png" alt="電車"><span class="access-content__access__train">JR東海道線「湯河原」駅下車、タクシーで5分</span><br><!-- /.access-content__access__train -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/taxi_64.png" alt="タクシー"><span class="access-content__access__taxi">『花咲（はなさき）の一番上の びわきゅう』と運転手さんにお話しください</span><!-- /.access-content__access__taxi -->
          </p><!-- /.wrapper -->
        </div><!-- /.access-content__access -->
        <div class="access-content__contact access-text">
          <p class="wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/tel_64.png" alt="電話"><span class="access-content__contact__tel"><a href="tel:0465466790">0465-46-6790</a></span><br><!-- /.access-content__contact__tel -->
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon/fax_64.png" alt="FAX"><span class="access-content__contact__fax">0465-46-6791</span><span class="access-content__contact__kinds">(FAX)</span><!-- /.access-content__contact__fax -->
          </p><!-- /.wrapper -->
        </div><!-- /.access-content__contact -->
      </div><!-- /.container container-fluid -->
      <div class="access-content__image">
         <div class="img-box">
           <img src="<?php echo get_template_directory_uri(); ?>/img/hoyojo1.jpeg" alt="保養所写真01" class="access-img01">
         </div><!-- /.img-box -->
         <div class="img-box">
           <img src="<?php echo get_template_directory_uri(); ?>/img/hoyojo3.jpeg" alt="保養所写真02" class="access-img02">
         </div><!-- /.img-box -->
       </div><!-- /.access-content__image -->
       <div class="access-content__map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3262.358467287753!2d139.0867763156021!3d35.14767976665446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019bc51ae086db3%3A0xb0057fa21b2383f7!2z44CSMjU5LTAzMDQg56We5aWI5bed55yM6Laz5p-E5LiL6YOh5rmv5rKz5Y6f55S65a6u5LiL77yX77yT77yX4oiS77yU77yQ!5e0!3m2!1sja!2sjp!4v1596522476201!5m2!1sja!2sjp" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="google-map"></iframe>
       </div><!-- /.access-content__map -->
     </div><!-- /.page-section .access-content -->

      
    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-page-access -->
<?php get_footer(); ?>