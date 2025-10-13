<?php
/*
Template Name: お問い合わせ（完了画面）
*/
?>

<head>
  <link rel="stylesheet" href="/wp-content/themes/understrap-child/asset/css/thanks/style.css">
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
