<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-greeting">
    <main class="main">

      <!-- ページタイトル -->
      <div class="page-title greeting">
        <h1 class="page-title__title"><?php the_title(); ?></h1><!-- /.page-title__title -->
      </div><!-- /.page-title  greeting-->

      <!-- パンクズ -->
      <div class="container container-fluid">
       <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

      <!-- 指導員 -->
      <div class="page-section greeting-instructor">
        <div class="container container-fluid">
          <div class="text-wrapper">
            <h2 class="greeting-instructor__name">
              <span class="switchTrigger splashBg">代表</span><br><span class="switchTrigger splashBg">武藤 つや子</span>
            </h2><!-- /.greeting-instructor__name -->
            <p class="greeting-instructor__leading">
              <span>無憂扇きゅうで</span><span>奇跡が起きました！</span>
            </p><!-- /.greeting-instructor__leading -->
          </div><!-- /.text-box -->
          <div class="image-wrapper">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/img/tuyako2.jpeg" alt="武藤つや子写真">
            </div><!-- /.img-box -->
          </div><!-- /.image-box -->
        </div><!-- /.container -->
      </div><!-- /.greeting-instructor -->

      <!-- ヒストリー１  -->
      <div class="page-section greeting-history history01">
        <div class="container container-fluid fadeInUp">
          <h3 class="greeting-history__title switchTrigger splashBg" data-offset="300"><span>余命1ヶ月と宣言された</span><span>4.6kgの卵巣癌が完治した</span></h3>
          <div class="wrapper">
            <div class="greeting-history__image">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tuyako1.jpeg" alt="当時の写真">
              </div><!-- /.img-box -->
              <span>↑2006年3月、腹水が胸部にまで達し不整脈が出ていた。</span>
            </div><!-- /.greeting-history__image -->
            <div class="greeting-history__text">
              <p>
                2005年6月に慈恵医大で<span class="strong">卵巣癌</span>が発覚し、発見が遅かったため、<span class="strong">余命数ヶ月</span>と診断されました。<br>東京女子医大、九州大とセカンドオピニオンを続けましたが、すべて同診断で、1ヶ月目から腹水が溜まっていました。<br>全身倦怠、食欲不振、体重減少、貧血、心不全などの全身症状が表れてきました。
              </p>
              <p>
                余命数ヶ月が10ヶ月も延命でき、2006年3月、ホスピス入所が決まり、<span class="strong">いつ死んでもおかしくない状態</span>が続きました。<br>腹水は胸部にまで達して、なんども腸が締め付けられて、壊死を起こす腸閉塞の症状が突発的に9回も起きて、その度に気を失っていました。<span class="strong">生きているのが不思議</span>だと医者に言われました。
              </p>
              <p>
                ところが、4月に東京女子医大のM教授より、腹水がきれいだと言われ、手術する事になりました。<br>手術は成功し、4.6kgの卵巣癌と、7,400ccの腹水がとれ、奇跡的に一命をとりとめました。
              </p>
              <p>
                しかし、手術中に、あまりに肥大化した卵巣癌の袋が破れ、<span class="strong">中の細胞癌が腸内に散ってしまった</span>のです。<br>主治医は、<span class="strong">すぐに再発する</span>と診断し、術後2週間で抗がん剤を投与しましたが、拒否反応が起きて中止となってしまいました。
              </p>
              <p>
                癌細胞を体中に散らせてしまった以上、いつ再発してもおかしくない状態ですが、 その後<span class="strong">何の治療もせず</span>、ただいま<span class="strong">毎日「びわきゅう」だけ</span>で、10年以上誰よりも健康な毎日を送っています。もちろん、<span class="strong">血液の腫瘍マーカーも正常値！</span>
              </p>
            </div><!-- /.greeting-history__text -->
          </div><!-- /.wrapper -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section greeting-history history01 -->

      <!-- ヒストリー２ -->
      <div class="page-section greeting-history history02">
        <div class="container container-fluid fadeInUp">
          <h3 class="greeting-history__title switchTrigger splashBg" data-offset="300">
            <span>生涯、車椅子生活と宣言された脊髄損傷が</span><span>なんと3年で、床に手がつく程に回復</span>
          </h3><!-- /.greeting-history__title -->
          <div class="wrapper">
            <div class="greeting-history__text">
              <p>
                2007年2月8日、インド旅行中に<span class="strong">12番胸椎を圧迫骨折</span>し、帰国後、病院で診察したところ、<span class="strong">「即入院で絶対安静！」</span>と言われました。<br>どういう治療か尋ねたところ、胸から腰にかけて、石膏で型にしたコルセットをはめて、寝たきり状態で自然に骨が固まるまで待つしかなく、<span class="strong">損傷した脊髄の神経を再生させる事は医学的に不可能</span>との診断でした。
              </p>
              <p>
                病名は<span class="strong">Th12胸椎圧迫骨折</span>、<span class="strong">椎間板変性と膨隆(ぼうりゅう)を伴う変形性腰椎症</span>、<span class="strong">胸部脊柱管狭窄症</span>！
              </p>
              <p>
                今は一応歩けてはいるが、近い将来、いつ尿意も感じられない状態になってもおかしくなく、その場合は下半身麻痺となって、<span class="strong">車椅子の生活になる</span>との診断でした。
              </p>
              <p>
                私は、入院を辞退し、コルセットのみを装着しましたが、2日目で腰痛がおきて取り外しました。<br>以後、骨折部分は、お椀をのせたくらい腫れていましたが、<span class="strong">毎日3時間ほどびわきゅう</span>を続けました。<br>それから半年くらいで脊柱損傷による激痛もだいぶ軽くなり、歩行も10m歩くと息がつけないほどだったのが、薄紙をはぐように<span class="strong">正常に歩ける</span>ようになってきました。
              </p>
              <p>
                背中もせむしのようでしたが、回復とともにまっすぐになり、現在は<span class="strong">10kgの荷物を持て</span>、<span class="strong">屈伸運動もでき</span>、<span class="strong">床に手のひらが付く</span>ほどになりました。
              </p>
              <p>
                びわきゅうを3年やり続けた成果だと思っています。
              </p>
            </div><!-- /.greeting-history__text -->
            <div class="greeting-history__image">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/mri.jpeg" alt="MRI">
              </div><!-- /.img-box -->
              <span>↑事故直後、日本の病院で診察を受けた際のMRI</span>
            </div><!-- /.greeting-history__image -->
          </div><!-- /.wrapper -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section greeting-history -->

      <div class="page-section greeting-movie">
        <div class="container container-fluid fadeInUp">
          <div class="iframe-wrapper youtube">
            <iframe src="https://www.youtube.com/embed/ZZqwxDSTAuI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div><!-- /.iframe-wrapper -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section greeting-movie -->

      <div class="page-section greeting-message">
        <div class="container container-fluid fadeInUp">
          <p>
            無憂扇きゅうは、予防医学の最先端だと思っております。<br>治療医学から予防医学へ…<br>自分のこと、ご家族、お友達…<br>気になっていることがあれば、この機会にご相談ください。
          </p>
          <p>楽しくお話しさせていただこうと思っております。</p>
        </div><!-- /.container container-fluid fadeInUp -->
      </div><!-- /.page-section greeting-message -->
      

    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-page-greeting -->
<?php get_footer(); ?>