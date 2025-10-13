<?php get_header(); ?>

<div id="contents">
  <div class="underlayer_mv">
    <h1>コラム</h1>
  </div>
  <div class="bread">
    <!--<?php breadcrumb(); ?>-->
	      <ol class="flx" itemprop="Breadcrumb" itemscope="" itemtype="http://data-vocabulary.org/BreadcrumbList"><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.edupress.co.jp/" class="home"><span itemprop="name">HOME</span></a><meta itemprop="position" content="1"></li><li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">コラム</span><meta itemprop="position" content="2"></li></ol>
  </div>
  <div class="category__wrap">
    <p class="category__wrap--title">カテゴリで絞り込む</p>
    <ul class="category__wrap--list">
        <li><a href="<?php echo home_url('column/'); ?>" class="current">すべて</a></li>
        <?php
            $terms = get_terms('column_category');
            foreach( $terms as $term ):
            $name = $term->name;
            $slug = $term->slug;
            $term_link = get_term_link($term);
            if ( is_wp_error( $term_link ) ) {
            continue;
            }
            echo '<li><a class="" href="'.esc_url($term_link).'">'.$name.'</a></li>';
            endforeach;
        ?>
    </ul>
  </div>

  <section class="column__area">
    <div class="column__area--inner">
      <div class="column_wrap">
          <div class="article">
            <?php
                $args = array(
                  'post_type'=>'column',
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
                        $terms = get_the_terms($post_id,"column_category");
                        foreach ($terms as $term) {
                        $slug = $term->slug;
                        $name = $term->name;
                        echo '<span class="cat '.$slug.'">'.$name.'</span>';
                        }
                      ?>
                  </div>
                  <p class="title"><?php the_title(); ?></p>
                  <p class="date"><?php the_time('Y.m.d'); ?></p>
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
    </div>
  </section>
</div>



<?php get_footer(); ?>
