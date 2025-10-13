<?php
$sbs_cnt = 0;

$lp_sbs1_title = block_value('lp_sbs1_title');
$lp_sbs1_text = block_value('lp_sbs1_text');
$lp_sbs1_youtube = block_value('lp_sbs1_youtube');
$lp_sbs1_image = block_value('lp_sbs1_image');
if ($lp_sbs1_title || $lp_sbs1_text || $lp_sbs1_youtube || $lp_sbs1_image) $sbs_cnt++;

$lp_sbs2_title = block_value('lp_sbs2_title');
$lp_sbs2_text = block_value('lp_sbs2_text');
$lp_sbs2_youtube = block_value('lp_sbs2_youtube');
$lp_sbs2_image = block_value('lp_sbs2_image');
if ($lp_sbs2_title || $lp_sbs2_text || $lp_sbs2_youtube || $lp_sbs2_image) $sbs_cnt++;

$lp_sbs3_title = block_value('lp_sbs3_title');
$lp_sbs3_text = block_value('lp_sbs3_text');
$lp_sbs3_youtube = block_value('lp_sbs3_youtube');
$lp_sbs3_image = block_value('lp_sbs3_image');
if ($lp_sbs3_title || $lp_sbs3_text || $lp_sbs3_youtube || $lp_sbs3_image) $sbs_cnt++;

// 横 2パーツ or 3パーツ のみ
if ($sbs_cnt > 1) :
?>
  <div class="c-grid lp-sidebyside" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <table class="pc item<?= $sbs_cnt; ?>">
      <thead>
        <tr>
          <th><?php if ($lp_sbs1_title) echo wp_get_attachment_image($lp_sbs1_title, 'full'); ?></th>
          <th><?php if ($lp_sbs2_title) echo wp_get_attachment_image($lp_sbs2_title, 'full'); ?></th>
          <th><?php if ($lp_sbs3_title) echo wp_get_attachment_image($lp_sbs3_title, 'full'); ?></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="u-fz-14"><?php if ($lp_sbs1_text) echo $lp_sbs1_text; ?></td>
          <td class="u-fz-14"><?php if ($lp_sbs2_text) echo $lp_sbs2_text; ?></td>
          <td class="u-fz-14"><?php if ($lp_sbs3_text) echo $lp_sbs3_text; ?></td>
        </tr>
        <tr>
          <td>
            <?php if ($lp_sbs1_youtube) : ?>
              <iframe src="https://www.youtube.com/embed/<?= $lp_sbs1_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
            elseif ($lp_sbs1_image) :
              echo wp_get_attachment_image($lp_sbs1_image, 'full');
            endif;
            ?>
          </td>
          <td>
            <?php if ($lp_sbs2_youtube) : ?>
              <iframe src="https://www.youtube.com/embed/<?= $lp_sbs2_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
            elseif ($lp_sbs2_image) :
              echo wp_get_attachment_image($lp_sbs2_image, 'full');
            endif;
            ?>
          </td>
          <td>
            <?php if ($lp_sbs3_youtube) : ?>
              <iframe src="https://www.youtube.com/embed/<?= $lp_sbs3_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            <?php
            elseif ($lp_sbs3_image) :
              echo wp_get_attachment_image($lp_sbs3_image, 'full');
            endif;
            ?>
          </td>
        </tr>
      </tbody>
    </table>
    <ul class="sp">
      <li>
        <dl>
          <?php if ($lp_sbs1_title) echo '<dt>' . wp_get_attachment_image($lp_sbs1_title, 'full') . '</dt>'; ?>
          <dd>
            <?php if ($lp_sbs1_text) : ?>
              <div class="text u-fz-14"><?= $lp_sbs1_text; ?></div>
            <?php endif; ?>
            <?php if ($lp_sbs1_youtube) : ?>
              <div class="img"><iframe src="https://www.youtube.com/embed/<?= $lp_sbs1_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
            <?php
            elseif ($lp_sbs1_image) :
              echo '<div class="img">' . wp_get_attachment_image($lp_sbs1_image, 'full') . '</div>';
            endif;
            ?>
          </dd>
        </dl>
      </li>
      <li>
        <dl>
          <?php if ($lp_sbs2_title) echo '<dt>' . wp_get_attachment_image($lp_sbs2_title, 'full') . '</dt>'; ?>
          <dd>
            <?php if ($lp_sbs2_text) : ?>
              <div class="text u-fz-14"><?= $lp_sbs2_text; ?></div>
            <?php endif; ?>
            <?php if ($lp_sbs2_youtube) : ?>
              <div class="img"><iframe src="https://www.youtube.com/embed/<?= $lp_sbs2_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
            <?php
            elseif ($lp_sbs2_image) :
              echo '<div class="img">' . wp_get_attachment_image($lp_sbs2_image, 'full') . '</div>';
            endif;
            ?>
          </dd>
        </dl>
      </li>
      <?php if ($sbs_cnt == 3) : ?>
        <li>
          <dl>
            <?php if ($lp_sbs3_title) echo '<dt>' . wp_get_attachment_image($lp_sbs3_title, 'full') . '</dt>'; ?>
            <dd>
              <?php if ($lp_sbs3_text) : ?>
                <div class="text u-fz-14"><?= $lp_sbs3_text; ?></div>
              <?php endif; ?>
              <?php if ($lp_sbs3_youtube) : ?>
                <div class="img"><iframe src="https://www.youtube.com/embed/<?= $lp_sbs3_youtube; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
              <?php
              elseif ($lp_sbs3_image) :
                echo '<div class="img">' . wp_get_attachment_image($lp_sbs3_image, 'full') . '</div>';
              endif;
              ?>
            </dd>
          </dl>
        </li>
      <?php endif; ?>
    </ul>
  </div>
<?php endif; ?>