<?php

/**
 * Template Name: EDUPRESS LP TEMPLATE
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header('contents');

$container = get_theme_mod('understrap_container_type');

?>

<div class="wrapper p-main" id="page-wrapper">

  <div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

    <div class="row">

      <!-- Do the left sidebar check -->
      <?php get_template_part('global-templates/left-sidebar-check'); ?>

      <main class="site-main" id="main">

        <?php while (have_posts()) : the_post(); ?>

          <?php // get_template_part( 'loop-templates/content', 'page' ); 
          ?>

          <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <header class="entry-header">

              <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

            </header><!-- .entry-header -->

            <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

            <?php
            global $template;
            $temp_name = basename($template, '.php');
            ?>
            <div class="entry-content <?= $temp_name; ?>">

              <div class="l-contents">
                <main class="l-contents__inr" role="main">
                  <div class="p-main">
                    <section class="lp-section">
                      <div class="lp-section__inr">

                        <?php the_content(); ?>

                        <?php
                        // wp_link_pages(
                        //   array(
                        //     'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
                        //     'after'  => '</div>',
                        //   )
                        // );
                        ?>

                      </div><!-- inr -->
                    </section><!-- c-section -->
                  </div><!-- p-main -->
                </main><!-- l-contents__inr -->
              </div><!-- l-contents -->

            </div><!-- .entry-content -->

            <!--<footer class="entry-footer">

              <?php // edit_post_link(__('Edit', 'understrap'), '<span class="edit-link">', '</span>'); ?>

            </footer>--><!-- .entry-footer -->

          </article><!-- #post-## -->

          <?php
          // If comments are open or we have at least one comment, load up the comment template.
          // if ( comments_open() || get_comments_number() ) :
          // 	comments_template();
          // endif;
          ?>

        <?php endwhile; // end of the loop.
        ?>

      </main><!-- #main -->

      <!-- Do the right sidebar check -->
      <?php get_template_part('global-templates/right-sidebar-check'); ?>

    </div><!-- .row -->

  </div><!-- #content -->

</div><!-- #page-wrapper -->

<?php get_footer('contents'); ?>