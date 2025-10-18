<?php
/*
Template Name: 体験サンプル（社会人常識マナー eラーニング）
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
    <div class="container -w_full">
      <div class="header-head">
        <a href="<?php echo home_url('/manners/csm/'); ?>" class="navbar-item">
          <h1 class="header-title">社会人常識マナー eラーニング</h1>
        </a>
      </div>
      <nav class="navbar">
        <div id="navMenu" class="navbar-menu">
          <div class="navbar-center">
            <a href="<?php echo home_url('/manners/csm/about/'); ?>" class="navbar-item">全国経理教育協会監修</a>
            <a href="<?php echo home_url('/manners/csm/select/'); ?>" class="navbar-item">選ばれる企業とマナー</a>
            <a href="<?php echo home_url('/manners/csm/voice/voice01/'); ?>" class="navbar-item">体験者の声</a>
            <a href="<?php echo home_url('/manners/csm/feature/'); ?>" class="navbar-item">eラーニングの特長／価格</a>
            <a href="<?php echo home_url('/manners/csm/experience/'); ?>" class="navbar-item active">体験サンプル</a>
            <a href="<?php echo home_url('/manners/csm/contacts/'); ?>" class="navbar-item">お問い合わせ／お申し込み／無料体験</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- ▼▼ コンテンツ部分（index.html の移行部分） ▼▼ -->
  <div class="main-contents" id="base-not">
    <div class="area-experience">
      <h2 class="page-title">体験サンプル</h2>

      <section class="section">
        <div class="container">
          <div class="columns">
            <div class="column is-12 has-text-centered">
              <h3 class="experience-main-title">各カテゴリーのカリキュラムを動画でご覧いただけます。</h3>
              <div class="movie-items">
                <dl class="movie-item">
                  <dt>コミュニケーション</dt>
                  <dd><span>良い人間関係のための<br>コミュニケーション</span></dd>
                  <dd><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/movie/communication.mp4" target="_blank" class="movie-item-btn" rel="noopener">動画はこちら</a></dd>
                </dl>
                <dl class="movie-item">
                  <dt>ビジネスマナー</dt>
                  <dd><span>来客応対Ⅰ</span></dd>
                  <dd><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/movie/reception.mp4" target="_blank" class="movie-item-btn" rel="noopener">動画はこちら</a></dd>
                </dl>
                <dl class="movie-item">
                  <dt>ビジネスマナー</dt>
                  <dd><span>職場のマナー</span></dd>
                  <dd><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/movie/manner.mp4" target="_blank" class="movie-item-btn" rel="noopener">動画はこちら</a></dd>
                </dl>
                <dl class="movie-item">
                  <dt>社会常識</dt>
                  <dd><span>一般知識</span></dd>
                  <dd><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/movie/knowledge.mp4" target="_blank" class="movie-item-btn" rel="noopener">動画はこちら</a></dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
  <!-- ▲▲ コンテンツ部分ここまで ▲▲ -->

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

<?php get_footer(); ?>
