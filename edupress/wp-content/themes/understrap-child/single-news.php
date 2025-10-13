<?php get_header(); ?>

<div id="contents">
    <div class="underlayer_mv">
        <p class="single_title">お知らせ</p>
    </div>
    <div class="bread">
        <?php breadcrumb(); ?>
    </div>

    <div class="single__news">
        <div class="single__news__detail">
            <div class="detail_head">
                <p class="date">
                    <?php the_time('Y.m.d'); ?>
                </p>
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
            </div>
            <div class="news_content">
                <?php the_content(); ?>
            </div>
            <a href="<?php echo home_url('news/'); ?>" class="common_btn">一覧へ戻る</a>
        </div>
    </div>

</div>
<?php get_footer(); ?>

