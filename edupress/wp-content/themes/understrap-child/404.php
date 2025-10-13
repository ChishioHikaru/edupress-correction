<?php
header("Location: /");
exit;
?>

<?php get_header(); ?>
<style>
#contents {
    display: flex;
    flex-direction: column;
    justify-content: center;
    height: 30vh;
}

.text {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.5;
    text-align: center;

    @media(max-width: 767px) {
        font-size: 2rem;
    }
}
</style>

<div id="contents">
    <p class="text">ページが見つかりませんでした。</p>
</div>

<?php
get_footer();
