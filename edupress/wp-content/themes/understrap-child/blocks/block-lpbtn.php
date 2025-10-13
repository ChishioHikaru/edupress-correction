<?php
$label = block_value('btn_label');
$link = block_value('bnt_link');
$target = block_value('target');
if ($label || $link) :
?>
  <div class="c-grid lp-btn" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <a href="<?= $link; ?>" <?php if ($target) echo ' target="_blank" rel="noopener noreferrer"'; ?>><?= $label; ?></a>
  </div>
<?php endif; ?>