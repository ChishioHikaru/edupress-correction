// --- 共通関数 -----------------------------------------------

// load判定関数（PC,SP共通処理）
function loadedPageFunc() {
  $("body").addClass("loaded");
}

//タブ処理
function tabContentFunc() {
  $(".tab li").on("click", function () {
    index = $(".tab li").index(this);
    $(".tab li").removeClass("active");
    $(".tab li").eq(index).addClass("active");
    $(".tab_block").removeClass("active");
    $(".tab_block").eq(index).addClass("active");
  });
}
// アコーディオン処理★★★★★
function showAccordionFunc() {
  var acTrigger = $(".ac_trigger");
  // 全部開く
  acTrigger.click(function () {
    if ($(this).hasClass("show")) {
      $(this).removeClass("show").next("dd").slideUp();
    } else {
      $(this).addClass("show").next("dd").slideDown();
    }
  });
}

//表示アニメーション
function scrollAnimFunc() {
  $(window).on("scroll", function () {
    $(".anim, .fade_y, .svg_anim, .scr_cvr, .img_scl").each(function () {
      var scr = $(window).scrollTop();
      var winHeight = $(window).height();
      var action = $(this).offset().top;
      if (scr > action - winHeight + winHeight / 5) {
        $(this).addClass("on");
      }
    });
  });
}

//SP triggerクリックでメニュー展開
function spMenuOpenFunc() {
  $(".trigger, .nav_overlay").click(function () {
    if ($(".trigger").hasClass("close")) {
      $(".menu").removeClass("on");
      $(".nav_overlay").removeClass("on");
      $(".trigger").removeClass("close");
      $("body").removeClass("hidden");
    } else {
      $(".menu").addClass("on");
      $(".nav_overlay").addClass("on");
      $(".trigger").addClass("close");
      $("body").addClass("hidden");
    }
  });
}

// ==== ヘッダー表示制御（どのページでも安定） =====================
function headerAddEventFunc() {
  var pos = 0;
  var $headers = $(".header, .l-header, .header-manners");
  if (!$headers.length) return;

  // 1) 既存イベントを掃除
  $(window).off("scroll.headerEvent");
  $(document).off("scroll.headerEvent");
  $("#stage").off("scroll.headerEvent");
  $headers.parents().off("scroll.headerEvent");

  // 2) 監視対象を収集（window / #stage / スクロール可能な祖先）
  var targets = [];

  // window は常に見る
  targets.push($(window));

  // #stage があれば追加
  var $stage = $("#stage");
  if ($stage.length) targets.push($stage);

  // ヘッダーの祖先のうち、縦スクロール可能な要素を全部拾う
  $headers.parents().each(function () {
    var cs = getComputedStyle(this);
    var isScrollable = /(auto|scroll)/.test(cs.overflowY) && this.scrollHeight > this.clientHeight;
    if (isScrollable) targets.push($(this));
  });

  // 重複を除去
  var uniq = [];
  var seen = new Set();
  targets.forEach(function ($t) {
    var key = $t[0] === window ? "window" : $t[0];
    if (!seen.has(key)) {
      seen.add(key);
      uniq.push($t);
    }
  });
  targets = uniq;

  // 3) 現在の「ページ全体のスクロール量」を取得する関数
  function getScrollTop() {
    // window のスクロール値
    var winScroll = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;

    // 各ターゲットの scrollTop と併せて「最大値」を採用
    var maxOther = 0;
    for (var i = 0; i < targets.length; i++) {
      var el = targets[i][0];
      if (el === window) continue;
      var v = targets[i].scrollTop();
      if (v > maxOther) maxOther = v;
    }
    return Math.max(winScroll, maxOther);
  }

  // 4) スクロールハンドラ（rAFで無駄な連打を抑制）
  var ticking = false;
  function onAnyScroll() {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () {
      var st = getScrollTop();

      if (st < 100) {
        $headers.removeClass("hide");
      } else if (st < pos) {
        $headers.removeClass("hide");
      } else {
        $headers.addClass("hide");
      }
      pos = st;
      ticking = false;
    });
  }

  // 5) すべての監視対象にイベントを張る（名前空間付き）
  targets.forEach(function ($t) {
    $t.on("scroll.headerEvent", onAnyScroll);
  });

  // 初期状態も一度評価
  onAnyScroll();

  console.log(
    "監視対象:",
    targets.map(function ($t) {
      return $t[0] === window ? "window" : $t[0].tagName + "#" + ($t.attr("id") || "") + "." + ($t.attr("class") || "");
    })
  );
}

// 1261px以上でのみ有効にする条件がある場合
function checkAndApplyFunction() {
  if ($(window).width() >= 1261) {
    headerAddEventFunc();
  } else {
    // 掃除
    $(window).off("scroll.headerEvent");
    $(document).off("scroll.headerEvent");
    $("#stage").off("scroll.headerEvent");
    $(".header, .l-header, .header-manners").parents().off("scroll.headerEvent");
    $(".header, .l-header, .header-manners").removeClass("hide");
  }
}

$(document).ready(checkAndApplyFunction);
$(window).on("resize", checkAndApplyFunction);

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
  var scrollpos = "";
  $(".trigger").on("click", function () {
    if (state == false) {
      scrollpos = $(window).scrollTop();
      $("body").addClass("sp_fix").css({
        top: -scrollpos,
      });
      state = true;
    } else {
      $("body").removeClass("sp_fix").css({ top: 0 });
      window.scrollTo(0, scrollpos);
      state = false;
    }
  });
  $(".close").on("click", function () {
    $("body").removeClass("sp_fix").css({ top: 0 });
    window.scrollTo(0, scrollpos);
    state = false;
  });
}

//プルダウン
function pullDown() {
  $(document).ready(function () {
    $(".pulldown_btn").click(function (e) {
      e.preventDefault();

      $(this).next("ul").slideToggle();
      $(this).toggleClass("active");
    });
  });
}

function modalFunc() {
  var delayTime = 0;
  menuShowDelay($("#about"), $(".modal_about"), delayTime);
  menuShowDelay($("#case"), $(".modal_case"), delayTime);
  menuShowDelay($("#solution"), $(".modal_solution"), delayTime);
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
  if ($(".top").length) {
  }
});

//ページの全データを読み込み後
// $(window).on('load', function () {
// });

// --- tips -----------------------------------------------

