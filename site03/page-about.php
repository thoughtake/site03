<?php get_header(); ?>
  <div id="main-wrapper" class="wp-page wp-page-about">
    <main class="main">

      <!-- ページタイトル -->
      <div class="page-title about">
        <h1 class="page-title__title"><?php the_title(); ?></h1><!-- /.page-title__title -->
      </div><!-- /.page-title about -->

      <!-- パンクズ -->
      <div class="container container-fluid">
        <?php get_template_part('template-parts/breadcrumb'); ?>
      </div><!-- /.container -->

     <!-- 冒頭 -->
     <div class="page-section about-leading">
       <div class="container container-fluid">
        <p class="switchTrigger splashBg">
          健康意識がかつてないほど高まっている今、<br>体が本来持っている免疫力を向上させる事により、様々な感染症への抵抗力を強めることができるのが「びわきゅう」です。
         </p>
       </div><!-- /.container container-fluid -->
     </div><!-- /.page-section about-leading -->

      <!-- 熱源  -->
      <div class="page-section about-mogusa">
        <div class="container container-fluid">
          <h2 class="about-mogusa__title">熱源はもぐさ</h2><!-- /.about-mogusa__title -->
          <div class="wrapper">
            <div class="about-mogusa__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about1.png" alt="びわきゅうの構造">
            </div><!-- /.about-mogusa__image -->
            <div class="about-mogusa__text">
              <div class="about-mogusa__text__content01">
                <p>
                  <span class="strong">国産天然「よもぎ」</span>を乾燥させ、葉脈だけを残した<span class="strong">上質の「もぐさ」</span>を使用しています。もぐさを燃やした時に出る『煙』や『ヤニ』には素晴らしい効果があり、熱源をもぐさにする事により、<span class="strong">あらゆる相乗効果</span>が期待できます。
                </p>
              </div><!-- /.about-mogusa__text__content01 -->
              <div class="about-mogusa__text__content02">
                <p>もぐさの煙には精油成分（シネオール）があり、煙を吸う事で気管支炎のほか、風邪・インフルエンザなどの病原体の<span class="strong">殺菌効果</span>や<span class="strong">予防</span>、同時に<span class="strong">リラックス効果</span>もあると言われています。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/img/about2.png" alt="よもぎについて">
              </div><!-- /.about-mogusa__text__content02 -->
            </div><!-- /.about-mogusa__text -->
          </div><!-- /.wrapper -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section about-mogusa -->

      <!-- 効果 -->
      <div class="page-section about-efficacy fadeInUp">
        <div class="container container-fluid">
          <h2 class="about-efficacy__title">びわきゅうの効果</h2><!-- /.about-efficacy__title -->
          <div class="wrapper">
            <!-- box -->
            <div class="about-efficacy__box">
              <h3 class="about-efficacy__box__title">グローミュー効果</h3><!-- /.about-efficacy__box__title -->
              <p class="about-efficacy__box__leading switchTrigger splashBg">
                <span>全身にあるミクロの微小な血管(グローミュー)を</span><span>復活させます。</span>
              </p><!-- /.about-efficacy__box__leading -->
              <p class="about-efficacy__box__text">
                グローミューとは動脈と静脈を結んでいる<span class="strong">毛細血管のバイパス</span>の役割をしているもので、全身のいたるところに存在しています。
              </p><!-- /.about-efficacy__box__text -->
              <p class="about-efficacy__box__text">
                しかし、生活習慣の乱れ、ストレス、老化によってグローミューが萎縮したり、消失すると<span class="strong">諸々の病気の下地</span>を作ることになります。
              </p><!-- /.about-efficacy__box__text -->
              <p class="about-efficacy__box__text">
                グローミュー反応とは血液の流れが何らかの原因で阻害されると<span class="strong">毛細血管が再生される</span>現象で、びわきゅうを行うことによりグローミュー反応が<span class="strong">促進される</span>ことが明らかにされています。
              </p><!-- /.about-efficacy__box__text -->
            </div><!-- /.about-efficacy__box -->
            <!-- box -->
            <div class="about-efficacy__box">
              <h3 class="about-efficacy__box__title">温熱効果</h3><!-- /.about-efficacy__box__title -->
              <p class="about-efficacy__box__leading switchTrigger splashBg">
                <span>血管拡張作用で</span><span>血行促進効果があります。</span>
              </p><!-- /.about-efficacy__box__leading -->
              <p class="about-efficacy__box__text">
                <span class="strong">体温が1℃下がると免疫は約30%下がる</span>と言われています。体温維持する事は、免疫力のアップにつながります。
              </p><!-- /.about-efficacy__box__text -->
              <p class="about-efficacy__box__text">
                びわきゅうを3ヶ月続けた結果、<span class="strong">平熱が1℃上がった</span>例もあります。
              </p><!-- /.about-efficacy__box__text -->
              <div class="about-efficacy__box__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about3.png" alt="血管イメージ１" class="blood01">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about4.png" alt="血管イメージ２" class="blood02">
              </div><!-- /.about-efficacy__box__image -->
            </div><!-- /.about-efficacy__box -->
          </div><!-- /.wrapper -->
          <div class="wrapper">
            <!-- box -->
            <div class="about-efficacy__box">
              <h3 class="about-efficacy__box__title">びわエキス効果</h3><!-- /.about-efficacy__box__title -->
              <p class="about-efficacy__box__leading switchTrigger splashBg">
                <span>びわエキスのもつ薬効成分が</span><span>自然治癒力を高めます。</span>
              </p><!-- /.about-efficacy__box__leading -->
              <p class="about-efficacy__box__text">
                エキスを器具の温められたウール部に浸透させ、温きゅうにより成分を皮膚から吸収、リンパ、毛細血管へと続き、<span class="strong">自然治癒力を高めていきます</span>。
              </p><!-- /.about-efficacy__box__text -->
              <p class="about-efficacy__box__text">
                びわ葉・種の主な作用は<span class="strong">鎮痛・抗炎症作用</span>、<span class="strong">好活性酸素作用</span>があり、このびわ葉と種粉を高濃度アルコールに漬け込み、成分を抽出したものが「びわエキス」です。
              </p><!-- /.about-efficacy__box__text -->
              <div class="about-efficacy__box__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about5.png" alt="エキスイメージ１" class="extract01">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about6.png" alt="エキスイメージ２" class="extract02">                
              </div><!-- /.about-efficacy__box__image -->
            </div><!-- /.about-efficacy__box -->
            <!-- box -->
            <div class="about-efficacy__box">
              <h3 class="about-efficacy__box__title">手当て効果</h3><!-- /.about-efficacy__box__title -->
              <p class="about-efficacy__box__leading switchTrigger splashBg">
               <span>心をこめて、心と身をほぐし、</span><span>手当てをします。</span>
              </p><!-- /.about-efficacy__box__leading -->
              <p class="about-efficacy__box__text">
                しっかり身体を温めたら、手技・足技をつかってほぐしていきます。「びわきゅう」独特のこの技術は、<span class="strong">心も身体もほぐれ</span>、<span class="strong">血行も良くなります</span>。
              </p><!-- /.about-efficacy__box__text -->
              <div class="about-efficacy__box__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about7.png" alt="ほぐしイメージ" class="loosen">         
              </div><!-- /.about-efficacy__box__image -->
            </div><!-- /.about-efficacy__box -->
          </div><!-- /.wrapper -->
        </div><!-- /.container container-fluid -->
        <div class="container container-fluid">
          <div class="about-efficacy__list">
            <h3 class="about-efficacy__list__title">
              びわきゅうの効果 一覧
            </h3><!-- /.about-efficacy__list__title -->
            <ul class="listTrigger">
              <li class="tlist">抗がん作用</li>
              <li class="tlist">ガン細胞増殖抑制作用</li>
              <li class="tlist">ガン細胞アポトーシス誘導作用</li>
              <li class="tlist">細菌やウイルス感染症の予防・治療</li>
              <li class="tlist">自己免疫不全(リューマチ、アトピーなど)の改善</li>
              <li class="tlist">腫瘍などの治療</li>
              <li class="tlist">体内の活性酸素除去</li>
              <li class="tlist">活性酸素抑制作用</li>
              <li class="tlist">鎮痛・抗炎症作用</li>
              <li class="tlist">解毒作用</li>
              <li class="tlist">組織再生修復作用</li>
              <li class="tlist">抗糖尿作用</li>
              <li class="tlist">肝硬変、虚血性心疾患(狭心症・心筋梗塞)の予防・治療</li>
              <li class="tlist">高脂血症(高コレステロール、高血中性脂肪)の治療</li>
              <li class="tlist">脳梗塞の脳機能改善</li>
              <li class="tlist">アレルギー性皮膚炎、花粉症の防止</li>
              <li class="tlist">皮膚及び毛髪の種々の障害/病変の予防・治療・健常維持</li>
              <li class="tlist">メラニン生成抑制作用</li>
              <li class="tlist">抗炎症作用</li>
              <li class="tlist">保温作用</li>
              <li class="tlist">高血圧抑制作用</li>
              <li class="tlist">高血糖降下作用</li>
              <li class="tlist">抗酸化作用</li>
              <li class="tlist">体脂肪低下</li>
              <li class="tlist">コレステロール低下</li>
            </ul>
          </div><!-- /.about-efficacy__list -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section about-efficacy -->
      
      <!-- 疑問 -->
      <div class="page-section about-question">
        <div class="container container-fluid fadeInUp">
          <h2 class="about-question__title"><span>びわきゅうって</span><span>熱くありませんか？</span></h2><!-- /.about-question__title -->
          <div class="about-question__image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about8-1.png" alt="お灸を据えるイメージ" class="okyu01">
            <img src="<?php echo get_template_directory_uri(); ?>/img/about8-2.png" alt="ばつ" class="okyu02 showChainTrigger">
          </div><!-- /.about-question__image -->
          <p class="about-question__answer answer01 showChain">
            熱くありません
          </p><!-- /.about-question__answer answer01 -->
          <div class="about-question__answer answer02 showTrigger">
            <p class="about-question__answer__text">
              器具をもぐさで温め、体の痛むところ、気になるところにあてる<span class="strong">気持ちのいい温きゅう</span>です。
            </p>
            <div class="about-question__answer__image">
              <img src="<?php echo get_template_directory_uri(); ?>/img/about9.png" alt="気持ちいい温きゅう">
            </div><!-- /.about-question__answer__image -->
          </div><!-- /.about-question__answer answer02 showTrigger -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section about-question -->

      <!-- 豆知識 -->
      <div class="page-section about-tips">
        <div class="container container-fluid fadeInUp">
          <div class="wrapper">
            <h2 class="about-tips__title">びわきゅう豆知識</h2><!-- /.about-tips__title -->
            <div class="about-tips__content content01">
              <h3 class="about-tips__content__title">光明皇后が施薬院でびわきゅう？</h3><!-- /.about-tips__content__title -->
              <p class="about-tips__content__text">
                インドの古い仏典、涅槃経(ねはんぎょう)の中で、びわの葉を、憂い無き扇、すなわち「無憂扇(むゆうせん)」と名付けられたように、古くからびわは人々を救済してきました。 日本では、奈良時代天平2年頃に光明皇后がつくられた救済施設「施薬院」で、びわの葉を用いて多くの病気の人々を救済してきたと言われています。
              </p><!-- /.about-tips__content__text -->
              <div class="about-tips__content__image">
                <img src="<?php echo get_template_directory_uri(); ?>/img/about10.png" alt="施薬院イメージ">
              </div><!-- /.about-tips__content__image -->
            </div><!-- /.about-tips__content content01 -->
            <div class="about-tips__content content02">
              <h3 class="about-tips__content__title">「好転反応」とは？</h3><!-- /.about-tips__content__title -->
              <p class="about-tips__content__text">
                「好転反応」とは、「好」に「転」とあり、つまり体質が良い方向に変わろうとするときの反応です。体に溜まった毒素が出ている、病気が良くなっている前兆、良く効いている証拠としてみなします。 症状は様々ですが、主に倦怠感、眠気、体がかゆくなる、熱が出るなど、びわきゅうをした当日、翌日あるいは数日後に症状が出るケースもあります。
              </p><!-- /.about-tips__content__text -->
            </div><!-- /.about-tips__content content02 -->

          </div><!-- /.wrapper -->
        </div><!-- /.container container-fluid -->
      </div><!-- /.page-section about-tips -->

    </main><!-- /main -->
  </div><!-- /#wrapper .wp-page wp-page-about -->
<?php get_footer(); ?>