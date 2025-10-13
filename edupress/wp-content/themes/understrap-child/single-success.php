<?php get_header(); ?>

<div id="contents">
    <div class="underlayer_mv">
        <p class="single_title">課題解決事例</p>
    </div>
    <div class="bread">
        <?php breadcrumb(); ?>
    </div>

    <div class="single__success">
        <div class="single__success--detail single__column--detail">
            <div class="detail_head">
                <h1 class="title">
                    <?php the_title(); ?>
                </h1>
                <div class="text__wrap">
                    <?php
                        $type = get_field('cf_success_type');
                        $service = get_field('cf_success_service');
                        $support = get_field('cf_success_support');
                    ?>
                    <?php if (!empty($type)): ?>
                        <p class="text__wrap--type"><?php echo esc_html($type); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($service)): ?>
                        <p class="text__wrap--service">目的：<?php echo esc_html($service); ?></p>
                    <?php endif; ?>
                    <?php if (!empty($support)): ?>
                        <p class="text__wrap--support">対応内容：<?php echo esc_html($support); ?></p>
                    <?php endif; ?>
                </div>
                <div class="thumb">
                  <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail( 'full' ); ?>
                  <?php else : ?>
                  <?php endif ; ?>
                </div>
                <?php
                    $cf_success_lead = get_field('cf_success_lead');
                ?>
                <?php if (!empty($cf_success_lead)): ?>
                    <p class="lead_text"><?php echo nl2br($cf_success_lead); ?></p>
                <?php endif; ?>
            </div>
			
<?php if (have_rows('cf_client_editor03')) : ?>
  <!-- 目次 -->
  <div class="index__wrap">
    <p class="index__wrap--title">目次</p>
    <?php $list_started = false; // リストが開始されているかどうかのフラグ 
    ?>
    <?php while (have_rows('cf_client_editor03')) : the_row(); ?>
      <?php if (get_row_layout() == 'index_section') : ?>
        <?php if (!$list_started) : // リストがまだ開始されていない場合、番号付きリストを開始する 
        ?>
          <ol class="main">
            <?php $list_started = true; ?>
          <?php endif; ?>
          <li><?php echo get_sub_field('index_number') . '. ' . get_sub_field('index_title');  ?>
            <?php if (have_rows('sub_index')) : ?>
              <ol class="sub">
                <?php while (have_rows('sub_index')) : the_row(); ?>
                  <li><?php echo get_sub_field('sub_number') . '. ' . get_sub_field('index_text');  ?></li>
                <?php endwhile; ?>
              </ol>
            <?php endif; ?>
          </li>
        <?php elseif (get_row_layout() == 'list_section') : ?>
          <?php if ($list_started) : // 既に番号付きリストが開始されている場合、それを閉じる 
          ?>
          </ol>
          <?php $list_started = false; ?>
        <?php endif; ?>
        <ul>
          <?php while (have_rows('list_type')) : the_row(); ?>
            <li><?php the_sub_field('list_text'); ?></li>
          <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    <?php endwhile; ?>
    <?php if ($list_started) : ?>
      </ol>
    <?php endif; ?>
  </div>
<?php endif; ?>

<div class="editor__block">
  <?php if (have_rows('cf_client_editor01')) : ?>
    <?php while (have_rows('cf_client_editor01')) : the_row(); ?>

      <!-- 見出し -->
      <?php if (get_row_layout() == 'h2_heading') : ?>
        <h2><?php the_sub_field('h2_heading_text'); ?></h2>
      <?php elseif (get_row_layout() == 'h3_heading') : ?>
        <h3><?php the_sub_field('h3_heading_text'); ?></h3>
      <?php elseif (get_row_layout() == 'h4_heading') : ?>
        <h4><?php the_sub_field('h4_heading_text'); ?></h4>
      <?php elseif (get_row_layout() == 'h5_heading') : ?>
        <h5><?php the_sub_field('h5_heading_text'); ?></h5>
      <?php elseif (get_row_layout() == 'h6_heading') : ?>
        <h6><?php the_sub_field('h6_heading_text'); ?></h6>

        <!-- 本文 -->
      <?php elseif (get_row_layout() == 'lead_section') : ?>
        <p class="lead"><?php the_sub_field('lead_text'); ?></p>

        <!-- 中央寄せテキスト -->
      <?php elseif (get_row_layout() == 'center_section') : ?>
        <p class="center_text"><?php the_sub_field('center_text'); ?></p>

        <!-- 太字テキスト -->
      <?php elseif (get_row_layout() == 'bold_section') : ?>
        <p class="bold_text"><?php the_sub_field('bold_text'); ?></p>

        <!-- 強調テキスト -->
      <?php elseif (get_row_layout() == 'strong_section') : ?>
        <p class="strong_text"><?php the_sub_field('strong_text'); ?></p>

        <!-- 文中リンクテキスト -->
      <?php elseif (get_row_layout() == 'text_in_section') : ?>
        <?php
        $content = get_sub_field('text_in_link');
        $content = preg_replace('/<a\s+/', '<a class="text_in_link" ', $content);
        $content_with_class = preg_replace('/<p>/', '<p class="lead">', $content);
        echo $content_with_class;
        ?>

        <!-- リンクテキスト -->
      <?php elseif (get_row_layout() == 'link_section') :  ?>
        <?php
        $link = get_sub_field('link_text');
        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <div><a class="link_text" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
              <?php echo esc_html($link_title); ?></a></div>
        <?php endif; ?>

        <!-- 外部リンク -->
      <?php elseif (get_row_layout() == 'external_section') :  ?>
        <?php
        $link = get_sub_field('external_link');
        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <div><a class="external" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
              <?php echo esc_html($link_title); ?></a></div>
        <?php endif; ?>

        <!-- 数字リスト -->
      <?php elseif (get_row_layout() == 'number_section') : ?>
        <ol>
          <?php if (have_rows('number_list_field')) : ?>
            <?php while (have_rows('number_list_field')) : the_row(); ?>
              <li><?php the_sub_field('number_list'); ?></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ol>

        <!-- 箇条書きリスト -->
      <?php elseif (get_row_layout() == 'unorder_section') : ?>
        <ul>
          <?php if (have_rows('unorder_list_field')) : ?>
            <?php while (have_rows('unorder_list_field')) : the_row(); ?>
              <li><?php the_sub_field('unorder_list'); ?></li>
            <?php endwhile; ?>
          <?php endif; ?>
        </ul>

        <!-- 画像 -->
      <?php elseif (get_row_layout() == 'detail_img_section') : ?>
        <?php
        $image_url = get_sub_field('detail_img');
        if (!empty($image_url)) : ?>
          <div class="detail_img">
            <img src="<?php echo esc_url($image_url); ?>" />
          </div>
        <?php endif; ?>

        <!-- テーブル -->
      <?php elseif (get_row_layout() == 'table_section') : ?>
        <?php the_sub_field('table_content'); ?>

        <!-- 画像説明テキスト -->
      <?php elseif (get_row_layout() == 'img_text_section') : ?>
        <p class="img_text"><?php the_sub_field('img_text'); ?></p>

        <!-- ボックステキストエリア -->
      <?php elseif (get_row_layout() == 'box_text_section') : ?>
        <div class="box__textarea">
          <p class="box__textarea--title"><?php the_sub_field('box_text_title'); ?></p>
          <p class="box__textarea--text"><?php the_sub_field('box_text_text'); ?></p>
        </div>

        <!-- 画像左テキスト右 -->
      <?php elseif (get_row_layout() == 'imgLeft_textRight_section') : ?>
        <div class="imgLeft_textRight">
          <?php
          $image_url = get_sub_field('imgLeft_content');
          if (!empty($image_url)) : ?>
            <div class="img_block">
              <img src="<?php echo esc_url($image_url); ?>" />
            </div>
			     <?php endif; ?>
            <div class="text_block">
              <h3><?php the_sub_field('textRight_title'); ?></h3>
              <p class="text"><?php the_sub_field('textRight_text'); ?></p>
            </div>
        </div>

      <!-- 画像右テキスト左 -->
    <?php elseif (get_row_layout() == 'imgRight_textLeft_section') : ?>
      <div class="imgRight_textLeft">
        <div class="text_block">
          <h3><?php the_sub_field('textLeft_title'); ?></h3>
          <p class="text"><?php the_sub_field('textLeft_text'); ?></p>
        </div>
        <?php
        $image_url = get_sub_field('imgRight_content');
        if (!empty($image_url)) : ?>
          <div class="img_block">
            <img src="<?php echo esc_url($image_url); ?>" />
          </div>
			<?php endif; ?>
      </div>

    <!-- 画像2枚並び -->
  <?php elseif (get_row_layout() == 'img_wrap_section') : ?>
    <div class="img_wrap">
      <?php
        $image_url01 = get_sub_field('img_wrap_content01');
        $image_url02 = get_sub_field('img_wrap_content02');
        if (!empty($image_url01)) : ?>
        <div class="img_block">
          <img src="<?php echo esc_url($image_url01); ?>" />
        </div>
      <?php endif; ?>
      <?php if (!empty($image_url02)) : ?>
        <div class="img_block">
          <img src="<?php echo esc_url($image_url02); ?>" />
        </div>
      <?php endif; ?>
    </div>


  <?php elseif (get_row_layout() == 'cf_success_section01') : ?>
    <div class="item__wrap--block">
      <div class="block_head">
        <p class="block_head_title">お客様のお悩み</p>
      </div>
      <p class="field_text"><?php the_sub_field('cf_success_item01') ?></p>
    </div>


  <?php elseif (get_row_layout() == 'cf_success_section02') : ?>
    <div class="item__wrap--block">
      <div class="block_head">
        <p class="block_head_title">エデュプレスの解決法</p>
      </div>
      <p class="field_text"><?php the_sub_field('cf_success_item02') ?></p>
    </div>


  <?php elseif (get_row_layout() == 'cf_success_section03') : ?>
    <div class="item__wrap--block">
      <div class="block_head">
        <p class="block_head_title">お客様からのお声</p>
      </div>
      <p class="field_text"><?php the_sub_field('cf_success_item03') ?></p>
    </div>

  <?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
</div>


          
            <!-- 前後の記事へのリンク -->
            <div class="prev_next_link">
                <div class="prev_link">
                    <?php previous_post_link('%link', '前の事例へ'); ?>
                </div>
                <a href="<?php echo home_url('success/'); ?>" class="back">事例一覧</a>
                <div class="next_link">
                    <?php next_post_link('%link', '次の事例へ'); ?>
                </div>
            </div>
        </div>
        <!-- サイドバー -->
        <div class="single__success--sidebar">
            <div class="pickup">
                <p class="pickup__title">その他の事例</p>
                <div class="pickup__wrap">
                    <?php
                        $id = get_the_ID();
                        $tax = 'success_category';
                        $args = array(
                            'post_type' => 'success',
                            'posts_per_page' => 5,
                            'order' => 'DESC',
                            'post__not_in' => array($id),
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'pickup_category',
                                    'field'    => 'slug',
                                    'terms'    => 'pickup',
                                ),
                            )
                        );
                        $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : ?>
                    <?php $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="success_box">
                        <div class="thumb">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                        <div class="textarea">
                            <p class="success_title">
                                <?php if ($cf_success_thumbtext = get_field('cf_success_thumbtext')): ?>
                                <?php echo nl2br(esc_html($cf_success_thumbtext)); ?>
                                <?php else: ?>
                                <?php the_title(); ?>
                                <?php endif; ?>
                            </p>
                        </div>
                    </a>
                    <?php endwhile; ?>
                    <?php else : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
            
    </div>

</div>
<?php get_footer(); ?>

