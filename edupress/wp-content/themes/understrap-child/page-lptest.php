<?php
/* Template Name: EDUPRESS LP test */
?>

<!DOCTYPE html>
<html lang="ja" id="pagetop">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9S4P87');</script>
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
  <link rel="stylesheet" href="/contents/wp-content/themes/understrap-child/lp/assets/css/style.css">
</head>

<body class="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9S4P87"
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
                  <li><a class="scroll" href="#anchor01">BPO</a></li>
                  <li><a class="scroll" href="#anchor02">セミナー動画</a></li>
                  <li><a class="scroll" href="#anchor03">検定ビジネス</a></li>
                  <li><a class="scroll" href="#anchor04">会社紹介</a></li>
                  <li><a class="scroll" href="#anchor05">ダウンロード</a></li>
                  <li><a class="scroll" href="#anchor06">セミナー</a></li>
                  <li><a class="scroll" href="#anchor07">コラム</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="l-header__item">
          <div class="l-header__inquiry c-btn-01"><a href="https://www.edupress.net/contents/?page_id=230"  target="_blank">お問い合わせ </a></div>
            <div class="l-header__logo02"> <a href="https://www.zkai-gr.co.jp/" target="_blank">Z-kai</a></div>
            <div class="l-header__btn"><span> </span><span></span><span></span></div>
          </div>
        </div>
      </div>
    </header>
    <!-- ** end header **********-->

    <div class="l-contents">
      <main class="l-contents__inr" role="main">
        <div class="c-mv">
          <div class="c-mv__cont">
            <h1 class="ttl">我々は、<br>CS「 顧客満足 」<br class="u-only-sp">創出企業<br class="u-only-pc">EDUPRESS<br class="u-only-sp">です</h1>
            <p class="txt">エデュプレスは情報を届けるプロフェッショナルとして、印刷物の制作をはじめ、<br class="u-only-pc">WEBや動画制作、システム開発、販促サポートなど、様々なソリューションを組み合わせ、<br class="u-only-pc">お客様の「思い」を最適な形で届けるお手伝いをいたします。</p>
            <div class="c-btn-01 c-mv__btn arrow"><a href="https://www.edupress.net/contents/?page_id=230"  target="_blank">ご相談はこちら</a></div>
          </div>
          <?php if ( have_posts() ) :?>
            <?php query_posts('posts_per_page=1'); ?>
            <?php while ( have_posts() ) :?>
              <?php the_post(); ?>
                <div class="c-mv__column">
                  <a href="<?php the_permalink(); ?>" target="_blank">
                    <div class="inr">
                      <div class="thumb">
                        <?php if (has_post_thumbnail()): //もしアイキャッチ画像があれば?>
                            <?php the_post_thumbnail(array(60,60)); ?>
                            <?php else : ?>
                            <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/thumb_column_mv.jpg" alt="" width="60" height="60" />
                        <?php endif; ?>
                      </div>
                      <div class="cont">
                        <div class="meta">
                          <div class="time"><?php echo get_the_date( 'Y m d' ); ?></div>
                          <div class="ttl"><?php echo mb_substr($post->post_title, 0, 13) . '…'; ?></div>
                        </div>
                        <p class="txt"><?php
                          if ( mb_strlen( $post->post_content, 'UTF-8' ) > 40 ) {
                            $content = str_replace( '\n', '', mb_substr( strip_tags( $post->post_content ), 0, 40, 'UTF-8' ) );
                            echo $content . '…';
                          } else {
                            echo str_replace( '\n', '', strip_tags( $post->post_content ) );
                          }
                          ?></p>
                      </div>
                    </div>
                  </a>
              </div>
              <?php endwhile; ?>
              <?php else:  ?>
              <?php endif; ?>
        </div>
        <div class="p-main">
          <section class="c-section">
            <div class="inr">
              <h2 class="c-head-01 ttl01 first"> <span>サービス紹介</span></h2>
              <div class="c-grid p-main__btns">
                <div class="c-grid__row c-gutter-2 c-gutter-mb5">
                  <div class="col-24 col-sm-12 col-md-8">
                    <div class="c-btn-02 arrow-bottom icon01"><a class="scroll" href="#anchor01"> <span>solution1</span><br>BPO</a></div>
                  </div>
                  <div class="col-24 col-sm-12 col-md-8">
                    <div class="c-btn-02 arrow-bottom icon02"><a class="scroll" href="#anchor02"> <span>Solution2</span><br>セミナー動画</a></div>
                  </div>
                  <div class="col-24 col-sm-12 col-md-8">
                    <div class="c-btn-02 arrow-bottom icon03"><a class="scroll" href="#anchor03"> <span>solution3</span><br>検定ビジネス</a></div>
                  </div>
                </div>
              </div>
              <div class="p-box">
                <div class="inr">
                  <p class="c-head-lead" id="anchor01">solution 1</p>
                  <div class="p-sub-ttl-01">
                    <picture>
                      <source media="(max-width: 889px)" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_01_sp.png" />
                      <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_01.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_01@2x.png 2x" alt="BPO" width="192" height="38" />
                    </picture>
                  </div>
                  <h3 class="c-head-02"> <span class="marker"><span class="small">コスト</span><span class="small-x">を</span><span class="small">減らして<br class="u-only-sp">在庫</span><span class="small-x">の</span><span class="small"> <span class="dot">適</span><span class="dot">正</span><span class="dot">化</span></span><span class="small-x">を</span><span class="small"> <span class="dot">実</span><span class="dot">現</span>！</span><br>『在庫管理＆<br class="u-only-sp">発送サービス』</span></h3>
                  <div class="p-box__item">
                    <h4 class="c-head-03">このようなお困りごとはございませんか？</h4>
                    <div class="c-grid">
                      <div class="c-grid__row u-ai-center u-jc-center">
                        <div class="col-md-6 col-sm-7 col-16">
                          <div><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_01.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_01@2x.png 2x" alt="" width="178" height="161" />
                          </div>
                        </div>
                        <div class="col-md-18">
                          <div class="p-box-02 arrow">
                            <ul>
                              <li class="u-note"> <span>・</span><span>カタログ・パンフなどの印刷物やサンプル・ノベルティなどの商材の在庫管理がシステム化されておらず、足りなくなってから<span class="u-color-primary">慌てて追加発注することが多い…</span></span></li>
                              <li class="u-note"> <span>・</span><span>リモートワークが進み、社内担当者による<span class="u-color-primary">タイムリーな発送手配等ができない…</span></span></li>
                              <li class="u-note"> <span>・</span><span>オフィスに<span class="u-color-primary">在庫を持つことが難しい</span>…</span></li>
                              <li class="u-note"> <span>・</span><span>社員の手間を少しでも<span class="u-color-primary">効率化したい</span>……</span></li>
                              <li class="u-note"> <span>・</span><span>倉庫代、発送代を<span class="u-color-primary">少しでも削減したい</span>……</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                    <h4 class="c-head-03">エデュプレスの「在庫管理＆発送サービス」で、一気に解決！</h4>
                    <h5 class="c-head-04">オールインワン</h5>
                    <p>カタログ・パンフ・ノベルティなどの広報・宣伝ツールを一括でお預かり※。在庫管理システム（WMS）で、①在庫管理　②出荷指示　③出荷確認を行うことができます。</p>
                    <div class="p-box-02 w645">
                      <div class="p-img-01"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_02.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_02@2x.png 2x" alt="" width="459" height="270" />
                        <p class="u-text-center u-text-md-right u-fz-12">在庫管理システム（WMS）<br class="u-only-pc">画面イメージ </p>
                      </div>
                      <div class="p-w360 u-mb-4">
                        <p class="p-check">お預かりアイテムをサムネール画像で表示</p>
                        <p class="p-check">発送先リストを事前登録することで、<br>発送指示を簡略化</p>
                        <p class="p-check">出荷履歴画面から発送日時や発送伝票番号等を<br>スピーディーに確認可能</p>
                        <p class="p-check">各アイテムの在庫数をリアルタイムで確認可能</p>
                        <p class="p-check">在庫下限数を設定し、下限数を下回った際に画面およびメール配信にてアラート発信</p>
                        <p class="p-check">貴社の管理ルール等に適合したカスタマイズが可能</p>
                      </div>
                      <p>さらにエデュプレスでは以降の発送作業はもちろん、幅広いニーズにお応えすることが可能です。</p>
                      <div class="c-grid">
                        <div class="c-grid__row c-gutter-4 c-gutter-mb4">
                          <div class="col-24 col-sm-10">
                            <p class="p-check">エンドユーザーからの<br>お問い合わせ受付の事務局代行</p>
                          </div>
                          <div class="col-24 col-sm-8">
                            <p class="p-check">小ロット印刷対応向け<br>オンデマンド印刷</p>
                          </div>
                          <div class="col-24 col-sm-6">
                            <p class="p-check">印刷物の増刷</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="u-fz-12 u-mt-2">※危険物、生き物、生鮮食料品、医薬品等のお預かりはできません。詳しくはご相談ください。</p>
                    <div class="p-box-02 w800 u-mt-4 u-mb-9">
                      <p class="u-text-center u-mb-6">在庫管理システム導入後のイメージ</p>
                      <div>
                        <picture>
                          <source media="(max-width: 889px)" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_03_sp.png" />
                          <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_03.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_03@2x.png 2x" alt="" width="752" height="284" />
                        </picture>
                      </div>
                      <div class="c-gird u-mt-4">
                        <dl class="c-grid__row c-gutter-2 c-gutter-mb2 u-ai-center u-jc-center">
                          <dt class="u-color-warning col-24 col-md-4">注文翌日に到着</dt>
                          <dd class="col-24 col-md-11">
                            <p class="u-fz-12 u-mb-0">《ご注意》</p>
                            <p class="u-fz-12 u-mb-0">・発送ご依頼は<span class="u-color-warning">当日午前中</span>までとなります。</p>
                            <p class="u-fz-12 u-mb-0">・ヤマト運輸の翌日到着可能範囲地域のものが対象です。</p>
                            <p class="u-fz-12 u-mb-0">・<span class="u-color-warning">海外発送ももちろん承ります。（日程応相談）</span></p>
                          </dd>
                        </dl>
                      </div>
                    </div>
                    <h5 class="c-head-04 point02">コスト削減</h5>
                    <p>当社倉庫を活用することによる保管費用の削減や、当社のスケールメリットによる発送コストの削減が期待できます。また、貴社ご担当者の業務負担を大幅に減らし、本来の業務に注力いただけるほか、リモートワークなどの新しい働き方にも最適です。</p>
                  </div>
                  <div class="p-box__item">
                    <h4 class="c-head-03 u-text-center">実例・お客様の声</h4>
                    <p class="u-text-md-center">実際に在庫管理＆発送サービスをご利用いただいているお客様から、メッセージをいただきました！</p>
                    <div class="p-box-02 u-mt-7">
                      <div class="c-grid">
                        <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
                          <div class="col-md-5 col-12">
                            <div class="u-text-center"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_04.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_04@2x.png 2x" alt="" width="100" height="112" />
                            </div>
                          </div>
                          <div class="col-md-19">
                            <p class="u-color-primary u-fz-18">株式会社高研　営業企画部 様</p>
                            <p class="u-fz-14">元々、カタログなど販促ツールの在庫管理や、各拠点への発送手配は企画部門が行っていました。通常業務の合間に行うので、即日対応が出来ないこともありました。そんなとき、カタログ制作を依頼していたエデュプレスさんでこういったサービスがあると知り、相談してみることに。サービス導入後は、各拠点からエデュプレスさんに直接発送依頼を行うため、本社でのとりまとめ作業が不要になり、本来の業務に集中できるようになりました。また、在庫が数字で常に確認できるので、棚卸や在庫管理がとても楽になりました。各拠点にとっても、本社での集約期間を待たずに各自のタイミングで取り寄せられ、重宝しているようです。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-box-02">
                      <div class="c-grid">
                        <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
                          <div class="col-md-5 col-12">
                            <div class="u-text-center"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_05.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_05@2x.png 2x" alt="" width="120" height="121" />
                            </div>
                          </div>
                          <div class="col-md-19">
                            <p class="u-color-primary u-fz-18">ノバ・バイオメディカル株式会社　マーケティング部 様</p>
                            <p class="u-fz-14">事務所移転に伴う業務最適化の見直しおよびテレワーク日数の増加により、カタログの在庫管理および発送業務についてエデュプレスさんに相談いたしました。<br>自社で保管していたときは、常に正確な在庫数を把握しておくことが難しく、足りなくなってから増刷することも多かったのですが、このシステムを導入したことにより、一目で在庫数が確認できるように。倉庫での適切な保管によりカタログの破損などもなくなりました。さらにアイテムごとに規定の在庫下限数に達するとアラートがかかるため、スムーズに増刷がかけられ、機会損失を防げるようになりました。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                  <div class="c-btn-01 arrow w415 mail"><a href="https://www.edupress.net/contents/?page_id=223" target="_blank">BPOについての<br class="u-only-sp">ご相談はこちら</a></div>
                  </div>
                  <div class="p-box__item">
                    <div class="c-grid">
                      <div class="c-grid__row u-jc-center">
                        <div class="col-20 col-sm-8">
                          <div class="p-paper"><a href="https://www.edupress.net/contents/?page_id=6" target="_blank">
                              <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_01.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_01@2x.png 2x" alt="" width="258" height="198" />
                              </div>
                              <p class="p-paper__link">ダウンロードはこちら</p>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-box">
                <div class="inr">
                  <p class="c-head-lead" id="anchor02">solution 2</p>
                  <div class="p-sub-ttl-02">
                    <picture>
                      <source media="(max-width: 889px)" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_02_sp.png" />
                      <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_02.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_02@2x.png 2x" alt="セミナー動画" width="296" height="28" />
                    </picture>
                  </div>
                  <h3 class="c-head-02"> <span class="marker"><span class="small">任せて</span><span class="small"> <span class="dot">楽</span><span class="dot">々</span>&</span><span class="small"> <span class="dot">安</span><span class="dot">心</span><span class="dot">品</span><span class="dot">質</span>！</span><br>『セミナー・講習会動画制作サービス』</span></h3>
                  <div class="p-box__item">
                    <h4 class="c-head-03">このようなお困りごとはございませんか？</h4>
                    <div class="c-grid">
                      <div class="c-grid__row u-ai-center u-jc-center">
                        <div class="col-md-6 col-sm-7 col-16">
                          <div><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_06.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_06@2x.png 2x" alt="" width="172" height="161" />
                          </div>
                        </div>
                        <div class="col-md-18">
                          <div class="p-box-02 arrow">
                            <ul>
                              <li class="u-note"> <span>・</span><span>コロナ禍により、会場で行っていた<span class="u-color-primary">説明会・講習会等が実施できない</span>…</span></li>
                              <li class="u-note"> <span>・</span><span>採用説明動画や社員研修動画を作成したいが、<span class="u-color-primary">進め方が分からない</span>…</span></li>
                              <li class="u-note"> <span>・</span><span>手間と予算をかけずに<span class="u-color-primary">動画を作成したい</span>…</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                    <h4 class="c-head-03">エデュプレスの「セミナー・講習会動画制作サービス」で、一気に解決！</h4>
                    <div class="c-gird">
                      <div class="c-grid__row">
                        <div class="col-24 col-md-8">
                          <h5 class="c-head-04">価格</h5>
                          <p>ご予算やご要望に合わせて、柔軟に制作プランをご提案、お見積りいたします。ちょっとした修正作業から、ゼロベースのご相談まで、幅広く対応可能です。</p>
                        </div>
                        <div class="col-24 col-md-8">
                          <h5 class="c-head-04 point02">品質</h5>
                          <p>セミナーや講習会、学会等のシーンにとどまらず、さまざまな企業のPR動画制作に関わってきた動画制作のプロが、構成のご提案、撮影、編集を担当。「伝わる動画」を作成します。</p>
                        </div>
                        <div class="col-24 col-md-8">
                          <h5 class="c-head-04 point03">ワンストップ</h5>
                          <p>エデュプレスでは、セミナー、講習会等の事務局代行もお引き受けしています。動画制作はもちろん、動画のアップ、配信といった事務局作業まで、ワンストップで対応いたします。</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                    <h4 class="c-head-03 u-text-center">実例・お客様の声</h4>
                    <p class="u-text-md-center">実際に動画制作サービスをご利用いただいているお客様から、メッセージをいただきました！</p>
                    <div class="p-box-02 u-mt-7">
                      <div class="c-grid">
                        <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
                          <div class="col-md-5 col-12">
                            <div class="u-text-center"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_07.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_07@2x.png 2x" alt="" width="100" height="112" />
                            </div>
                          </div>
                          <div class="col-md-19">
                            <p class="u-color-primary u-fz-18">分析機器メーカー　A社 様</p>
                            <p class="u-fz-14">ウェビナー動画を簡単に作りたいと思ったときに「安価で早く柔軟な」対応をしてくれたのがエデュプレスさんでした。ナレーションも複数の声優さんから指名でき、ドンピシャリの動画を制作できました。また動画を複数作るうえで、わかりやすい価格設定を提示してくれたので予算が取りやすく、同僚や他部署の人たちに紹介して喜ばれました。</p>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                  <div class="c-btn-01 arrow w415 mail"><a href="https://www.edupress.net/contents/?page_id=221" target="_blank">セミナー動画についての<br class="u-only-sp">ご相談はこちら</a></div>
                  </div>
                  <div class="p-box__item">
                    <div class="c-grid">
                      <div class="c-grid__row u-jc-center">
                        <div class="col-20 col-sm-8">
                        <div class="p-paper"><a href="https://www.edupress.net/contents/?page_id=59" target="_blank">
                              <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_02.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_02@2x.png 2x" alt="" width="258" height="198" />
                              </div>
                              <p class="p-paper__link">ダウンロードはこちら</p>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="p-box">
                <div class="inr">
                  <p class="c-head-lead" id="anchor03">solution 3</p>
                  <div class="p-sub-ttl-03">
                    <picture>
                      <source media="(max-width: 889px)" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_03_sp.png" />
                      <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_03.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/sub_ttl_03@2x.png 2x" alt="検定ビジネス" width="296" height="26" />
                    </picture>
                  </div>
                  <h3 class="c-head-02"> <span class="marker"><span class="small">新規立ち上げ</span><span class="small-x">から <br class="u-only-sp"></span><span class="small"> <span class="dot">企</span><span class="dot">画</span>・運用</span><span class="small-x">の</span><span class="small"> <span class="dot">見</span><span class="dot">直</span><span class="dot">し</span></span><span class="small-x">まで</span><span class="small">！</span><br>『検定・講習会ビジネス<br class="u-only-sp">サポートサービス』</span></h3>
                  <div class="p-box__item">
                    <h4 class="c-head-03">このようなお困りごとはございませんか？</h4>
                    <div class="c-grid">
                      <div class="c-grid__row u-ai-center u-jc-center">
                        <div class="col-md-6 col-sm-7 col-16">
                          <div><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_08.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_08@2x.png 2x" alt="" width="166" height="156" />
                          </div>
                        </div>
                        <div class="col-md-18">
                          <div class="p-box-02 arrow">
                            <ul>
                              <li class="u-note"> <span>・</span><span>自社の教材を用いて、新しく検定試験や認定試験を立ち上げたいが、<span class="u-color-primary">ノウハウがない</span>…</span></li>
                              <li class="u-note"> <span>・</span><span>運営コストや労力を<span class="u-color-primary">削減したい</span>…</span></li>
                              <li class="u-note"> <span>・</span><span>もっと多くの方に<span class="u-color-primary">受検してもらいたい</span>…</span></li>
                              <li class="u-note"> <span>・</span><span>IBT化・CBT化の必要性があるが、社内<span class="u-color-primary">リソースが不足している</span>…</span></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                    <h4 class="c-head-03">エデュプレスの「検定・講習会ビジネスサポートサービス」で、<br class="u-only-pc">一気に解決！</h4>
                    <h5 class="c-head-04">主催者と受検者をつなぐサポート</h5>
                    <p>当社は多くの教育関連企業様や学校・団体様に対して、学生や塾生が使用する各種教材・部材・広報ツールなど、これまでさまざまな教育支援ツールを制作してまいりました。そのノウハウとリソースを生かして、検定・認定試験、講習会主催者の皆様を的確にサポートしております！</p>
                    <h5 class="c-head-04 point02 u-mt-6">ワンストップ</h5>
                    <p>教材・部材（受検票やマークシートなど）制作、広報支援、運営代行まで、ワンストップで対応が可能です。トータルサポートはもちろん、貴社ニーズに合わせた部分的なお手伝いまで、幅広くバックアップいたします。</p>
                    <div class="u-mt-6">
                      <h6 class="u-text-center">検定・講習会ビジネス<br class="u-only-sp">サポートサービスメニュー</h6>
                      <div class="p-onestep">
                        <div class="p-onestep__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_09.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_09@2x.png 2x" alt="" width="282" height="282" />
                        </div>
                        <div class="c-gird u-mt-4">
                          <div class="c-grid__row c-gutter-md-16 c-gutter-mb8 c-gutter-md-mb36">
                            <div class="col-24 col-md-12">
                              <div class="p-onestep__item item01">
                                <p class="p-onestep__ttl">教材制作</p>
                                <div class="p-onestep__cont">
                                  <p class="p-onestep__txt">各種教材のデータ制作からサポートします。デジタルブック、eラーニングへの展開も可能です。</p>
                                  <ul class="p-onestep__list">
                                    <li class="u-note"><span>・</span>教材</li>
                                    <li class="u-note"><span>・</span>過去問題集</li>
                                    <li class="u-note"><span>・</span>デジタルブック</li>
                                    <li class="u-note"><span>・</span>eラーニング　など</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-24 col-md-12">
                              <div class="p-onestep__item item02">
                                <p class="p-onestep__ttl">部材制作</p>
                                <div class="p-onestep__cont">
                                <p class="p-onestep__txt">検定運営の必要部材の制作をサポートします。マークシート回答からの、読み取り・集計・レポート作成も可能です。</p>
                                  <ul class="u-pl-md-4 u-ml-md-9 p-onestep__list">
                                    <li class="u-note"><span>・</span>受検票</li>
                                    <li class="u-note"><span>・</span>問題用紙</li>
                                    <li class="u-note"><span>・</span>解答用紙</li>
                                    <li class="u-note"><span>・</span>マークシート　など</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-24 col-md-12">
                              <div class="p-onestep__item item03">
                                <p class="p-onestep__ttl">広報支援</p>
                                <div class="p-onestep__cont">
                                  <p class="p-onestep__txt">紙媒体×デジタル媒体をクロス活用して潜在受検者への周知度、認知度アップを全面サポートします。</p>
                                  <ul class="p-onestep__list">
                                    <li class="u-note"><span>・</span>チラシ/パンフレット</li>
                                    <li class="u-note"><span>・</span>WEBサイト構築</li>
                                    <li class="u-note"><span>・</span>WEB広告/SNS広告</li>
                                    <li class="u-note"><span>・</span>インフルエンサーマーケティング　など</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-24 col-md-12">
                              <div class="p-onestep__item item04">
                                <p class="p-onestep__ttl">運営代行</p>
                                <div class="p-onestep__cont">
                                  <p class="p-onestep__txt">会場選定・機材手配から誘導スタッフ、運営スタッフまで一貫した運営代行をサポートします。</p>
                                  <ul class="p-onestep__list">
                                    <li class="u-note"><span>・</span>各種フォーム作成</li>
                                    <li class="u-note"><span>・</span>運営スタッフ手配</li>
                                    <li class="u-note"><span>・</span>資材在庫管理</li>
                                    <li class="u-note"><span>・</span>試験会場の選定予約　など</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                    <h4 class="c-head-03 u-text-center">実例・お客様の声</h4>
                    <p class="u-text-md-center">実際に検定・講習会ビジネスサポートサービスをご利用いただいているお客様から、<br class="u-only-pc">メッセージをいただきました！</p>
                    <div class="p-box-02 u-mt-7">
                      <div class="c-grid">
                        <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
                          <div class="col-md-5 col-12">
                            <div class="u-text-center"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_10.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_10@2x.png 2x" alt="" width="120" height="121" />
                            </div>
                          </div>
                          <div class="col-md-19">
                            <p class="u-color-primary u-fz-18">一般社団法人 日本果汁協会　事務局本部 U様</p>
                            <p class="u-fz-14">コロナ禍をきっかけに研修会の開催方法を見直すことになり、オンラインセミナーの実績があったエデュプレスさんに相談しました。その結果、WEB会議システムの選定から契約代行、事務局業務、事前資料発送、当日運営まですべてお任せすることができ、担当者の負担が軽減。さらにリアル会場とオンラインのハイブリッドで開催したおかげで、受講者満足度も向上しました。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-box-02">
                      <div class="c-grid">
                        <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
                          <div class="col-md-5 col-12">
                            <div class="u-text-center"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_11.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_11@2x.png 2x" alt="" width="100" height="112" />
                            </div>
                          </div>
                          <div class="col-md-19">
                            <p class="u-color-primary u-fz-18">公益社団法人 全国経理教育協会 様</p>
                            <p class="u-fz-14">当協会で実施する検定試験のテキスト制作・出版サポートを請け負ってもらえるパートナーを探していました。エデュプレスさんは試験問題の作成・印刷、解答回収や集計、在庫管理・発送など多様な実績があることが決め手となり、委託することに。結果、担当者の負担が減り、業務改善につながりました。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="p-box-02">
                      <div class="c-grid">
                        <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
                          <div class="col-md-5 col-12">
                            <div class="u-text-center"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/image_12.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/image_12@2x.png 2x" alt="" width="100" height="112" />
                            </div>
                          </div>
                          <div class="col-md-19">
                            <p class="u-color-primary u-fz-18">株式会社リンクアンドモチベーション 様</p>
                            <p class="u-fz-14">クライアント企業の社員に対する意識調査(マークシート)の印刷から発送、回収集計業務を、元々は他社に委託していました。しかし、作業品質や業務の正確性などに課題があり、対応策を検討していた際に エデュプレスさんよりこのサービスをご提案いただきました。作業品質を担保できる体制づくりから取り組んでいただいたおかげで、課題も解決し、安心してお任せしています。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  <div class="p-box__item">
                  <div class="c-btn-01 arrow w415 mail"><a href="https://www.edupress.net/contents/?page_id=226" target="_blank">検定ビジネスについての<br class="u-only-sp">ご相談はこちら</a></div>
                  </div>
                  <div class="p-box__item">
                    <div class="c-grid">
                      <div class="c-grid__row u-jc-center">
                        <div class="col-20 col-sm-8">
                        <div class="p-paper"><a href="https://www.edupress.net/contents/?page_id=57" target="_blank">
                              <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_03.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_03@2x.png 2x" alt="" width="258" height="198" />
                              </div>
                              <p class="p-paper__link">ダウンロードはこちら</p>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="c-section">
            <div class="inr">
              <h2 class="c-head-01 ttl02 first" id="anchor04"> <span>エデュプレスのご紹介</span></h2>
              <div class="p-box">
                <div class="inr">
                  <h3 class="c-head-02 ttl02"><span class="marker">創業1982年。<br class="u-only-sp">40年<span class="small-x"> </span>を超える<span class="dot">信</span><span class="dot">頼</span><span class="small-x">と</span><span class="dot">実</span><span class="dot">績</span></span></h3>
                  <div class="c-grid u-mt-9">
                    <div class="c-grid__row u-jc-center c-gutter-mb8">
                      <div class="col-md-11">
                        <div class="p-box-03">
                          <p class="p-box-03__txt">総合教育グループである<br>Z会グループの企業です</p>
                        </div>
                      </div>
                      <div class="col-md-11">
                        <div class="p-box-03">
                          <p class="p-box-03__txt">クライアントへ質の高い販促支援、<br>業務支援をご提供</p>
                        </div>
                      </div>
                      <div class="col-md-11">
                        <div class="p-box-03">
                          <p class="p-box-03__txt">長年にわたる<br>教材印刷での信頼と実績</p>
                        </div>
                      </div>
                      <div class="col-md-11">
                        <div class="p-box-03">
                          <p class="p-box-03__txt">最適なプロモーションを<br>実施するためのツール開発力</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inr02">
                  <div class="p-box-04">
                    <h3 class="c-head-02 ttl02 p-box-04__ttl"><span class="marker">ココ<span class="small-x"> </span>が<span class="dot">す</span><span class="dot">ご</span><span class="dot">い</span>エデュプレス！</span></h3>
                    <div class="c-grid u-mt-9">
                      <div class="c-grid__row c-gutter-mb6 c-gutter-6">
                        <div class="col-24 col-md-12 u-flex">
                          <div class="p-box-02">
                            <div class="c-grid u-mb-4">
                              <div class="c-grid__row c-gutter-1 u-ai-center u-jc-center c-gutter-mb4">
                                <div class="col-5 col-sm-3 col-md-4"><i class="p-icon"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_01.png" alt="" width="48" height="48" /></i></div>
                                <div class="col-24 col-md-14">
                                  <h4 class="u-text-center u-text-md-left u-fz-18">企画・デザイン・DTP</h4>
                                </div>
                              </div>
                            </div>
                            <p>Ｚ会グループのツール制作でノウハウを培った専門チームが、デザイン・DTPはもちろん、自動組版、オンライン校正システム、自動検版システムを活用した伝えたいメッセージがしっかり伝わる効率的な制作フローをご提供します。</p>
                          </div>
                        </div>
                        <div class="col-24 col-md-12 u-flex">
                          <div class="p-box-02">
                            <div class="c-grid u-mb-4">
                              <div class="c-grid__row c-gutter-1 u-ai-center u-jc-center c-gutter-mb4">
                                <div class="col-5 col-sm-3 col-md-4"><i class="p-icon"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_02.png" alt="" width="48" height="48" /></i></div>
                                <div class="col-24 col-md-14">
                                  <h4 class="u-text-center u-text-md-left u-fz-18">心に届けるツール制作</h4>
                                </div>
                              </div>
                            </div>
                            <p>どんな制作物も、目的を明確化するためのヒアリングから始まります。大切なのは貴社の思いを、お客様の心にどう届けるのか。売れるプロモーションツールをつくるためには、印刷物単体の品質を高めるだけではこと足りません。 “売れるプロモーション戦略”をご提案します。</p>
                          </div>
                        </div>
                        <div class="col-24 col-md-12 u-flex">
                          <div class="p-box-02">
                            <div class="c-grid u-mb-4">
                              <div class="c-grid__row c-gutter-2 u-ai-center u-jc-center c-gutter-mb4">
                                <div class="col-5 col-sm-3 col-md-4"><i class="p-icon"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_03.png" alt="" width="48" height="48" /></i></div>
                                <div class="col-24 col-md-12">
                                  <h4 class="u-text-center u-text-md-left u-fz-18">ロット別最適印刷</h4>
                                </div>
                              </div>
                            </div>
                            <p>小ロットから大量印刷まで、印刷部数に合わせた最適な印刷手法（印刷機・製本仕様・用紙提案）によるコストダウン方法をご提案します。</p>
                          </div>
                        </div>
                        <div class="col-24 col-md-12 u-flex">
                          <div class="p-box-02">
                            <div class="c-grid u-mb-4">
                              <div class="c-grid__row c-gutter-1 u-ai-center u-jc-center c-gutter-mb4">
                                <div class="col-5 col-sm-3 col-md-4"><i class="p-icon"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_04.png" alt="" width="48" height="48" /></i></div>
                                <div class="col-24 col-md-12">
                                  <h4 class="u-text-center u-text-md-left u-fz-18">印刷用紙適正診断</h4>
                                </div>
                              </div>
                            </div>
                            <p>印刷物の目的別にあわせた印刷用紙を提案します。「長期間使用するための用紙」「ペンで書き込みしても裏移りしない用紙」「消しゴムをかけても破れにくい用紙」など、質感の優れた最適な用紙をご提案します。</p>
                          </div>
                        </div>
                        <div class="col-24 col-md-12 u-flex">
                          <div class="p-box-02">
                            <div class="c-grid u-mb-4">
                              <div class="c-grid__row c-gutter-1 u-ai-center u-jc-center c-gutter-mb4">
                                <div class="col-5 col-sm-3 col-md-4"><i class="p-icon"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_05.png" alt="" width="48" height="48" /></i></div>
                                <div class="col-24 col-md-10">
                                  <h4 class="u-text-center u-text-md-left u-fz-18">印刷用紙販売</h4>
                                </div>
                              </div>
                            </div>
                            <p>当社は印刷用紙の調達力・価格力に少しだけ自信を持っています。紙卸商として各メーカーの特性、印刷用紙の特性を把握し、すべての国内流通紙の中から最適な印刷用紙をお客様のご要望に沿った価格と配送で調達いたします。</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="p-box__item">
                    <div class="c-grid">
                      <div class="c-grid__row u-jc-md-center c-gutter-6">
                        <div class="col-12 col-md-7"><i class="p-icon u-mb-4"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_06.png" alt="" width="48" height="48" /></i>
                          <h4 class="u-text-center">プロモーション</h4>
                          <p class="u-fz-14">チラシ／フリーペーパー／DM／パンフレット／ポスター／ポストカード／POP／パネル</p>
                        </div>
                        <div class="col-12 col-md-7"><i class="p-icon u-mb-4"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_07.png" alt="" width="48" height="48" /></i>
                          <h4 class="u-text-center">セールス</h4>
                          <p class="u-fz-14">会社案内／カタログ／会報誌／ニュースレター／事例集／社内報／カレンダー／年賀状</p>
                        </div>
                        <div class="col-12 col-md-7"><i class="p-icon u-mb-4"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_08.png" alt="" width="48" height="48" /></i>
                          <h4 class="u-text-center">ビジネス</h4>
                          <p class="u-fz-14">説明書／マニュアル／保証書／仕様書／報告書／名簿／社史／記念誌／名刺／封筒</p>
                        </div>
                        <div class="col-12 col-md-7"><i class="p-icon u-mb-4"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_09.png" alt="" width="48" height="48" /></i>
                          <h4 class="u-text-center">教育支援</h4>
                          <p class="u-fz-14">教材／テキスト／問題集／ドリル／楽譜／ノート／試験問題／マークシート／シラバス</p>
                        </div>
                        <div class="col-12 col-md-7"><i class="p-icon u-mb-4"> <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/icon_10.png" alt="" width="48" height="48" /></i>
                          <h4 class="u-text-center">書籍</h4>
                          <p class="u-fz-14">雑誌／漫画／小説／ラノベ／絵本／写真集／同人誌／ビジネス書／技術書／自叙伝</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="inr">
                  <div class="p-box__item">
                  <div class="c-btn-01 arrow w415 mail"><a href="https://www.edupress.net/contents/?page_id=230"  target="_blank">印刷についての<br class="u-only-sp">ご相談はこちら</a></div>
                  </div>
                  <div class="p-box__item">
                    <div class="c-grid">
                      <div class="c-grid__row u-jc-center">
                        <div class="col-20 col-sm-8">
                        <div class="p-paper"><a href="https://www.edupress.net/contents/?page_id=99" target="_blank">
                              <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_04.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_04@2x.png 2x" alt="" width="258" height="198" />
                              </div>
                              <p class="p-paper__link">ダウンロードはこちら</p>
                            </a></div>
                        </div>
                        <div class="col-20 col-sm-8">
                        <div class="p-paper"><a href="https://www.edupress.net/contents/?page_id=102" target="_blank">

                              <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_05.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_05@2x.png 2x" alt="" width="258" height="198" />
                              </div>
                              <p class="p-paper__link">ダウンロードはこちら</p>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="c-section color01">
            <div class="inr">
              <h2 class="c-head-01 ttl03" id="anchor05"><span>ホワイトペーパー<br class="u-only-sp">ダウンロード</span></h2>
              <div class="c-grid p-w800">
                <div class="c-grid__row u-jc-center">
                  <div class="col-20 col-sm-8">
                  <div class="p-paper"><a class="wh" href="https://www.edupress.net/contents/?page_id=6" target="_blank">
                        <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_01.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_01@2x.png 2x" alt="" width="258" height="198" />
                        </div>
                        <p class="p-paper__link">ダウンロードはこちら</p>
                      </a></div>
                  </div>
                  <div class="col-20 col-sm-8">
                  <div class="p-paper"><a class="wh" href="https://www.edupress.net/contents/?page_id=59" target="_blank">
                        <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_02.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_02@2x.png 2x" alt="" width="258" height="198" />
                        </div>
                        <p class="p-paper__link">ダウンロードはこちら</p>
                      </a></div>
                  </div>
                  <div class="col-20 col-sm-8">
                  <div class="p-paper"><a class="wh" href="https://www.edupress.net/contents/?page_id=57" target="_blank">
                        <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_03.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_03@2x.png 2x" alt="" width="258" height="198" />
                        </div>
                        <p class="p-paper__link">ダウンロードはこちら</p>
                      </a></div>
                  </div>
                  <div class="col-20 col-sm-8">
                  <div class="p-paper"><a class="wh" href="https://www.edupress.net/contents/?page_id=99" target="_blank">
                        <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_04.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_04@2x.png 2x" alt="" width="258" height="198" />
                        </div>
                        <p class="p-paper__link">ダウンロードはこちら</p>
                      </a></div>
                  </div>
                  <div class="col-20 col-sm-8">
                  <div class="p-paper"><a class="wh" href="https://www.edupress.net/contents/?page_id=102" target="_blank">
                        <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_05.png" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/paper_05@2x.png 2x" alt="" width="258" height="198" />
                        </div>
                        <p class="p-paper__link">ダウンロードはこちら</p>
                      </a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="c-section">
            <div class="inr">
              <h2 class="c-head-01 ttl04" id="anchor06"><span>参加無料<br>ビジネスセミナー開催情報</span></h2>
              <div class="p-box">
                <div class="inr">
                  <p>当社ではお客様の課題解決のヒントになればと考え、自社ソリューションを活用したビジネスセミナーを開催しています。ご興味がございましたら是非、以下よりご参加ください。</p>
                  <div class="c-grid u-mt-9">
                    <div class="c-grid__row c-gutter-4 c-gutter-md-8">
                      <div class="col-12 col-sm-8">
                      <div class="p-paper"><a href="https://www.edupress.net/seminar-list/seminar_insatsu_cost_01/"  target="_blank">
                            <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_01.jpg" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_01@2x.jpg 2x" alt="" width="258" height="168" />
                            </div>
                            <p class="p-paper__link">詳しくはこちら</p>
                          </a></div>
                      </div>
                      <div class="col-12 col-sm-8">
                      <div class="p-paper"><a href="https://www.edupress.net/seminar-list/seminar_offset_printing_01/"  target="_blank">
                            <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_02.jpg" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_02@2x.jpg 2x" alt="" width="258" height="168" />
                            </div>
                            <p class="p-paper__link">詳しくはこちら</p>
                          </a></div>
                      </div>
                      <div class="col-12 col-sm-8">
                      <div class="p-paper"><a href="https://www.edupress.net/seminar-list/seminar_printing_data_01/"  target="_blank">
                            <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_03.jpg" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_03@2x.jpg 2x" alt="" width="258" height="168" />
                            </div>
                            <p class="p-paper__link">詳しくはこちら</p>
                          </a></div>
                      </div>
                      <div class="col-12 col-sm-8">
                      <div class="p-paper"><a href="https://www.edupress.net/seminar-list/seminar_movie_01/"  target="_blank">
                            <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_04.jpg" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_04@2x.jpg 2x" alt="" width="258" height="168" />
                            </div>
                            <p class="p-paper__link">詳しくはこちら</p>
                          </a></div>
                      </div>
                      <div class="col-12 col-sm-8">
                      <div class="p-paper"><a href="https://www.edupress.net/seminar-list/seminar_onlineseminar_01/"  target="_blank">
                            <div class="p-paper__img"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_05.jpg" srcset="/contents/wp-content/themes/understrap-child/lp/assets/img/seminar_05@2x.jpg 2x" alt="" width="258" height="168" />
                            </div>
                            <p class="p-paper__link">詳しくはこちら</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                  <p class="u-fz-20 u-color-primary u-text-center u-mt-9">貴社課題について<br class="u-only-sp">お気軽にご相談ください</p>
                  <div class="c-btn-01 arrow w415 mail u-mt-9"><a href="https://www.edupress.net/contents/?page_id=230"  target="_blank">お問い合わせは<br class="u-only-sp">こちら</a></div>
                </div>
              </div>
            </div>
          </section>
          <section class="c-section">
            <div class="inr">
              <h2 class="c-head-01 ttl05" id="anchor07"><span>コラム</span></h2>
              <div class="p-box">
                <div class="inr">
                <div class="p-column">
                <?php if ( have_posts() ) :?>
                  <?php query_posts('posts_per_page=3'); ?>
                    <?php while ( have_posts() ) :?>
                      <?php the_post(); ?>
                          <div class="p-column__item"><a href="<?php the_permalink(); ?>" target="_blank">
                            <div class="p-column__img">
                              <?php if (has_post_thumbnail()): //もしアイキャッチ画像があれば?>
                                  <?php the_post_thumbnail(); ?>
                                  <?php else : ?>
                                  <img src="/contents/wp-content/themes/understrap-child/lp/assets/img/thumb_column.jpg" alt="" width="" height="" />
                              <?php endif; ?>
                            </div>
                              <div class="p-column__cont">
                                <time class="p-column__time"><?php echo get_the_date( 'Y m d' ); ?></time>
                                <p class="p-column__ttl"><?php the_title(); ?></p>
                              </div>
                            </a>
                          </div>
                        <?php endwhile; ?>
                        <?php else:  ?>

                        <?php endif; ?>
                        </div>
                  <div class="p-column-sub u-mt-9">
                    <h3 class="p-column-sub__ttl">過去コラム一覧</h3>
                  <ul>
                    <?php
                    $args = array(
                      'posts_per_page' => 5,
                      'offset' => 3,
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) :
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <li class="p-column-sub__item">
                      <dl>
                        <dt>
                          <time class="p-column-sub__time"><?php echo get_the_date( 'Y m d' ); ?></time>
                        </dt>
                        <dd>
                          <p class="p-column-sub"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></p>
                        </dd>
                      </dl>
                    </li>

                    <?php
                      endwhile;
                    endif;
                    ?>
                  </ul>
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
<input id="acd-check1" class="acd-check" type="checkbox">
<label class="acd-label" for="acd-check1">もっと見る</label>
<div class="acd-content">
                  <ul>
                    <?php
                    $args = array(
                      'posts_per_page' => 5,
                      'offset' => 8,
                    );
                    $the_query = new WP_Query( $args );
                    ?>
                    <?php if ( $the_query->have_posts() ) :
                      while ( $the_query->have_posts() ) : $the_query->the_post();
                    ?>
                    <li class="p-column-sub__item">
                      <dl>
                        <dt>
                          <time class="p-column-sub__time"><?php echo get_the_date( 'Y m d' ); ?></time>
                        </dt>
                        <dd>
                          <p class="p-column-sub"><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?></a></p>
                        </dd>
                      </dl>
                    </li>

                    <?php
                      endwhile;
                    endif;
                    ?>
                  </ul>
</div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
    </div>
    <!-- ** start footer  **********-->
    <footer class="l-footer">
      <div class="l-footer__cont01">
        <div class="inr">
          <div class="item">
            <div class="logo"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/logo_edupress_footer.png" alt="株式会社エデュプレス" width="181" height="91" />
              <p>&copy; EDUPRESS Inc.</p>
            </div>
            <ul class="nav">
              <li><a class="scroll" href="#anchor01">BPO</a></li>
              <li><a class="scroll" href="#anchor02">セミナー動画</a></li>
              <li><a class="scroll" href="#anchor03">検定ビジネス</a></li>
              <li><a class="scroll" href="#anchor04">会社紹介</a></li>
              <li><a class="scroll" href="#anchor05">ダウンロード</a></li>
              <li><a class="scroll" href="#anchor06">セミナー</a></li>
              <li><a class="scroll" href="#anchor07">コラム</a></li>
            </ul>
          </div>
          <div class="item02">
            <ul class="item02__nav">
              <li> <a href="https://edupress.net/privacy.html"  target="_blank">個人情報保護方針 </a></li>
              <li> <a href="https://edupress.net/privacy2.html"  target="_blank">個人情報の取り扱いについて </a></li>
              <li> <a href="https://edupress.net/socialmedia.html"  target="_blank">ソーシャルメディア・ポリシー </a></li>
              <li> <a href="https://edupress.net/about.html"  target="_blank">サイトについて </a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="l-footer__cont02">
        <div class="logo"><a href="https://www.zkai-gr.co.jp/" target="_blank"><img src="/contents/wp-content/themes/understrap-child/lp/assets/img/logo_zkai_footer.png" alt="Z-KAI Group 最高の教育で、未来をひらく。" width="150" height="45" /></a></div>
      </div>
    </footer>
    <!-- ** end footer **********-->
  </div>

  <script src="/contents/wp-content/themes/understrap-child/lp/assets/js/main.js"></script>
</body>

</html>