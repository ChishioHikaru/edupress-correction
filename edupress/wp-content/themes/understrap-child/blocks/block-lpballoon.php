<?php
$lp_balloon_img = block_value('lp_balloon_img');
$lp_balloon_text = block_value('lp_balloon_text');
?>
<?php if ($lp_balloon_img && $lp_balloon_text) : ?>
  <div class="c-grid lp-balloon" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <div class="c-grid__row u-ai-center u-jc-center">
      <div class="col-md-6 col-sm-7 col-16">
        <div><?php echo wp_get_attachment_image($lp_balloon_img, 'full'); ?></div>
      </div>
      <div class="col-md-18">
        <div class="p-box-02 arrow">
          <ul>
            <li class="u-fz-14"><span><?= $lp_balloon_text; ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>