<?php
/*
Template Name: 動画視聴ページ
*/
?>

<!-- 動画視聴ページのテンプレート -->

<?php get_header(); ?>

<head>
    <link rel="stylesheet" href="/wp-content/themes/understrap-child/asset/css/sample/style.css">
</head>

<div id="contents" class="seminar__movie">
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>
</div>

<?php get_footer(); ?>
