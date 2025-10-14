<?php
/**
 * Header for EDUPRESS contents pages
 * - include header.php
 * - enqueue LP-specific CSS before header.php so they appear in <head>
 */

defined('ABSPATH') || exit;

/** ① LP用CSSとフォントを先にenqueue（<head>に出力される） */
wp_enqueue_style(
  'ep-noto-sans-jp',
  'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap',
  [],
  null
);
wp_enqueue_style(
  'ep-contents-style',
  get_stylesheet_directory_uri() . '/lp/assets/css/contents_style.css',
  [],
  file_exists(get_stylesheet_directory() . '/lp/assets/css/contents_style.css')
    ? filemtime(get_stylesheet_directory() . '/lp/assets/css/contents_style.css')
    : null
);
wp_enqueue_style(
  'ep-contents-style-main',
  get_stylesheet_directory_uri() . '/lp/assets/css/style.css',
  ['ep-contents-style'],
  file_exists(get_stylesheet_directory() . '/lp/assets/css/style.css')
    ? filemtime(get_stylesheet_directory() . '/lp/assets/css/style.css')
    : '2023'
);

/** ② 共通ヘッダー（<html><head><body>＋GTM-KWKMXR2）を出力 */
get_template_part('header');
?>

<!-- ③ 追加のGTM（W9S4P87）が必要ならここで body 内に追記 -->
<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9S4P87');
</script>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9S4P87"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>


<!-- ====== 以下、EDUPRESSコンテンツ専用のヘッダー構造 ====== -->
<div class="l-wrapper" id="wrapper">
  <header class="l-header">
    <div class="l-header__inr">
      <div class="l-header__cnt">
        <h1 class="l-header__logo" style="display:none;">
          <a href="/" target="_blank">EDUPRESS</a>
        </h1>

        <div class="l-header__nav -first">
          <div class="l-navigation">
            <div class="l-navigation__inr">
              <ul>
                <li><a class="scroll" href="/contents/">TOP</a></li>
                <li><a class="scroll" href="/contents/bpo">業務支援‧在庫管理</a></li>
                <li><a class="scroll" href="/contents/movie">セミナー動画制作</a></li>
                <li><a class="scroll" href="/contents/kentei">検定サポート</a></li>
                <li><a class="scroll" href="/contents/digitalbook/">デジタルブック活用</a></li>
                <li><a class="scroll" href="/contents/ga4">GA4移行支援</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="l-header__nav">
          <div class="l-navigation">
            <div class="l-navigation__inr">
              <ul style="text-align:right;">
                <li style="margin-left:auto;"><a class="scroll" href="/contents/company">会社案内</a></li>
                <li style="margin-right:4rem;"><a class="scroll" href="/contents/seminar">セミナー開催中</a></li>
                <li style="margin-left:-3rem;margin-right:2rem;"><a class="scroll" href="/contents/columnlist">コラム</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="l-header__item">
          <!-- <div class="l-header__inquiry c-btn-01"><a href="/contents/lp-form" target="_blank">お問い合わせ</a></div> -->
          <div class="l-header__logo02" style="line-height:normal;">
            <a href="https://www.zkai-gr.co.jp/" target="_blank">Z-kai</a>
          </div>
          <div class="l-header__btn"></div>
        </div>
      </div>
    </div>

    <!-- 固定バナー -->
    <a href="/form/contact-us" target="_blank">
      <div class="right-fixed-banner">
        <div class="banner-box" id="following-banner">
          <strong><span style="color:#fff;">資料請求・お問い合わせ</span></strong>
        </div>
      </div>
    </a>
  </header>
</div>

<style>
  .entry-footer {
    display: none !important;
  }
  .group_logo {
    display: none !important;
  }
  .right-fixed-banner {
    position: fixed;
    top: 66px;
    right: 0;
    width: 50px;
    margin-right: 2px;
    text-align: center;
    line-height: 20px;
    font-size: 15px;
    color: #fff;
    padding: 20px 15px;
    background-image: linear-gradient(180deg, rgba(0,156,189,1), rgba(6,69,196,1));
    z-index: 50;
  }
  .acd-check { display:none; }
  .acd-label {
    background:linear-gradient(to right, #009cbd, #0645c4);
    color:#fff;
    display:block;
    text-align:center;
    cursor:pointer;
    margin-bottom:1px;
    padding:10px;
    margin-top:40px;
  }
  .acd-content {
    height:0;
    opacity:0;
    margin:1.5rem 0;
    transition:.5s;
    visibility:hidden;
  }
  .acd-check:checked + .acd-label + .acd-content {
    height:auto;
    opacity:1;
    visibility:visible;
  }
  .acd-check:checked + .acd-label { display:none; }
</style>
