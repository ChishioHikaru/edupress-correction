<?php
/*
Template Name: お問い合わせ（確認画面）
*/
?>

<head>
  <link rel="stylesheet" href="/wp-content/themes/understrap-child/asset/css/confirm/style.css">
</head>

<?php get_header(); ?>

<div id="contents">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>


