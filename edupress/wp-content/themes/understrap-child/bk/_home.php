<?php get_header('edupress'); ?>

<div id="contents">

    <div class="first_view">
       <h1 aria-label="エデュプレス">
            <picture>
               <source srcset="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/top-mv-sp.webp'); ?>"
                     media="(max-width: 750px)" type="image/webp">
               <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/top-mv.webp'); ?>" alt="エデュプレス　歩みを止めない、その先へ。">
            </picture>
       </h1>
       <div class="scroll_down">
         <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/common/scroll-down.svg'); ?>" alt="">
       </div>
    </div>

    <section class="top__business">
         <div class="top__business__inner">
            <div class="section_head">
               <h2>エデュプレスの事業領域</h2>
               <p class="en_title">BUSINESS AREA</p>
               <h3>業績拡大・業務効率化のための<br class="pad">「情報発信、コミュニケーション促進」を<br class="pc">多彩なメニューを駆使し、<br class="pad">あらゆる角度からサポートします。</h3>
               <p class="lead">「お客様のため」を一番に考え、行動し、業績拡大や業務効率化に貢献すること。<br>その思いで、お客様のニーズを様々な手段・方法で実現しています。</p>
            </div>
            <div class="business__item">
               <div class="business__item--box first">
                  <div class="box_img">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/business01.webp'); ?>" alt="販促支援イメージ">
                  </div>
                  <div class="textarea">
                     <p class="title">【販促支援】</p>
                     <p class="detail">
                        情報を<span class="big">「<span class="blue">伝える</span>」「<span class="blue">広める</span>」<br class="sp">「<span class="blue">活用する</span>」</span>際に<br class="pc">より効果的な<br class="sp">手段・方法でサポート
                     </p>
                  </div>
               </div>
               <div class="business__item--box second">
                  <div class="box_img">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/business02.webp'); ?>" alt="業務支援イメージ">
                  </div>
                  <div class="textarea">
                     <p class="title">【業務支援】</p>
                     <p class="detail">
                        情報を<span class="big">「<span class="blue">処理する</span>」「<span class="blue">活用する</span>」「<span class="blue">管理する</span>」</span>際に<br class="pc">不足する<br class="sp">リソースを代替してサポート
                     </p>
                  </div>
               </div>
            </div>
            <a href="<?php echo home_url('business/'); ?>" class="common_btn">詳しく見る</a>
         </div>
    </section>

    <section class="top__service">
         <div class="top__service__inner">
            <div class="section_head">
               <h2>サービス・商品</h2>
               <p class="en_title">SERVICES/PRODUCTS</p>
               <p class="lead">エデュプレスの持つ様々な技術やノウハウで、<br class="pc">お客様の目標達成、ビジネスにおける課題解決をサポートします。</p>
            </div>
            <div class="business__item">
               <a href="<?php echo home_url('solution/creative/'); ?>" class="business__item--box">
                  <div class="box_img first">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/service01.webp'); ?>" alt="クリエイティブイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 creative 】</p>
                     <p class="ja_title">クリエイティブ</p>
                  </div>
               </a>
               <a href="<?php echo home_url('solution/promotion/'); ?>" class="business__item--box">
                  <div class="box_img second">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/service02.webp'); ?>" alt="プロモーションイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 promotion 】</p>
                     <p class="ja_title">プロモーション</p>
                  </div>
               </a>
               <a href="<?php echo home_url('solution/business-support/'); ?>" class="business__item--box">
                  <div class="box_img third">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/service03.webp'); ?>" alt="ビジネスサポートイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 business support 】</p>
                     <p class="ja_title">ビジネスサポート</p>
                  </div>
               </a>
               <a href="<?php echo home_url('solution/products/'); ?>" class="business__item--box">
                  <div class="box_img fourth">
                     <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/service04.webp'); ?>" alt="プロダクトイメージ">
                  </div>
                  <div class="textarea">
                     <p class="en_title">【 product 】</p>
                     <p class="ja_title">プロダクト</p>
                  </div>
               </a>
            </div>
            <a href="<?php echo home_url('solution/'); ?>" class="common_btn">詳しく見る</a>
         </div>
    </section>

    <section class="top__company">
         <div class="top__company__inner">
            <div class="section_head">
               <h2>会社案内</h2>
               <p class="en_title">COMPANY PROFILE</p>
               <h3>エデュプレスは、<br class="sp">Ｚ会グループの企業です。</h3>
               <div class="section_head--img">
                  <img src="<?php echo home_url('wp-content/themes/understrap-child/asset/img/top/company.webp'); ?>" alt="企業イメージ">
               </div>
               <p class="lead">総合教育グループ「Ｚ会グループ」の企業である当社。あらゆる業界を問わずお客様のビジネスパートナーとして、皆様の「思い」を最適な形で届けるお手伝いをしています。</p>
            </div>
            <a href="<?php echo home_url('about/'); ?>" class="common_btn">詳しく見る</a>
         </div>
    </section>

    <section class="top__solution">
         <div class="top__solution__inner">
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
                           <?php if(has_post_thumbnail()): ?>
                           <?php the_post_thumbnail( 'full' ); ?>
                           <?php else : ?>
                           <img src="wp-content/themes/understrap-child/asset/img/common/thumbnail-default.webp"
                              alt="<?php the_title(); ?>">
                           <?php endif ; ?>
                     </div>
                     <div class="textarea">
                        <p class="title">
                           <?php the_title(); ?>
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

    <section class="top__customer">
         <div class="top__customer__inner">
            <div class="section_head">
               <h2>お客様事例</h2>
               <p class="en_title">CUSTOMER CASE</p>
            </div>

            <div class="customer_wrap">
               <div class="article">
                  <?php
                     $args = array(
                        'post_type'=>'customer',
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
                           <?php if(has_post_thumbnail()): ?>
                           <?php the_post_thumbnail( 'full' ); ?>
                           <?php else : ?>
                           <img src="wp-content/themes/understrap-child/asset/img/common/thumbnail-default.webp"
                              alt="<?php the_title(); ?>">
                           <?php endif ; ?>
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

    <section class="top__column">
         <div class="top__column__inner">
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
                           <?php if(has_post_thumbnail()): ?>
                           <?php the_post_thumbnail( 'full' ); ?>
                           <?php else : ?>
                           <img src="wp-content/themes/understrap-child/asset/img/common/thumbnail-default.webp"
                              alt="<?php the_title(); ?>">
                           <?php endif ; ?>
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

    <section class="top__seminar">
         <div class="top__seminar__inner">
            <div class="section_head">
               <h2>セミナー開催情報</h2>
               <p class="en_title">SEMINAR</p>
            </div>

            <div class="seminar_wrap">
               <div class="article">
                  <?php
                     $args = array(
                        'post_type'=>'seminar',
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
                           <?php if(has_post_thumbnail()): ?>
                           <?php the_post_thumbnail( 'full' ); ?>
                           <?php else : ?>
                           <img src="wp-content/themes/understrap-child/asset/img/common/thumbnail-default.webp"
                              alt="<?php the_title(); ?>">
                           <?php endif ; ?>
                     </div>
                     <div class="textarea">
                        <div class="category_name">
                           <?php
                           $terms = get_the_terms($post->ID, "seminar_category");
                           if ($terms) {
                                 foreach ($terms as $term) {
                                    $slug = $term->slug;
                                    $name = $term->name;
                                    $additional_class = '';
                                    
                                    // 特定のスラッグに対して追加のクラスを設定
                                    if (in_array($slug, ['ondemand', 'live', 'online'])) {
                                       $additional_class = ' ' . $slug;
                                    }

                                    echo '<span class="cat'.$additional_class.'">'.$name.'</span>';
                                 }
                           }
                           ?>
                        </div>
                        <p class="date">
                           <?php the_time('Y年m月d日（D）'); ?>
                        </p>
                        <p class="title">
                           <?php the_title(); ?>
                        </p>
                     </div>
                  </a>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <?php endif;?>
                  <?php wp_reset_query(); ?>
               </div>
            </div>

            <a href="<?php echo home_url('seminar/'); ?>" class="common_btn">もっと見る</a>
         </div>
    </section>

    <section class="top__information">
         <div class="top__information__inner">
            <div class="left_box">
               <div class="section_head">
                  <h2>お知らせ</h2>
                  <p class="en_title">INFORMATION</p>
               </div>
               <a href="<?php echo home_url('news/'); ?>" class="common_btn pc">お知らせ一覧をみる</a>
            </div>
            <div class="right_box">
               <div class="news_wrap">
                  <div class="article">
                     <?php
                        $args = array(
                           'post_type'=>'news',
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
                        <div class="textarea">
                           <p class="date">
                              <?php the_time('Y.m.d'); ?>
                           </p>
                           <p class="title">
                              <?php the_title(); ?>
                           </p>
                        </div>
                     </a>
                     <?php endwhile; ?>
                     <?php else : ?>
                     <?php endif;?>
                     <?php wp_reset_query(); ?>
                  </div>
               </div>
            </div>
            <a href="<?php echo home_url('news/'); ?>" class="common_btn sp">お知らせ一覧をみる</a>
         </div>
    </section>

    <?php get_footer('edupress'); ?>
