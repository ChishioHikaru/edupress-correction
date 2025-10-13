<?php
/**
 * The template for displaying the LP footer.
 * - include common footer.php at the end
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<!-- ** start footer **********-->
<footer class="l-footer">
  <div class="l-footer__cont01">
    <div class="inr">
      <div class="item">
        <!-- <div class="logo" style="align-items: flex-end;display: flex;"> -->
        <div class="logo" style="display: none;">
          <p><img src="/wp-content/themes/understrap-child/lp/assets/img/logo_edupress_footer.png" alt="株式会社エデュプレス" width="181" height="91" /><br><br><span>Copyright(C) EDUPRESS Inc. All Rights Reserved.</span></p>
        </div>
        <ul class="nav" style="width:52rem;">
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> ・</font> <a class="scroll" href="/contents/bpo">業務支援‧在庫管理</a></li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> </font> <a class="scroll" href="/contents/seminar">セミナー開催中</a></li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> ・</font> <a class="scroll" href="/contents/movie">セミナー動画制作</a></li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> </font> <a class="scroll" href="/contents/columnlist">コラム</a></li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> ・</font> <a class="scroll" href="/contents/kentei">検定サポート</a></li>
          <li style="font-size:1.3rem; border-right:0px;"> </li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> ・</font> <a class="scroll" href="/contents/ga4">GA4移行支援</a></li>
          <li style="font-size:1.3rem; border-right:0px;"> </li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> ・</font> <a class="scroll" href="/contents/digitalbook">デジタルブック活用</a></li>
          <li style="font-size:1.3rem; border-right:0px;"><font color="#5D5D5D"> </font> <a class="scroll" href="/contents/company">会社案内</a></li>
        </ul>

        <div class="logo" style="width:28rem;">
          <a class="scroll" href="/form/contact-us">
            <img src="/wp-content/themes/understrap-child/lp/assets/img/c-button.jpg" alt="株式会社エデュプレス" width="100%" />
          </a>
          <p><a href="tel:03-5807-8100"><img src="/wp-content/themes/understrap-child/lp/assets/img/tel.jpg" alt="株式会社エデュプレス" width="100%" /></a></p>
        </div>
      </div>

      <div class="item02" style="display: none;">
        <ul class="item02__nav">
          <li style="font-size:1.1rem;"> <a href="/privacy-policy" target="_blank" style="border-right:0px;"><font color="#5D5D5D">個人情報保護方針 </font></a></li>
          <li style="font-size:1.1rem;"> <a href="/privacy/" target="_blank" style="border-right:0px;"><font color="#5D5D5D">個人情報の取り扱いについて </font></a></li>
          <li style="font-size:1.1rem;"> <a href="/socialmedia/" target="_blank" style="border-right:0px;"><font color="#5D5D5D">ソーシャルメディア・ポリシー </font></a></li>
          <li style="font-size:1.1rem; border-right:0px;"> <a href="/about-site/"  target="_blank"><font color="#5D5D5D">サイトについて </font></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- ** end footer **********-->

<script src="/wp-content/themes/understrap-child/lp/assets/js/main.js"></script>

<?php
/**
 * ここで共通の footer.php を include（<body>閉じタグを含む共通処理を呼ぶ）
 * footer.php 内に wp_footer() があれば重複しないよう一度だけ呼ばれる
 */
get_template_part('footer');
?>

<style>
  .contact__area {
    display: none;
  }
</style>