// --- 共通関数 -----------------------------------------------

// load判定関数（PC,SP共通処理）
function loadedPageFunc() {
  $('body').addClass('loaded');
}

//タブ処理
function tabContentFunc() {
  $('.tab li').on('click', function () {
    index = $('.tab li').index(this);
    $('.tab li').removeClass('active');
    $('.tab li').eq(index).addClass('active');
    $('.tab_block').removeClass('active');
    $('.tab_block').eq(index).addClass('active');
  });
}
// アコーディオン処理★★★★★
function showAccordionFunc() {
  var acTrigger = $('.ac_trigger');
  // 全部開く
  acTrigger.click(function () {
    if ($(this).hasClass('show')) {
      $(this).removeClass('show').next('dd').slideUp();
    } else {
      $(this).addClass('show').next('dd').slideDown();
    }
  });
}

//表示アニメーション
function scrollAnimFunc() {
  $(window).on('scroll', function () {
    $('.anim, .fade_y, .svg_anim, .scr_cvr, .img_scl').each(function () {
      var scr = $(window).scrollTop();
      var winHeight = $(window).height();
      var action = $(this).offset().top;
      if (scr > action - winHeight + winHeight / 5) {
        $(this).addClass('on');
      }
    });
  });
}

//SP triggerクリックでメニュー展開
function spMenuOpenFunc() {
  $('.trigger, .nav_overlay').click(function () {
    if ($('.trigger').hasClass('close')) {
      $('.menu').removeClass('on');
      $('.nav_overlay').removeClass('on');
      $('.trigger').removeClass('close');
      $('body').removeClass('hidden');
    } else {
      $('.menu').addClass('on');
      $('.nav_overlay').addClass('on');
      $('.trigger').addClass('close');
      $('body').addClass('hidden');
    }
  });
}

//下スクロールで非表示・上スクロールで表示
function headerAddEventFunc() {
  var pos = 0;
  var header = $('.header');

  // 'scroll.headerEvent' 名前空間を使用してイベントを登録
  $(window).on('scroll.headerEvent', function () {
    if ($(this).scrollTop() < 100) {
      header.removeClass('hide');
    } else if ($(this).scrollTop() < pos) {
      header.removeClass('hide');
    } else {
      header.addClass('hide');
    }
    pos = $(this).scrollTop();
  });
}

function checkAndApplyFunction() {
  if ($(window).width() >= 1261) {
    headerAddEventFunc();
  } else {
    $(window).off('scroll.headerEvent');
    $('.header').removeClass('hide');
  }
}

$(document).ready(checkAndApplyFunction);
$(window).on('resize', checkAndApplyFunction);

//header ホバーでメガドロップ
function menuShowDelay(element, modalUnder, delayTime) {
  var fadeOutTimeout;

  element.add(modalUnder).on({
    mouseover: function () {
      clearTimeout(fadeOutTimeout);
      modalUnder.fadeIn();
    },
    mouseout: function () {
      fadeOutTimeout = setTimeout(function () {
        modalUnder.fadeOut();
      }, delayTime);
    },
  });
}

//SP menu展開時に背景固定
function spBodyFixedFunc() {
  var state = false;
  var scrollpos = '';
  $('.trigger').on('click', function () {
    if (state == false) {
      scrollpos = $(window).scrollTop();
      $('body').addClass('sp_fix').css({
        top: -scrollpos,
      });
      state = true;
    } else {
      $('body').removeClass('sp_fix').css({ top: 0 });
      window.scrollTo(0, scrollpos);
      state = false;
    }
  });
  $('.close').on('click', function () {
    $('body').removeClass('sp_fix').css({ top: 0 });
    window.scrollTo(0, scrollpos);
    state = false;
  });
}

//プルダウン
function pullDown() {
  $(document).ready(function () {
    $('.pulldown_btn').click(function (e) {
      e.preventDefault();

      $(this).next('ul').slideToggle();
      $(this).toggleClass('active');
    });
  });
}

function modalFunc() {
  var delayTime = 0;
  menuShowDelay($('#about'), $('.modal_about'), delayTime);
  menuShowDelay($('#case'), $('.modal_case'), delayTime);
  menuShowDelay($('#solution'), $('.modal_solution'), delayTime);
}

$(document).ready(function () {
  modalFunc();
});

// --- 関数実行 -----------------------------------------------

//DOM生成後
$(function () {
  //******************
  // 共通処理
  //******************
  tabContentFunc();
  scrollAnimFunc();
  spMenuOpenFunc();
  showAccordionFunc();
  loadedPageFunc();
  spBodyFixedFunc();
  pullDown();
  modalFunc();

  //****************************
  // その他は要素の有無で個別で実装
  //****************************
  if ($('.top').length) {
  }
});

//ページの全データを読み込み後
// $(window).on('load', function () {
// });

// --- tips -----------------------------------------------
