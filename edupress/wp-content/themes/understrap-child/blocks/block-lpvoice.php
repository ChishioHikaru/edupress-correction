<?php
$thumb = block_value('voice_thumb');
$title = block_value('voice_title');
$problem = block_value('voice_problem');
$solved = block_value('voice_solved');
$desc = block_value('voice_desc');
if ($thumb && $title) :
?>

  <div class="c-grid lp-voice" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <div class="p-box-02">
      <div class="c-grid__row u-ai-center c-gutter-6 c-gutter-mb4 u-jc-center">
        <div class="col-md-6 col-18">
          <div class="u-text-center"><?= wp_get_attachment_image($thumb, 'full'); ?></div>
        </div>
        <div class="col-md-18">
          <p class="u-color-primary u-fz-18"><strong><?= $title; ?></strong></p>
          <?php if ($problem || $solved) : ?>
            <div class="lp-voice__problem_solved u-fz-14">
              <?php if ($problem) : ?>
                <dl>
                  <dt class="u-color-primary">お悩み：</dt>
                  <dd><?= $problem; ?></dd>
                </dl>
              <?php
              endif;
              if ($problem || $solved) :
              ?>
                <dl>
                  <dt class="u-color-primary">解決後：</dt>
                  <dd><?= $solved; ?></dd>
                </dl>
            <?php
              endif;
            endif;
            ?>
            </div>
        </div>
        <?php if ($desc) echo '<div class="u-fz-14 lp-voice__desc">' . $desc . '</div>'; ?>
      </div>
    </div>
  </div>

<?php endif; ?>