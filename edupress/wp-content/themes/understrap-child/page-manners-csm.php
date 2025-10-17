<?php
/*
Template Name: 社会人常識マナーeラーニング
*/
get_header();
?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWKMXR2');</script>
<!-- End Google Tag Manager -->

<link rel="icon" href="https://edupress.net/img/favicon.ico">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/css/bulma.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/css/slick.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/css/style.css">


<div class="manners-wrapper">
  <header class="header-manners">
    <div class="container">
      <nav class="navbar">
        <div class="navbar-brand">
          <a href="<?php echo home_url('/manners/csm/'); ?>" class="navbar-item">
            <h1 class="header-title">社会人常識マナー<br><span>eラーニング</span></h1>
          </a>
          <div class="navbar-burger burger" data-target="navMenu">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <div id="navMenu" class="navbar-menu">
          <div class="navbar-end">
            <a href="<?php echo home_url('/manners/csm/about/'); ?>" class="navbar-item">全国経理教育協会監修</a>
            <a href="<?php echo home_url('/manners/csm/select/'); ?>" class="navbar-item">選ばれる企業とマナー</a>
            <a href="<?php echo home_url('/manners/csm/voice/voice01/'); ?>" class="navbar-item">体験者の声</a>
            <a href="<?php echo home_url('/manners/csm/feature/'); ?>" class="navbar-item">eラーニングの特長／価格</a>
            <a href="<?php echo home_url('/manners/csm/experience/'); ?>" class="navbar-item">体験サンプル</a>
            <div class="navbar-item">
              <div class="field is-grouped">
                <p class="control">
                  <a href="<?php echo home_url('/manners/csm/contacts/'); ?>" class="button is-contact">
                    お問い合わせ／お申し込み／無料体験
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <div class="slider-wrap01">
    <div class="slick" id="slick01">
      <div>
        <div class="img-vw">
          <img class="js-image-switch" src="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/img/slide01_sp.jpg" alt="メッセージ">
        </div>
      </div>
      <div>
        <a href="<?php echo home_url('/manners/csm/select/'); ?>">
          <div class="img-vw">
            <img class="js-image-switch" src="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/img/slide02_sp.jpg" alt="選ばれる企業とマナー">
          </div>
        </a>
      </div>
      <div>
        <a href="<?php echo home_url('/manners/csm/voice/voice01/'); ?>">
          <div class="img-vw">
            <img class="js-image-switch" src="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/img/slide03_sp.jpg" alt="体験者の声">
          </div>
        </a>
      </div>
    </div>
  </div>

  <section class="section">
    <div class="container">
      <div class="columns nav-explain">
        <a href="<?php echo home_url('/manners/csm/about/'); ?>" class="column is-4">
          <dl>
            <dt><span>全国経理教育協会監修</span></dt>
            <dd>昭和32年文部科学省認可として設立された公益社団法人です</dd>
          </dl>
        </a>
        <a href="<?php echo home_url('/manners/csm/select/'); ?>" class="column is-4">
          <dl>
            <dt><span>選ばれる企業とマナー</span></dt>
            <dd>社会人に取っての常識やマナーが体現できている良い組織や企業をご紹介します</dd>
          </dl>
        </a>
        <a href="<?php echo home_url('/manners/csm/voice/voice01/'); ?>" class="column is-4">
          <dl>
            <dt><span>体験者の声</span></dt>
            <dd>『社会人常識マナー検定』を実際に受験した学校または学生の感想をご紹介します</dd>
          </dl>
        </a>
        <a href="<?php echo home_url('/manners/csm/feature/'); ?>" class="column is-4">
          <dl>
            <dt><span>eラーニングの特長／価格</span></dt>
            <dd>『社会人常識マナー』のカリキュラムを掲載しています</dd>
          </dl>
        </a>
        <a href="<?php echo home_url('/manners/csm/experience/'); ?>" class="column is-4">
          <dl>
            <dt><span>体験サンプル</span></dt>
            <dd>『社会人常識マナー』のeラーニングを体験できます。是非ご体験ください</dd>
          </dl>
        </a>
        <a href="<?php echo home_url('/manners/csm/contacts/'); ?>" class="column is-4">
          <dl>
            <dt><span>お問い合わせ／お申し込み／無料体験</span></dt>
            <dd>eラーニングについてのお問い合わせ／お申し込み／無料体験はこちらから</dd>
          </dl>
        </a>
      </div>
    </div>
  </section>

  <section class="section area-info">
    <div class="container">
      <div class="columns">
        <div class="column is-6 is-offset-3">
          <h3 class="area-info-title">お知らせ</h3>
          <ul class="area-info-list">
            <li>2023/2/13　「選ばれる企業とマナー」を更新しました。</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer-manners has-text-centered">
    <div class="address-info">
      <div class="address-box">
        <h3>開発・販売元</h3>
        <dl>
          <dt>株式会社エデュプレス</dt>
          <dd>〒110-0005 東京都台東区上野3-7-5 天野ビル 4F<br>
            TEL：03-5807-8100 / FAX：03-5807-8101
          </dd>
        </dl>
      </div>
      <div class="address-box">
        <h3>監修</h3>
        <dl>
          <dt>公益社団法人 全国経理教育協会</dt>
          <dd>〒170-0004 東京都豊島区北大塚1丁目13番12号<br>
            TEL：03-3918-6131 / FAX：03-3918-6196
          </dd>
        </dl>
      </div>
    </div>

    <nav>
      <ul class="footer-nav">
        <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/clause_corpo.pdf">約款はこちら（PDF）</a></li>
        <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/serviceguide.pdf?202502">サービス開始までの手順書（PDF）</a></li>
        <li><a href="<?php echo home_url('/manners/csm/about/'); ?>">全国経理教育協会監修</a></li>
        <li><a href="<?php echo home_url('/manners/csm/select/'); ?>">選ばれる企業とマナー</a></li>
        <li><a href="<?php echo home_url('/manners/csm/voice/voice01/'); ?>">体験者の声</a></li>
        <li><a href="<?php echo home_url('/manners/csm/feature/'); ?>">eラーニングの特長</a></li>
        <li><a href="<?php echo home_url('/manners/csm/experience/'); ?>">体験サンプル</a></li>
        <li><a href="<?php echo home_url('/manners/csm/tokuteisho/'); ?>">特定商取引法における表示</a></li>
        <li><a href="<?php echo home_url('/manners/csm/contacts/'); ?>">お問い合わせ／お申し込み／無料体験</a></li>
      </ul>
    </nav>
  </footer>
</div>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/js/common.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm/js/slick.js"></script>

<script>
jQuery(function($){
  $('.slick').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    infinite: true,
    arrows: true,
    prevArrow: '<a class="slick-prev" href="#">〈</a>',
    nextArrow: '<a class="slick-next" href="#">〉</a>',
    dots: true,
    centerMode: true,
    slidesToShow: 1,
    centerPadding: '120px',
    respondTo: 'window',
    responsive: [{
      breakpoint: 769,
      settings: {
        centerPadding: '50px',
        arrows: false,
        dots: false
      }
    }]
  });
});
</script>

<?php get_footer(); ?>
