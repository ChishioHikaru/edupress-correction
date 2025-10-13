<?php
/*
Template Name: 事業領域
*/
?>

<?php get_header(); ?>

<!-- 公開時には、以下のコードを有効にしてください。 -->
<!-- <div id="contents">
<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    the_content();
  endwhile;
endif;
?>
</div> -->

<!-- 作業用コード。公開時は以下#contents内のコードを削除してください。 -->
<div id="contents">
  <div class="underlayer_mv">
    <h1>事業領域</h1>
  </div>
  <div class="bread">
    <?php breadcrumb(); ?>
  </div>
</div>

<section class="business__message">
  <div class="business__inner">
    <h2 class="business__message-heading">最適な「情報ソリューション」で<br class="pc-none">お客様の成長、発展に貢献します。</h2>
    <p class="business__message-note">
      エデュプレスは、お客様の情報発信、コミュニケーション促進を<br>
      最適な手段・方法でお手伝いする「情報ソリューションカンパニー」です。<br>
      デジタル環境の進化や社会生活の変化による<br>
      世の中と企業との関係性やコミュニケーションの手段や方法の変化に伴い、<br>
      より多角的に世の中を読み取り、その先にあるあらゆる可能性を想定して<br>
      最適解を導き出し、お客様の成長、発展に貢献します。<br>
      創立以来、お客様の実現したい願い＝「思い」に真摯に向き合い、<br>
      「思い」を価値ある情報としてお届けするという根幹は変わりません。<br>
      社員一人ひとりが、お客様に真摯に寄り添い、ともにゴールをめざします。
    </p>
  </div>
</section>

<section class="business__area">
  <div class="business__inner" data-section="area">
    <h2 class="business__area-heading">エデュプレスの事業領域</h2>
    <h3 class="business__area-heading-sub">
      業績拡大・業務効率化のための「情報発信、コミュニケーション促進」を<br>
      多彩なメニューを駆使し、あらゆる角度からサポートします。
    </h3>
    <p class="business__area-note">
      様々な強みやノウハウを結集し、お客様が抱える課題に一つひとつ向き合ってきた私たち。<br>
      2007年に名称をエデュプレスへと変更してからも、<br>
      総合印刷会社として印刷関連業務を中心とした多彩なサービスをお届けしてきました。<br>
      そして今、お客様の情報発信・コミュニケーション促進を支援する「情報ソリューションカンパニー」へ。<br>
      常に進化を続けてきた根底にあったのは、<br>
      いつも「お客様のために、考え、行動し、業績拡大や業務効率化に貢献する」という思いでした。<br>
      課題解決のためにチャレンジを続けること。<br>
      その積み重ねが、様々な手段・方法でニーズを実現できる「対応力の幅広さ」につながっています。
    </p>
  </div>


  <div class="business__item">
    <div class="business__item--box first">
      <div class="box_img">
        <img src="<?php echo home_url('wp-content/themes/edupress/asset/img/top/business01.webp'); ?>" alt="販促支援イメージ">
      </div>
      <div class="textarea">
        <div class="textarea__inner">
          <p class="title">【販促支援】</p>
          <p class="detail">
            情報を <span class="big">「<span class="blue">伝える</span>」「<span class="blue">広める</span>」「<span class="blue">活用する</span>」</span> 際に<br class="sp-none">より効果的な手段・方法でサポート
          </p>
        </div>
        <p class="note">
          業績拡大のために、お客様が持つ情報の中から「なにを」「いつ」「どのように」取り扱えばより大きな成果が得られるのか。その最適解をお客様と共に考え、幅広いメニューの中からベストな手段・方法でサポートします。
        </p>
      </div>
    </div>
    <div class="business__item--box second">
      <div class="box_img">
        <img src="<?php echo home_url('wp-content/themes/edupress/asset/img/top/business02.webp'); ?>" alt="業務支援イメージ">
      </div>
      <div class="textarea">
        <div class="textarea__inner">
          <p class="title">【業務支援】</p>
          <p class="detail">
            情報を <span class="big">「<span class="blue">処理する</span>」「<span class="blue">活用する</span>」「<span class="blue">管理する</span>」</span> 際に<br class="sp-none">不足するリソースを代替してサポート
          </p>
        </div>
        <p class="note">
          お客様が情報を取り扱う際、人的・知的・物理的リソースが不足している場合に、必要な業務をエデュプレスが代替して受託。お客様が自ら実行するよりも高い成果を提供し、業績拡大やコスト削減に貢献します。
        </p>
      </div>
    </div>
  </div>
</section>

<section class="business__flow">
  <div class="business__inner">
    <h2 class="business__flow-heading">業務の流れ</h2>

    <div class="business__flow-flex">
      <div class="business__flow-block">
        <h3 class="business__flow-list-heading">
          お客様の様々なニーズに対し…
        </h3>
        <ul class="business__flow-lists radius_wrap">
          <li class="business__flow-list">競争力の強化</li>
          <li class="business__flow-list">店舗・WEB WEBへの<br>集客力アップ</li>
          <li class="business__flow-list">営業活動の<br class="pc-none">強化</li>
          <li class="business__flow-list">顧客や<br class="pc-none">従業員への<br>情報発信</li>
          <li class="business__flow-list">会員サービスの<br>入会促進</li>
          <li class="business__flow-list">業務の<br>アウト<br class="pc-none">ソーシング</li>
          <li class="business__flow-list">顧客との<br>コミュニケーション促進</li>
          <li class="business__flow-list">ブランド力の<br class="pc-none">向上<br class="sp-none">イメージアップ</li>
          <li class="business__flow-list">情報セキュリティの<br>強化</li>
          <li class="business__flow-list">商品・サービスの<br>販売促進</li>
          <li class="business__flow-list">デジタル化による<br>コストダウン</li>
          <li class="business__flow-list">環境保全活動の推進</li>
          <li class="business__flow-list">顧客満足度の向上</li>
          <li class="business__flow-list">業務プロセスの<br>見直し</li>
          <li class="business__flow-list">従業員満足度の向上</li>
        </ul>
      </div>

      <div class="business__flow-block">
        <h3 class="business__flow-list-heading second">
          多彩なサービス・商品から<br>
          最適な手段・方法を提供！
        </h3>
        <div class="radius_wrap radius_wrap-second">
          <div class="logo_wrap">
            <img src="<?php echo home_url('wp-content/themes/edupress/asset/img/common/logo.svg'); ?>" alt="EDUPRESS">
          </div>
          <ul class="business__flow-circle">
            <li class="business__flow-circle-list first">
              <span>販促支援</span>
            </li>
            <li class="business__flow-circle-list second">
              <span>業務支援</span>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="business__flow-block circle">
        <span>
          業績拡大・<br>
          業務効率化に<br>
          貢献！
        </span>
      </div>
    </div>

    <div class="contact__area__inner--links">
      <a href="<?php echo home_url('solution/'); ?>" class="contact_btn" data-btn="business">「サービス・商品」を見る</a>
      <a href="<?php echo home_url('success/'); ?>" class="contact_btn" data-btn="business">「課題解決事例」を見る</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>