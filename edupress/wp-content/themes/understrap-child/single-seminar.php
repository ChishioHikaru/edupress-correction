<?php get_header(); ?>

<div id="contents">
    <div class="underlayer_mv">
        <p class="single_title">セミナー情報</p>
    </div>
    <div class="bread">
        <?php breadcrumb(); ?>
    </div>

    <div class="single__seminar">
        <div class="section_head">
            <div class="category_name">
                <?php
                $terms = get_the_terms($post->ID, "seminar_category");
                if ($terms) {
                    foreach ($terms as $term) {
                        $slug = $term->slug;
                        $name = $term->name;
                        $additional_class = '';
                        
                        // 特定のスラッグに対して追加のクラスを設定
                        if (in_array($slug, ['ondemand', 'live', 'online'])) {
                            $additional_class = ' ' . $slug;
                        }

                        echo '<span class="cat'.$additional_class.'">'.$name.'</span>';
                    }
                }
                ?>
            </div>
            <h1 class="title"><?php the_title(); ?></h1>

            <?php
                $cf_seminar_day = get_post_meta(get_the_ID(), 'cf_seminar_day', true);
            ?>
            <?php if (!empty($cf_seminar_day)): ?>
            <p class="date">開催日：<?php echo esc_html($cf_seminar_day); ?></p>
            <?php endif; ?>

            <div class="thumb">
                <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail( 'full' ); ?>
                <?php else : ?>
                <?php endif ; ?>
            </div>

            <?php
                $cf_seminar_lead = get_post_meta(get_the_ID(), 'cf_seminar_lead', true);
            ?>
            <?php if (!empty($cf_seminar_lead)): ?>
                <p class="seminar_lead"><?php echo nl2br($cf_seminar_lead); ?></p>
            <?php endif; ?>

            <?php
                // ACFフィールド 'cf_seminar_form' から値を取得
                $cf_seminar_form = get_field('cf_seminar_form');

                // フィールドの値が空でない場合にセクションを出力
                if (!empty($cf_seminar_form)) : ?>
                <a href="#form" class="anchor_link">お申し込みはこちらから</a>
            <?php endif; ?>
        </div>

        <?php 
        $seminar_content = get_field('cf_seminar_editor');
        // コンテンツが存在する場合にのみセクションを表示
        if( !empty($seminar_content) ): ?>
            <section class="single__seminar--info">
                <h3>セミナーのご案内</h3>
                <div class="section__box">
                    <div class="section__box--inner">
                        <div class="text__box">
                            <?php echo $seminar_content; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php 
        // ACF繰り返しフィールド 'cf_seminar_table' からのデータをチェック
        if( have_rows('cf_seminar_table') ): ?>
            <section class="single__seminar--requirements">
                <h3>実施要項</h3>
                <div class="section__box">
                    <div class="section__box--inner">
                        <div class="text__box">
                            <div class="text__box--table">
                                <table>
                                    <?php 
                                    // 繰り返しフィールドのループ開始
                                    while( have_rows('cf_seminar_table') ): the_row(); 
                                        // カスタムフィールド 'cf_seminar_th' と 'cf_seminar_td' の値を取得
                                        $seminar_th = get_sub_field('cf_seminar_th');
                                        $seminar_td = get_sub_field('cf_seminar_td');
                                    ?>
                                        <tr>
                                            <th><?php echo esc_html($seminar_th); ?></th>
                                            <td><?php echo nl2br($seminar_td); ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php
        // ACFフィールド 'cf_seminar_form' から値を取得
        $cf_seminar_form = get_field('cf_seminar_form');

        // フィールドの値が空でない場合にセクションを出力
        if (!empty($cf_seminar_form)) : ?>
            <section class="single__seminar--form" id="form">
                <?php
                    $terms = get_the_terms($post->ID, "seminar_category");
                    if ($terms) {
                        foreach ($terms as $term) {
                            $slug = $term->slug;
                            $name = $term->name;
                            $additional_class = '';
                            
                            // スラッグ名が 'live' または 'ondemand' の場合、特定のテキストを出力
                            if ($slug === 'live') {
                                echo '<p class="form_title">セミナーお申し込み</p>';
                            } elseif ($slug === 'ondemand') {
                                echo '<p class="form_title">動画視聴お申し込み</p>';
                            }
                        }
                    }
                ?>
                <div class="section__box form_box">
                    <div class="section__box--inner form_inner">
                        <div class="form__box">
                            <?php 
                            // ACFフィールドの値をショートコードとして実行
                            echo do_shortcode($cf_seminar_form); 
                            ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

    </div>

</div>
<?php get_footer(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // クリック指定の要素へスクロール
        var links = document.querySelectorAll('a[href^="#"]');
        links.forEach(function (link) {
            link.addEventListener("click", function (event) {
            var target = document.querySelector(this.getAttribute("href"));
            let speed = 1;
            if (target) {
                var scrollTop = window.pageYOffset + target.getBoundingClientRect().top - 100;
                window.scroll({ top: scrollTop, behavior: "smooth" });
                event.preventDefault();
            }
            });
        });

        var select = document.querySelectorAll('.wpcf7-select');
        select.forEach(function (element) {
            element.addEventListener('click', function() {
                element.style.color = '#333333';
            });
        });

        var selectElements = document.querySelectorAll('.wpcf7-select');
        selectElements.forEach(function(select) {
        var options = select.querySelectorAll('option');
        options.forEach(function(option) {
            if (option.value === '都道府県') {
            option.value = '';
            }
        });
        });

    });
</script>
