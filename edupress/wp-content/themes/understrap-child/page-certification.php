<?php
/*
Template Name: 第三者認証・社会的取り組み
*/
?>

<?php get_header(); ?>

<?php
if (have_posts()) :
  while (have_posts()) : the_post();
    the_content();
  endwhile;
endif;
?>

<?php get_footer(); ?>


<script>
  //PCメニューとSPアコーディオンの切り替え
  $(document).ready(function() {
    $('.accordion-heading').click(function() {
      $('.about__page-links').toggle();
    });

    $(window).resize(function() {
      if ($(window).width() > 750) {
        $('.about__page-links').show();
      } else {
        $('.about__page-links').hide();
      }
    });
  });
</script>
