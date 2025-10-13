<?php get_header(); ?>

<div id="contents">
  <div class="underlayer_mv">
    <h1>お知らせ</h1>
  </div>
  <div class="bread">
    <!--<?php breadcrumb(); ?>-->
	      <ol class="flx" itemprop="Breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.edupress.co.jp/" class="home"><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">お知らせ</span><meta itemprop="position" content="2"></li></ol>
  </div>

  <section class="news__area">
    <div class="news_wrap">
        <div class="article">
            <?php
            $args = array(
                'post_type'=>'news',
                'posts_per_page'=> 15,
                'order' => 'DESC',
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
            <div class="navi">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <?php else : ?>
            <?php endif;?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
  </section>
</div>



<?php get_footer(); ?>
