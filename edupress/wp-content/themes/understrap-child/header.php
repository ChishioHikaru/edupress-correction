<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link rel="shortcut icon" href="<?php echo home_url('wp-content/themes/understrap-child/asset/img/common/favicon.ico'); ?>"
        type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;600;700;900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KWKMXR2');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KWKMXR2"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="stage">
        <div class="nav_overlay"></div>
        <div class="button_overlay"></div>
        <header class="header">
            <span class="group_logo">
                <a href="https://www.zkai-gr.co.jp/" target="_blank">
                    <img src="<?php echo home_url('/wp-content/themes/understrap-child/asset/img/common/group-logo.svg'); ?>" alt="Z-KAI Group">
                </a>
            </span>
            <div class="header_inner flx">
                <div class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <div class="header_logo">
                            <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/common/logo.svg'); ?>"
                                alt="エデュプレス">
                        </div>
                    </a>
                </div>
                <button class="menuBtn trigger">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="nav_area">
                    <nav class="nav">
                        <div class="nav__mainnav">
                            <ul class="flx aic">
                                <li>
                                    <a href="<?php echo home_url('/'); ?>"
                                        class="parent_list"><span>HOME</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('business/'); ?>"
                                        class="parent_list"><span>事業領域</span></a>
                                </li>
                                <li class="right42">
                                    <div class="nav--area modal" id="about">
                                        <a href="<?php echo home_url('about/'); ?>" class="parent_list arrow">会社案内</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('news/'); ?>"
                                        class="parent_list"><span>お知らせ</span></a>
                                </li>
                                <li class="right42">
                                    <a href="#javascript" class="nav--area modal cursor" id="case">
                                        <div class="parent_list arrow">事例</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('column/'); ?>"
                                        class="parent_list"><span>コラム</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('seminar/'); ?>"
                                        class="parent_list"><span>セミナー</span></a>
                                </li>
                                <li>
                                    <div class="nav--area modal" id="solution">
                                        <a href="<?php echo home_url('solution/'); ?>" class="parent_list shadow">サービス・商品</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <nav class="nav">
                        <div class="nav__rightnav">
                            <ul class="flx aic">
                                <li>
                                    <a href="<?php echo home_url('estimate/'); ?>" class="parent_list blue_link">見積依頼</a>
                                </li>
                                <li>
                                    <a href="<?php echo home_url('contact/'); ?>" class="parent_list blue_link">お問い合わせ</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="menu">
                    <div class="base_menu_box">
                        <div class="menu_nav">
                            <div class="menu_nav_inner">
                                <div class="link_wrap left">
                                    <a href="<?php echo home_url('/'); ?>" class="bold_link"><span>TOP</span></a>
                                    <a href="<?php echo home_url('business/'); ?>" class="parent_list big"><span>事業領域</span></a>
                                    <a href="<?php echo home_url('about/'); ?>" class="parent_list big pc_menu"><span>会社案内</span></a>
                                    <a hter="#javascript" class="parent_list big pulldown_btn sp_menu"><span>会社案内</span></a>
                                    <ul>
										            <li>
                                            <a href="<?php echo home_url('about/'); ?>">
                                                <span>会社案内TOP</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('about/message/'); ?>">
                                                <span>ごあいさつ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('about/profile/'); ?>">
                                                <span>会社概要</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('about/location/'); ?>">
                                                <span>本社・事業所アクセス</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('about/group/'); ?>">
                                                <span>グループについて</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo home_url('about/certification/'); ?>">
                                                <span>第三者認証・社会的取り組み</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="link_wrap center">
                                    <a href="<?php echo home_url('solution/'); ?>" class="bold_link"><span>サービス・商品</span></a>
                                    <a href="<?php echo home_url('solution/creative/'); ?>" class="parent_list"><span>クリエイティブ</span></a>
                                    <a href="<?php echo home_url('solution/promotion/'); ?>" class="parent_list"><span>プロモーション</span></a>
                                    <a href="<?php echo home_url('solution/business-support/'); ?>" class="parent_list"><span>ビジネスサポート</span></a>
                                    <a href="<?php echo home_url('solution/products/'); ?>" class="parent_list"><span>プロダクト</span></a>
                                    <a href="/contents/" target="_blank" class="parent_list external"><span>当社のおすすめサービス</span></a>
                                    <a href="/ep-dam/" target="_blank" class="parent_list external"><span>EP-DAM system</span></a>
                                    <a href="/delfino/" target="_blank" class="parent_list external"><span>デルフィーノコーティング</span></a>
                                    <a href="/manners/" target="_blank" class="parent_list external"><span>社会人常識マナー eラーニング講座</span></a>
                                    <a href="/books/" target="_blank" class="parent_list external"><span>社会人常識マナー検定テキスト</span></a>
                                </div>
                                <div class="link_wrap right">
                                    <a href="<?php echo home_url('success/'); ?>" class="parent_list"><span>課題解決事例</span></a>
                                    <!-- <a href="<?php echo home_url('client/'); ?>" class="parent_list"><span>お客様事例</span></a> -->
                                    <a href="<?php echo home_url('column/'); ?>" class="parent_list"><span>コラム</span></a>
                                    <a href="<?php echo home_url('news/'); ?>" class="parent_list"><span>お知らせ</span></a>
                                    <a href="<?php echo home_url('seminar/'); ?>" class="parent_list"><span>セミナー情報</span></a>
                                    <a href="<?php echo home_url('contact/'); ?>" class="parent_list"><span>お問い合わせ</span></a>
                                    <a href="<?php echo home_url('estimate/'); ?>" class="parent_list"><span>見積依頼</span></a>
                                </div>
                            </div>
                            <div class="menu_nav_privacy">
                                <div class="privacy_wrap up_block">
                                    <a href="<?php echo home_url('privacy-policy/'); ?>" class="privacy_link"><span>個人情報保護方針</span></a>
                                    <a href="<?php echo home_url('privacy/'); ?>" class="privacy_link"><span>個人情報の取り扱いについて</span></a>
                                    <a href="<?php echo home_url('disclosure-policy/'); ?>" class="privacy_link"><span>開示等のご請求について</span></a>
                                    <a href="<?php echo home_url('security/'); ?>" class="privacy_link"><span>情報セキュリティ基本方針</span></a>
                                </div>
                                <div class="privacy_wrap under_block">
                                    <a href="<?php echo home_url('socialmedia/'); ?>" class="privacy_link"><span>ソーシャルメディア・ポリシー</span></a>
                                    <a href="<?php echo home_url('policy_statement/'); ?>" class="privacy_link"><span>中核的労働要求事項に関する方針声明</span></a>
                                    <a href="<?php echo home_url('about-site/'); ?>" class="privacy_link"><span>このサイトについて</span></a>
                                    <a href="<?php echo home_url('sitemap/'); ?>" class="privacy_link last"><span>サイトマップ</span></a>
                                </div>
                            </div>
                            <p class="copyright en">&copy; EDUPRESS Inc.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nav--area--under modal_under modal_about">
                <div class="inner">
                    <ul class="main_list">
                        <li class="main_child">
                            <a href="<?php echo home_url('about/message/'); ?>">
                                <span>ごあいさつ</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('about/profile/'); ?>">
                                <span>会社概要</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('about/location/'); ?>">
                                <span>本社・事業所アクセス</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('about/group/'); ?>">
                                <span>グループについて</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('about/certification/'); ?>">
                                <span>第三者認証・社会的取り組み</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nav--area--under modal_under modal_case">
                <div class="inner">
                    <ul class="main_list">
                        <li class="main_child">
                            <a href="<?php echo home_url('success/'); ?>">
                                <span>課題解決事例</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('client/'); ?>">
                                <span>お客様事例</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nav--area--under modal_under modal_solution">
                <div class="inner">
                    <ul class="main_list">
                        <li class="main_child">
                            <a href="<?php echo home_url('solution/creative/'); ?>">
                                <span>クリエイティブ</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('solution/promotion/'); ?>">
                                <span>プロモーション</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('solution/business-support/'); ?>">
                                <span>ビジネスサポート</span>
                            </a>
                        </li>
                        <li class="main_child">
                            <a href="<?php echo home_url('solution/products/'); ?>">
                                <span>プロダクト</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
