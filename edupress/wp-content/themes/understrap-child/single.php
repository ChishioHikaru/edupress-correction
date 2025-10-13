<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('contents');
$container = get_theme_mod( 'understrap_container_type' );
?>
<style>

h1.entry-title {
	max-width: 980px;
	margin-top: 40px;
	margin-left: auto;
	margin-right: auto;
	font-weight: bold;
	line-height: 27px;
	position: relative;
	font-size: 20px;
	letter-spacing: 2px;
	padding: 10px 7px 10px 10px;
	border-left: 7px solid #10a2c1;
	border-top:2px solid #009cbd;
	border-bottom:2px solid #009cbd;
	border-right:2px solid #009cbd;
}
h2{	max-width: 980px;
	margin-left: auto;
	margin-right: auto;
	font-weight: bold;
	line-height: 27px;
	position: relative;
	font-size: 20px;
	letter-spacing: 2px;
	padding: 10px 7px 10px 10px;
	border-left: 7px solid #10a2c1;
	color:#000;
}
h3 {
	max-width: 980px;
	margin-left: auto;
	margin-right: auto;
	font-weight: bold;
	background-color: #10a2c1;
	padding: 10px;
}
h4 {
	max-width: 980px;
	margin-left: auto;
	margin-right: auto;
	font-weight: bold;
	background-color: #cfeefc;
	padding: 10px;
	border:1px solid #009cbd;
	color:#009cbd;
}
	
div .entry-content {margin-top: 50px;max-width: 980px;margin-left: auto;margin-right: auto;}

.original-button {
  display: flex;  align-items: center;
  justify-content: center;
  line-height: 1;
  text-decoration: none;
  color: #ffffff;
  font-size: 18px;
  border-radius: 2px;
  width: 400px;
  height: 60px;
  font-weight: bold;
  transition: 0.3s;
  background-image: radial-gradient(circle at 100% 0%, rgba(6, 69, 196, 1), rgba(0, 155, 189, 1));
}
.original-button:hover {
  opacity: .5;
  text-decoration: none;
  color: #def6fb;
}

</style>
<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>

					<?php understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer('contents'); ?>
