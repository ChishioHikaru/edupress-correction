<?php
/*
Template Name: サービスサイト（TOP）
*/
?>

<?php get_header(); ?>

<div id="contents">
    <div class="first_view">
      <div class="first_view_mv">
         <div class="textarea">
            <h1>お客様の思いを最適な手段で実現し、　<br class="pc">その先の可能性を見つけ出すために。</h1>
            <p class="mv_text">エデュプレスにはその「最適な手段」を提供するための、<br class="pc">多種多様なサービスがあります。</p>
         </div>
         <div class="mv_img">
            <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/mv-img.webp'); ?>" alt="サービス・商品">
         </div>
      </div>
       <div class="scroll_down">
         <img class="pc" src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/common/scroll-down.svg'); ?>">
         <img class="sp" src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/common/scroll-down-w.svg'); ?>">
       </div>
    </div>

    <section class="solution__service">
         <div class="solution__service__inner">
            <div class="section_head">
               <h2>サービス</h2>
               <p class="en_title">SERVICES</p>
            </div>
            <div class="business__item">
               <a href="<?php echo home_url('solution/creative/'); ?>" class="business__item--box">
                  <div class="box_img first pc">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service01.webp'); ?>" alt="クリエイティブイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 creative 】</p>
                     <p class="ja_title">クリエイティブ</p>
                     <div class="box_img first sp">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service01.webp'); ?>" alt="クリエイティブイメージ">
                     </div>
                     <p class="lead">企業価値を高めるコミュニケーションツールの制作をサポートします。</p>
                  </div>
               </a>
               <a href="<?php echo home_url('solution/promotion/'); ?>" class="business__item--box">
                  <div class="box_img second pc">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service02.webp'); ?>" alt="プロモーションイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 promotion 】</p>
                     <p class="ja_title">プロモーション</p>
                     <div class="box_img second sp">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service02.webp'); ?>" alt="プロモーションイメージ">
                     </div>
                     <p class="lead">商品やサービスの魅力を伝えるための、最適な手段を提案します。</p>
                  </div>
               </a>
               <a href="<?php echo home_url('solution/business-support/'); ?>" class="business__item--box">
                  <div class="box_img third pc">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service03.webp'); ?>" alt="ビジネスサポートイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 business support 】</p>
                     <p class="ja_title">ビジネスサポート</p>
                     <div class="box_img third sp">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service03.webp'); ?>" alt="ビジネスサポートイメージ">
                     </div>
                     <p class="lead">システムやヒトの力で、お客様の業務負担軽減、コスト削減に寄与します。</p>
                  </div>
               </a>
               <a href="<?php echo home_url('solution/products/'); ?>" class="business__item--box">
                  <div class="box_img fourth pc">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service04.webp'); ?>" alt="プロダクトイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 product 】</p>
                     <p class="ja_title">プロダクト</p>
                     <div class="box_img fourth sp">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service04.webp'); ?>" alt="プロダクトイメージ">
                     </div>
                     <p class="lead">印刷技術をベースとした様々なソリューションでお客様の課題に寄り添います。</p>
                  </div>
               </a>
            </div>
            <a href="/contents/" target="_blank" class="other_btn">
               <div class="btn_img">
                  <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/service05.webp'); ?>" alt="当社のおすすめサービス">
               </div>
               <p class="btn_text">当社のおすすめサービスの<br>詳しい情報はこちらから</p>
            </a>
         </div>
    </section>

    <section class="solution__product">
         <div class="solution__product__inner">
            <div class="section_head">
               <h2>商品情報</h2>
               <p class="en_title">PRODUCT</p>
            </div>
            <div class="product__wrap">
               <div class="product__wrap--box">
                  <div class="img_text">
                     <div class="box__img">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/solution-product01.webp'); ?>" alt="EP-DAM system">
                     </div>
                     <div class="box__text">
                        <p class="title">EP-DAM system</p>
                        <p class="lead">デジタル資産の一元管理と制作フローのデジタル化で業務効率向上やコスト削減、ブランディング強化を実現します。</p>
                     </div>
                  </div>
                  <a href="/ep-dam/" target="_blank" class="common_btn">詳しく見る</a>
               </div>
               <div class="product__wrap--box">
                  <div class="img_text">
                     <div class="box__img">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/solution-product02.webp'); ?>" alt="デルフィーノコーティング">
                     </div>
                     <div class="box__text">
                        <p class="title">デルフィーノコーティング</p>
                        <p class="lead">オフィスまるごと感染症対策。警察、消防、救急隊員が選んだプロが認める抗菌・抗ウイルス剤です。</p>
                     </div>
                  </div>
                  <a href="/delfino/" target="_blank" class="common_btn">詳しく見る</a>
               </div>
               <div class="product__wrap--box">
                  <div class="img_text">
                     <div class="box__img">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/solution-product03.webp'); ?>" alt="社会人常識マナーeラーニング講座">
                     </div>
                     <div class="box__text">
                        <p class="title">社会人常識マナーeラーニング講座</p>
                        <p class="lead">公益社団法人 全国経理教育協会 ZENKEI「社会人常識マナー検定」全面監修のeラーニング講座です。</p>
                     </div>
                  </div>
                  <a href="/manners/" target="_blank" class="common_btn">詳しく見る</a>
               </div>
               <div class="product__wrap--box">
                  <div class="img_text">
                     <div class="box__img">
                        <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/solution/solution-product04.webp'); ?>" alt="社会人常識マナー検定テキスト">
                     </div>
                     <div class="box__text">
                        <p class="title">社会人常識マナー検定テキスト</p>
                        <p class="lead">全経公式テキスト『社会人常識マナー検定テキスト』のご紹介です。</p>
                     </div>
                  </div>
                  <a href="/books/" target="_blank" class="common_btn">詳しく見る</a>
               </div>
            </div>


         </div>
    </section>

    <section class="solution__solution">
         <div class="solution__solution__inner">
            <div class="section_head">
               <h2>課題解決事例</h2>
               <p class="en_title">SOLUTION CASE</p>
            </div>

            <div class="solution_wrap">
               <div class="article">
                  <?php
                     $args = array(
                        'post_type'=>'success',
                        'posts_per_page'=> 3,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'paged' => $paged,
                     );
                     $wp_query = new WP_Query( $args );
                     if ( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                  ?>
                  <a href="<?php the_permalink(); ?>" class="post_box">
                     <div class="thumb">
                        <?php the_post_thumbnail('full'); ?>
                     </div>
                     <div class="textarea">
                        <p class="title">
                           <?php if ($cf_success_thumbtext = get_field('cf_success_thumbtext')): ?>
                           <?php echo nl2br(esc_html($cf_success_thumbtext)); ?>
                           <?php else: ?>
                           <?php the_title(); ?>
                           <?php endif; ?>
                        </p>
                        <div class="category_name">
                           <?php
                              $terms = get_the_terms($post_id,"success_category");
                              foreach ($terms as $term) {
                              $slug = $term->slug;
                              $name = $term->name;
                              echo '<span class="cat '.$slug.'">'.$name.'</span>';
                              }
                           ?>
                        </div>
                     </div>
                  </a>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php endif;?>
                  <?php wp_reset_query(); ?>
               </div>
            </div>

            <a href="<?php echo home_url('success/'); ?>" class="common_btn">もっと見る</a>
         </div>
    </section>

    <section class="solution__customer">
         <div class="solution__customer__inner">
            <div class="section_head">
               <h2>お客様事例</h2>
               <p class="en_title">CUSTOMER CASE</p>
            </div>

            <div class="customer_wrap">
               <div class="article">
                  <?php
                     $args = array(
                        'post_type'=>'client',
                        'posts_per_page'=> 3,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'paged' => $paged,
                     );
                     $wp_query = new WP_Query( $args );
                     if ( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                  ?>
                  <a href="<?php the_permalink(); ?>" class="post_box">
                     <div class="thumb">
                        <?php the_post_thumbnail('full'); ?>
                     </div>
                     <div class="textarea">
                        <p class="title">
                           <?php the_title(); ?>
                        </p>
                        <p class="name"><?php echo get_post_meta(get_the_ID(), 'cf_customer_name', true) ;?></p>
                        <p class="job"><?php echo get_post_meta(get_the_ID(), 'cf_customer_job', true) ;?></p>
                        <p class="scale"><?php echo get_post_meta(get_the_ID(), 'cf_customer_scale', true) ;?></p>
                     </div>
                  </a>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php endif;?>
                  <?php wp_reset_query(); ?>
               </div>
            </div>

            <a href="<?php echo home_url('client/'); ?>" class="common_btn">もっと見る</a>
         </div>
    </section>

    <section class="solution__column">
         <div class="solution__column__inner">
            <div class="section_head">
               <h2>コラム</h2>
               <p class="en_title">COLUMN</p>
            </div>

            <div class="column_wrap">
               <div class="article">
                  <?php
                     $args = array(
                        'post_type'=>'column',
                        'posts_per_page'=> 3,
                        'order' => 'ASC',
                        'orderby' => 'date',
                        'paged' => $paged,
                     );
                     $wp_query = new WP_Query( $args );
                     if ( $wp_query->have_posts() ) :
                        while ( $wp_query->have_posts() ) : $wp_query->the_post();
                  ?>
                  <a href="<?php the_permalink(); ?>" class="post_box">
                     <div class="thumb">
                        <?php the_post_thumbnail('full'); ?>
                     </div>
                     <div class="textarea">
                        <div class="category_name">
                           <?php
                              $terms = get_the_terms($post_id,"column_category");
                              foreach ($terms as $term) {
                              $slug = $term->slug;
                              $name = $term->name;
                              echo '<span class="cat '.$slug.'">'.$name.'</span>';
                              }
                           ?>
                        </div>
                        <p class="title">
                           <?php the_title(); ?>
                        </p>
                        <p class="date">
                           <?php the_time('Y.m.d'); ?>
                        </p>
                     </div>
                  </a>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php endif;?>
                  <?php wp_reset_query(); ?>
               </div>
            </div>

            <a href="<?php echo home_url('column/'); ?>" class="common_btn">もっと見る</a>
         </div>
    </section>

    <?php get_footer(); ?>
