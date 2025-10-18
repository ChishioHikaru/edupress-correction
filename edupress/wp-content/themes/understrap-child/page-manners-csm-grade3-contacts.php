<?php
/*
Template Name: お問い合わせ／お申し込み／無料体験（社会人常識マナー検定3級 eラーニング）
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

<link rel="icon" href="https://edupress.co.jp/img/favicon.ico">

<!-- CSS -->
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm-grade3/css/bulma.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm-grade3/css/slick.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm-grade3/css/style.css">

<div class="manners-wrapper page-contacts">
  <header class="header-manners">
    <div class="container -w_full">
      <div class="header-head">
        <a href="<?php echo home_url('/manners/csm-grade3/'); ?>" class="navbar-item">
          <h1 class="header-title">社会人常識マナー検定3級 eラーニング</h1>
        </a>
      </div>
      <nav class="navbar">
        <div id="navMenu" class="navbar-menu">
          <div class="navbar-center">
            <a href="<?php echo home_url('/manners/csm-grade3/about/'); ?>" class="navbar-item">全国経理教育協会監修</a>
            <a href="<?php echo home_url('/manners/csm-grade3/select/'); ?>" class="navbar-item">選ばれる企業とマナー</a>
            <a href="<?php echo home_url('/manners/csm-grade3/voice/voice01/'); ?>" class="navbar-item">体験者の声</a>
            <a href="<?php echo home_url('/manners/csm-grade3/feature/'); ?>" class="navbar-item">eラーニングの特長／価格</a>
            <a href="<?php echo home_url('/manners/csm-grade3/experience/'); ?>" class="navbar-item">体験サンプル</a>
            <a href="<?php echo home_url('/manners/csm-grade3/contacts/'); ?>" class="navbar-item active">お問い合わせ／お申し込み／無料体験</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <!-- ▼▼ コンテンツ移行部分 ▼▼ -->
  <div class="main-contents" id="base-not">
    <div class="area-contacts">
      <h2 class="page-title">お問い合わせ／お申し込み／無料体験</h2>

      <section class="section">
        <div class="container">
          <div class="columns">
            <div class="column is-8 is-offset-2">
              <h3 class="contacts-main-title">＜個人情報の取り扱いについて＞</h3>
              <ul class="contacts-list">
                <li>ご記入、ご提出いただきましたお客様情報は、弊社の個人情報保護方針に従って適正に管理いたします。また、お客様の同意なく第三者に委託提供はいたしません。</li>
                <li>これらの個人情報は、お申し込みの本サービス、本サービスに関するお問い合わせのご回答、および新サービスのご案内に限定して利用いたします。<br>
                  個人情報のご記入無き場合は、本サービスのご利用・各種情報の提供ができないことがありますのでご了承ください。</li>
                <li>上記以外のお取り扱い事項として「<a href="https://edupress.co.jp/privacy" target="_blank" rel="noopener">個人情報の取り扱いについて</a>」をご覧下さい。</li>
              </ul>
              <p>上記の内容にご同意いただける場合は、下記リンクよりお問い合わせください。</p>

              <ul class="is-button-area3" style="justify-content: center">
                <li>
                  <a class="button is-contact2" href="<?php echo home_url('/form/csm-grade3-inquiry/'); ?>">お問い合わせはこちら</a>
                </li>
                <li>
                  <a class="button is-contact2" href="<?php echo home_url('/form/csm-grade3-application/'); ?>">お申し込み（学校契約の方）<br>こちらからお問い合わせください</a>
                </li>
                <li>
                  <a class="button is-contact2" href="<?php echo home_url('/manners/csm-grade3/feature/#price'); ?>">価格はこちら</a>
                </li>
              </ul>

              <ul class="is-button-area3" style="justify-content: center">
                <li class="is-button-area-ex">
                  <a class="button is-experience" href="<?php echo home_url('/form/csm-grade3-experience/'); ?>">「無料体験」はこちら</a>
                  <p style="max-width: 285px;">30日間有効のIDを１IDご利用いただけます</p>
                </li>
              </ul>

              <!--
              参考：メールリンク版（必要時に復活させてください）
              <p style="color: red">※下記のボタンをクリックしてもメールソフトが自動で立ち上がらない場合は、edupress-el@edupress.net より直接お問い合わせ・お申し込みください。</p>
              -->
            </div>
          </div>
        </div>
      </section>

    </div>
  </div>
  <!-- ▲▲ コンテンツ移行ここまで ▲▲ -->

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
        <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm-grade3/clause_corpo.pdf">約款はこちら（PDF）</a></li>
        <li><a href="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm-grade3/serviceguide.pdf?202502">サービス開始までの手順書（PDF）</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/about/'); ?>">全国経理教育協会監修</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/select/'); ?>">選ばれる企業とマナー</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/voice/voice01/'); ?>">体験者の声</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/feature/'); ?>">eラーニングの特長</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/experience/'); ?>">体験サンプル</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/tokuteisho/'); ?>">特定商取引法における表示</a></li>
        <li><a href="<?php echo home_url('/manners/csm-grade3/contacts/'); ?>">お問い合わせ／お申し込み／無料体験</a></li>
      </ul>
    </nav>
  </footer>
</div>

<!-- JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/manners/csm-grade3/js/common.js"></script>

<?php get_footer(); ?>
