//fadeinup
function fadeInUp (){
  var offset = -300;
  jQuery('.fadeInUp').each(function() {
    var offset_num = Number(jQuery(this).attr('data-offset'));
    if (offset_num) {
      offset = offset_num;
    }
    var elemPos = jQuery(this).offset().top + offset;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass('is-show');
    }
  })
}

//テキスト特殊表示
function switchAnime (){
  var offset = 0;
  jQuery('.switchTrigger').each(function() {
    var offset_num = Number(jQuery(this).attr('data-offset'));
    if (offset_num) {
      offset = offset_num;
    }
    var elemPos = jQuery(this).offset().top + offset;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass('switch');

    }
  })
}

//テキスト色変更
function changeColor (){
  var offset = 0;
  jQuery('.colorTrigger').each(function() {
    var offset_num = Number(jQuery(this).attr('data-offset'));
    if (offset_num) {
      offset = offset_num;
    }
    var elemPos = jQuery(this).offset().top + offset;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass('change');
    }
  })
}

// 表示
function showAnime (){
  var offset = 0;
  jQuery('.showTrigger').each(function() {
    var offset_num = Number(jQuery(this).attr('data-offset'));
    if (offset_num) {
      offset = offset_num;
    }
    var elemPos = jQuery(this).offset().top + offset;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass('is-show');
    }
  })
}

// 連鎖表示
function showChainAnime (){
  var $chain = jQuery('.showChain');
  var offset = 200;
  jQuery('.showChainTrigger').each(function() {
    var offset_num = Number(jQuery(this).attr('data-offset'));
    if (offset_num) {
      offset = offset_num;
    }
    var elemPos = jQuery(this).offset().top + offset;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).addClass('is-show');
      if ($chain) {
        $chain.addClass('is-show');
      }
    }
  })
}

// リスト表示
function listAnime (){
  var offset = 200;
  jQuery('.listTrigger').each(function() {
    var offset_num = Number(jQuery(this).attr('data-offset'));
    if (offset_num) {
      offset = offset_num;
    }
    var elemPos = jQuery(this).offset().top + offset;
    var scroll = jQuery(window).scrollTop();
    var windowHeight = jQuery(window).height();
    if (scroll >= elemPos - windowHeight) {
      jQuery(this).children('.tlist').each(function(i){
        jQuery(this).delay(100 * i).queue(function(){
          jQuery(this).addClass('is-show').dequeue();
        })
      });
    }
  })
}

jQuery(function() {
  var wp_temp_uri = tmp_path.temp_uri;
  var wp_home_url = tmp_path.home_url;

  // wow
  // new WOW().init();

  // ヘッダー
  // トグル
  jQuery('#js-header-toggle').on('click', function() {
    var target = jQuery(this).attr('data-js');
    var $js_target = jQuery(`.js-${target}`);
    jQuery.when(
      $js_target.toggleClass('is-open')
    ).done(function(){
      if ($js_target.hasClass('is-open')) {
        jQuery('html').css('overflow-y','hidden');
        $js_target.css('overflow-y','scroll');
      } else {
        jQuery('html').css('overflow-y','');
        $js_target.css('overflow-y','hidden');
      }
    ;})
  })

  // pagatopボタン動き
  var $pagetop = jQuery('#pagetop');   
  $pagetop.hide();
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 100) {  //100pxスクロールしたら表示
          $pagetop.fadeIn();
      } else {
          $pagetop.fadeOut();
      }
  });
  $pagetop.on('click',function () {
    jQuery('body,html').animate({
        scrollTop: 0
    }, 500); //0.5秒かけてトップへ移動
    return false;
  });

  // dialボタン動き
  var $dial = jQuery('#for-dial');   
  $dial.hide();
  jQuery(window).scroll(function () {
      if (jQuery(this).scrollTop() > 100) {  //100pxスクロールしたら表示
          $dial.fadeIn();
      } else {
          $dial.fadeOut();
      }
  });
  $dial.modaal({
    content_source: '#modal-dial',
    before_open: function() {
      jQuery('html').css('overflow-y','hidden');
    },
    before_close: function() {
      jQuery('html').css('overflow-y','');
    }
  })

  jQuery(window).scroll(function() {
    fadeInUp();
    switchAnime();
    changeColor();
    showAnime();
    showChainAnime();
    listAnime();
  });

});

jQuery(window).on('load', function() {

  // ロード
  jQuery('#for-loader').addClass('loaded');

  // slick
  if (jQuery('#js-main-slide').length) {
    jQuery('#js-main-slide').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll:1,
      speed: 2000,
      autoplay: true,
      autoplaySpeed: 11000,
      fade: true,
      arrows: false,
      dots: false,
      cssEase: 'linear',
      pauseOnHover: false,
      pauseOnFocus: false
    });
    // 1回目以降のオートプレイスピード変更
    jQuery('#js-main-slide').on('afterChange', function(event, slick, currentSlide, nextSlide){
      jQuery('#js-main-slide').slick('slickSetOption', 'autoplaySpeed', '4000', true);
    });
    // ロゴを出して消す
    jQuery('#js-main-logo').fadeIn(3000).delay(4000).fadeOut(3000);
  }

  // masonry
  if (jQuery('.masonry-lists').length) {
    var $masonry_lists = jQuery('.masonry-lists').imagesLoaded(function() {
      $masonry_lists.masonry({
        // options
        itemSelector: '.masonry-list',
        columnWidth: '.masonry-sizer',
        percentPosition: true,
        gutter: 20
      });
    })
  }

  fadeInUp();
  switchAnime();
  changeColor();
  showAnime();
  showChainAnime();
  listAnime();

  // formエラー
  jQuery('span.error').each(function() {
    $prev = jQuery(this).prev('input, textarea');
    $label = $prev.parent().prev('label');
    $prev.addClass('error');
    $label.addClass('error');
  })

});