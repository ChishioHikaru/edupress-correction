<?php get_header(); ?>

<div id="contents">
  <div class="underlayer_mv">
    <h1>課題解決事例</h1>
  </div>
  <div class="bread">
    <!--<?php breadcrumb(); ?>-->
	      <ol class="flx" itemprop="Breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.edupress.co.jp/" class="home"><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">課題解決事例</span><meta itemprop="position" content="2"></li></ol>
  </div>

  <div class="category__wrap">
    <p class="category__wrap--title">目的で絞り込む</p>
    <ul class="category__wrap--list">
        <li><a href="<?php echo home_url('success/'); ?>">すべて</a></li>
        <?php
            $terms = get_terms($taxonomy);
            foreach( $terms as $term ):
                $name = $term->name;
                $slug = $term->slug;
                $term_object = get_queried_object();
                $cat_slug = $term_object->slug;
                $cat_name = $term_object->name;
                $term_link = get_term_link($term);
                if ( is_wp_error( $term_link ) ) {
                    continue;
                }
                if( $cat_slug == $slug ){
                    echo '<li class="current"><a class="current" href="'.esc_url($term_link).'">'.$name.'</a></li>';
                } else {
                    echo '<li><a class="" href="'.esc_url($term_link).'">'.$name.'</a></li>';
                }
            endforeach;
        ?>
    </ul>
  </div>

  <section class="success__area">
    <div class="success__area--inner">
      <div class="success_wrap">
        <div class="article">
            <?php
                $term_object = get_queried_object();
                if ($term_object instanceof WP_Term) {
                    $current_term_slug = $term_object->slug;
                    $args = array(
                        'post_type' => 'success',
                        'posts_per_page' => 15,
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'paged' => $paged,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'success_category',
                                'terms' => array($current_term_slug),
                                'field' => 'slug',
                                'operator' => 'IN',
                            ),
                        ),
                    );
                    $wp_query = new WP_Query($args);
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
            </div>
            <div class="navi">
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <?php else : ?>
            <?php endif;?>
            <?php wp_reset_query(); ?>
            <?php } ?>
        </div>
    </div>
  </section>
</div>



<?php get_footer(); ?>
