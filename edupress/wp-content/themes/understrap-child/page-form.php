<?php
/* Template Name: EDUPRESS フォーム */
?>

<!DOCTYPE html>
<html lang="ja" id="pagetop">

<head>
<?php wp_head(); ?>
<!-- Google Tag Manager-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9S4P87');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWKMXR2');</script>
<!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <title>サービスのご紹介 | 株式会社エデュプレス</title>
  <meta name="description" content="印刷物の制作をはじめ、WEBや動画制作、システム開発、広告・販促サポート、など、様々なソリューションを組み合わせ、お客様の「思い」を最適な形で届けるお手伝いをいたします。">
  <meta name="keywords" content="印刷,プリプレス,コンテンツ制作,Web制作,動画,BPO,検定,講習会,システム開発,印刷セミナー,販促サポート,広告,株式会社エデュプレス, EDUPRESS.Inc,東京,埼玉,神奈川,千葉">
  <meta name="twitter:card" content="summary_large_image">
  <meta property="og:title" content="">
  <meta property="og:url" content="/index.html">
  <meta property="og:description" content="印刷物の制作をはじめ、WEBや動画制作、システム開発、広告・販促サポート、など、様々なソリューションを組み合わせ、お客様の「思い」を最適な形で届けるお手伝いをいたします。">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="">
  <meta property="og:image" content="/contents/wp-content/themes/understrap-child/lp/assets/img/common/ogp.png">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/wp-content/themes/understrap-child/lp/assets/css/style.css">
<style type="text/css">
.acd-check{
  display: none;
}
.acd-label{
  background:linear-gradient(to right, #009cbd, #0645c4);
  color: #fff;
  display: block;
  text-align: center;
  cursor: pointer;
  margin-bottom: 1px;
  padding: 10px;
  margin-top: 40px;
}
.acd-content{
  height: 0;
  opacity: 0;
  margin: 1.5rem 0;
  transition: .5s;
  visibility: hidden;
}
.acd-check:checked + .acd-label + .acd-content {
  height: auto;
  opacity: 1;
  visibility: visible;
}
.acd-check:checked + .acd-label {
  display: none;
}
</style>

<style type="text/css">
.wpcf7-form-control{
    display: flex;
   /* background: #cad5f4;
    border: 1px solid #999;*/
    padding: 10px;
	flex-wrap: wrap;
}
.wpcf7-form-control>span{
    width: 46%;
    /*background: #E1E1E1;*/
	color: #5D5D5D;
    /*border: 1px solid #999;*/
    padding: 10px;
}
	.screen-reader-response{display:none;}
	
</style>
<style type="text/css">
.wpcf7-form-control{
    display: flex;
    /*background: #cad5f4;
    border: 1px solid #999;*/
    padding: 10px;
	flex-wrap: wrap;
}
.wpcf7-form-control>span{
    width: 46%;
    /*background: #E1E1E1;
	color: #5D5D5D;
    border: 1px solid #999;*/
    padding: 10px;
}
.screen-reader-response{display:none;}
.wpcf7{max-width:800px; }
/*リセット */
input[type="checkbox"]  {
    margin: 0;
    padding: 0;
    background: none;
    border: none;
    border-radius: 0;
    outline: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
  }
.form__body{font-size:1.5rem;}
/* 「送信する」ボタン */
input.wpcf7-submit {
    display: block;
    padding: 15px;
    width: 400px;
    background: #ffaa56;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    border-radius: 2px;
    margin: 15px auto 0
}

	
@media screen and (max-width:768px){
input.wpcf7-submit {
width: 250px;
}
}
/* チェックボックスデザイン */
input[type="checkbox"] {
    cursor: pointer;
    padding-left: 30px;/*label手前にチェックボックス用の余白を開ける*/
    vertical-align: middle;
    position: relative;
  }
  input[type="checkbox"]::before,
  input[type="checkbox"]::after {
    content: "";
    display: block; 
    position: absolute;
  }
  input[type="checkbox"]::before {
    background-color: #fff;
    border-radius: 0%;
    border: 1px solid #666464;
    width: 20px;/*チェックボックスの横幅*/
    height: 20px;/*チェックボックスの縦幅*/
    transform: translateY(-50%);
    top: 50%;
    left: 5px;
  }
  input[type="checkbox"]::after {
    border-bottom: 3px solid #666464;/*チェックの太さ*/
    border-left: 3px solid #666464;/*チェックの太さ*/
    opacity: 0;/*チェック前は非表示*/
    height: 6px;/*チェックの高さ*/
    width: 11px;/*チェックの横幅*/
    transform: rotate(-45deg);
    top: -7px;/*チェック時の位置調整*/
    left: 10px;/*チェック時の位置調整*/
  }
  input[type="checkbox"]:checked::after {
    opacity: 1;/*チェック後表示*/
  }
</style>

</head>

<body class="top">
<!-- Google Tag Manager (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9S4P87"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!--End Google Tag Manager (noscript) -->
<!-- Google Tag Manager (noscript)-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWKMXR2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div class="l-wrapper" id="wrapper">
    <!-- ** start header **********-->
    <header class="l-header">
      <div class="l-header__inr">
        <div class="l-header__cnt">
          <h1 class="l-header__logo"> <a href="https://edupress.net/" target="_blank">EDUPRESS</a></h1>
          <div class="l-header__nav">
            <div class="l-navigation">
              <div class="l-navigation__inr">
                <ul>
<li><a class="scroll" href="/contents/">TOP</a></li>
<li><a class="scroll" href="/contents/bpo">業務支援‧在庫管理</a></li>
<li><a class="scroll" href="/contents/movie">セミナー動画制作</a></li>
<li><a class="scroll" href="/contents/kentei">検定サポート</a></li>
<li><a class="scroll" href="/contents/ga4">GA4移行支援</a></li>
<li><a class="scroll" href="/contents/digitalbook">デジタルブック活用</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="l-header__nav">
            <div class="l-navigation">
              <div class="l-navigation__inr">
     		<ul style="text-align:right;">
<li style="margin-left: auto;"><a class="scroll" href="/contents/company">会社案内</a></li>
<!--<li style="border: 1px solid #000000;"><a class="scroll" href="/contents/column">　お役立ちコラム　</a></li>-->
<li style="border: 1px solid #000000; margin-right:4rem;"><a class="scroll" href="/contents/seminar">　セミナー開催中　</a></li>
                </ul>
				  
              </div>
            </div>
          </div>
          <div class="l-header__item">
          <!--<div class="l-header__inquiry c-btn-01"><a href="https://www.edupress.info/contents/?page_id=230"  target="_blank">お問い合わせ </a></div>-->
            <div class="l-header__logo02"> <a href="https://www.zkai-gr.co.jp/" target="_blank">Z-kai</a></div>
            <div class="l-header__btn"><span> </span><span></span><span></span></div>
          </div>
        </div>
      </div>
    </header>
    <!-- ** end header **********-->

    <div class="l-contents">
      <main class="l-contents__inr" role="main">
        <div class="p-main">
          <section class="c-section">
            <div class="inr">
                    <!--<div class="c-grid" style="text-align: center;">
                        <picture>
                          <source media="(max-width: 889px)" srcset="https://www.edupress.net/contents/wp-content/themes/understrap-child2/lp/assets/img/image_03_sp.png" />
                          <img src="https://www.edupress.net/contents/wp-content/themes/understrap-child2/lp/assets/img/kentei/kentei-000-pc.png" srcset="https://www.edupress.net/contents/wp-content/themes/understrap-child2/lp/assets/img/kentei/kentei-000-pc.png" alt="" width="1080px;" />
                        </picture>
                    </div>-->
<style>
#cf-tbl{
width: 800px;
}

#cf-tbl table{
width: 100%;
border-collapse: collapse;
border: solid #CCC;
border-width: 1px;
color: #444;
}
#cf-tbl table tr th,
#cf-tbl table tr td{
padding: 0.5em;
text-align: left;
vertical-align: top;
border: solid #CCC;
border-width: 1px;
vertical-align: middle;
}
#cf-tbl table tr th{
width: 35%;
background: #eee;
}
@media screen and (max-width:768px){
#cf-tbl{
width: 100%;
}

#cf-tbl table,
#cf-tbl table tbody,
#cf-tbl table tr,
#cf-tbl table tr th,
#cf-tbl table tr td{
display: block;
}

#cf-tbl table{
width: 100%;
border-width: 0 0 1px 0;
}

#cf-tbl table tr th,
#cf-tbl table tr td{
width: 100%;
padding: 3% 5%;
}

#cf-tbl table tr td{
border-width: 0px 1px 0px 1px;
}
}
/*「必須」文字デザイン*/
.required{
font-size:.8em;
padding: 5px;
background: #F57500;
color: #fff;
border-radius: 3px;
margin-right: 5px;
}

/*「任意」文字デザイン*/
.optional{
font-size:.8em;
padding: 5px;
background: #000080;
color: #fff;
border-radius: 3px;
margin-right: 5px;
}

/* 入力項目を見やすく */
input.wpcf7-form-control.wpcf7-text,
textarea.wpcf7-form-control.wpcf7-textarea {
	width: 100%;
	padding: 8px 15px;
	margin-right: 10px;
	margin-top: 10px;
	border: 1px solid #d0d5d8;
	border-radius: 3px;
	background-color: #eff1f5;
}
textarea.wpcf7-form-control.wpcf7-textarea {
	height: 200px;
}

/* 「送信する」ボタン */
input.wpcf7-submit {
    display: block;
    padding: 15px;
    width: 400px;
    background: #ffaa56;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    border-radius: 2px;
    margin: 15px auto 0
}
@media screen and (max-width:768px){
input.wpcf7-submit {
width: 250px;
}
}

input.wpcf7-submit:hover {
	box-shadow: 0 15px 30px -5px rgba(0,0,0,.15), 0 0 5px rgba(0,0,0,.1);
	transform: translateY(-4px);
	opacity:0.7;
}
/* エラーメッセージを見やすく */
span.wpcf7-not-valid-tip,
.wpcf7-response-output.wpcf7-validation-errors {
	color: red;
	font-weight: 600;
}

/* チェックボックス */
.wpcf7-form-control-wrap {
  display: block;
}
span.wpcf7-list-item {
  margin: 0 30px 0 0; /* 項目右側の余白設定と、デフォルトの左側の余白を打ち消す */
  position: relative;
}
.wpcf7-list-item-label {
  cursor: pointer; /* labelにhoverした時にカーソルを表示させる */
  font-size: 16px; /* 項目のフォントサイズ */
}
input[type="checkbox"] {
  opacity: 0; /* デフォルトのチェックボックスを見えなくする */
  position: absolute;
}
.wpcf7-list-item-label::before {
  /* チェックボックスのデザイン */
  border: 1px solid #333;
  content: "";
  display: inline-block;
  height: 15px;
  margin-right: 10px;
  position: relative;
  top: -1px;
  vertical-align: middle;
  width: 15px;
}
input[type="checkbox"]:checked + .wpcf7-list-item-label::after {
  /* チェックアイコン */
  background: url(アイコン画像のURL) no-repeat center;
  background-size: contain;
  content: "";
  height: 15px;
  left: 1px;
  position: absolute;
  top: 8px;
  width: 15px;
}
input[type="checkbox"]:checked + .wpcf7-list-item-label::before {
  /* チェックしたボックスの背景色を設定 */
  background-color: #00a0e9;
}
</style>

				
              <div class="p-box">
                <div class="inr">
<?php echo apply_shortcodes( '[contact-form-7 id="669" title="contents-whitepaper"]' ); ?>
              </div>
				
				
				
				
          
          
          
          
        </div>
      </main>
    </div>
    <!-- ** start footer  **********-->
    <footer class="l-footer">
      <div class="l-footer__cont01">
        <div class="inr">
          <div class="item">
            <div class="logo"><img src="/wp-content/themes/understrap-child/lp/assets/img/logo_edupress_footer.png" alt="株式会社エデュプレス" width="181" height="91" />
              <p>Copyright(C) EDUPRESS Inc. All Rights Reserved.</p>
            </div>
            <ul class="nav">
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/bpo">業務支援‧在庫管理</a></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/seminar">セミナー</a></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/movie">セミナー動画制作</a></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/columnlist">コラム</a></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/kentei">検定サポート</a></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/company">会社紹介</a></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/ga4">GA4移行支援</a></li>
              <li style="font-size:1.2rem;"></li>
              <li style="font-size:1.2rem;"><a class="scroll" href="/contents/digitalbook">デジタルブック活用</a></li>
              <li style="font-size:1.2rem;"></li>
            </ul>
          </div>
          <div class="item02">
            <!--<ul class="item02__nav">-->
              <li style="font-size:1.2rem;"> <a href="/privacy-policy"  target="_blank">個人情報保護方針 </a></li>
              <li style="font-size:1.2rem;"> <a href="/privacy"  target="_blank">個人情報の取り扱いについて </a></li>
              <li style="font-size:1.2rem;"> <a href="/socialmedia"  target="_blank">ソーシャルメディア・ポリシー </a></li>
              <li style="font-size:1.2rem;"> <a href="/about-site"  target="_blank">サイトについて </a></li>
            <!--</ul>-->
          </div>
        </div>
      </div>
      <div class="l-footer__cont02">
        <div class="logo"><a href="https://www.zkai-gr.co.jp/" target="_blank"><img src="/wp-content/themes/understrap-child/lp/assets/img/logo_zkai_footer.png" alt="Z-KAI Group 最高の教育で、未来をひらく。" width="150" height="45" /></a></div>
      </div>
    </footer>
    <!-- ** end footer **********-->
  </div>

  <script src="/wp-content/themes/understrap-child/lp/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>
