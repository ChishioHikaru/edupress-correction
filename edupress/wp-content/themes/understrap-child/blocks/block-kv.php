<?php
$kvpc = block_value('kvpc');
$kvsp = block_value('kvsp');
?>
<?php if ($kvpc || $kvsp) : ?>
  <div class="c-grid lp-kv wide" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <picture>
      <source srcset="<?= wp_get_attachment_url($kvpc); ?>" media="(min-width: 889px)">
      <img src="<?= wp_get_attachment_url($kvsp); ?>" alt="" width="1080px;">
    </picture>
  </div>
<?php endif; ?>