<?php get_header(); ?>

<div id="contents">
  <div class="underlayer_mv">
    <h1>セミナー情報</h1>
  </div>
  <div class="bread">
    <!--<?php breadcrumb(); ?>-->
	      <ol class="flx" itemprop="Breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.edupress.co.jp/" class="home"><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">セミナー情報</span><meta itemprop="position" content="2"></li></ol>
  </div>

  <section class="seminar__area">
    <p class="intro_text">エデュプレスでは、皆様の業務に役立つビジネスセミナーを開催・配信しています。<br>参加費は無料ですのでお気軽にお申し込みください。</p>
    <div class="seminar_wrap">
        <div class="article">
          <?php
              $args = array(
                'post_type'=>'seminar',
                'posts_per_page'=> 9,
                'order' => 'ASC',
                // 'orderby' => 'date',
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
                  <img src="<?php echo home_url('wp-content/themes/edupress/asset/img/common/thumbnail.png'); ?>"
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
                <p class="title"><?php the_title(); ?></p>
                <div class="textarea__content">
                  <?php
                    // カスタムフィールドの値を取得
                    $cf_seminar_day = get_post_meta(get_the_ID(), 'cf_seminar_day', true);
                    $cf_seminar_fee = get_post_meta(get_the_ID(), 'cf_seminar_fee', true);
                    $cf_seminar_place = get_post_meta(get_the_ID(), 'cf_seminar_place', true);
                    $cf_seminar_text = get_post_meta(get_the_ID(), 'cf_seminar_thumb_text', true);
                  ?>

                  <?php if (!empty($cf_seminar_day)): ?>
                    <div class="date">
                      <span class="content_title">開催日</span>
                      <span class="content_text"><?php echo esc_html($cf_seminar_day); ?></span>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($cf_seminar_fee)): ?>
                    <div class="fee">
                      <span class="content_title">参加費</span>
                      <span class="content_text"><?php echo esc_html($cf_seminar_fee); ?></span>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($cf_seminar_place)): ?>
                    <div class="place">
                      <span class="content_title">会場</span>
                      <span class="content_text"><?php echo esc_html($cf_seminar_place); ?></span>
                    </div>
                  <?php endif; ?>

                  <?php if (!empty($cf_seminar_text)): ?>
                    <p class="seminar_text"><?php echo esc_html($cf_seminar_text); ?></p>
                  <?php endif; ?>
                </div>
              </div>
          </a>
          <?php endwhile; ?>
        </div>
          <div class="navi">
              <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
          </div>
          <?php else : ?>
          <?php endif;?>
          <?php wp_reset_query(); ?>
    </div>
  </section>
</div>



<?php get_footer(); ?>
