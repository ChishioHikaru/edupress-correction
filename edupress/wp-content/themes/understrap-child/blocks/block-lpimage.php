<?php
$img_pc = block_value('img_pc');
$img_pc_alt = get_post_meta($img_pc, '_wp_attachment_image_alt', true);
$img_sp = block_value('img_sp');
$img_sp_alt = get_post_meta($img_sp, '_wp_attachment_image_alt', true);
?>
<?php if ($img_pc || $img_sp) : ?>
  <div class="c-grid lp-image" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <?php if ($img_pc && $img_sp) : ?>
      <picture>
        <source srcset="<?= wp_get_attachment_url($img_pc); ?>" media="(min-width: 889px)">
        <img src="<?= wp_get_attachment_url($img_sp); ?>" alt="<?php $img_pc_alt ? print $img_pc_alt : ($img_sp_alt ? print $img_sp_alt : ''); ?>" width="1080px;">
      </picture>
    <?php else : ?>
      <?php if ($img_pc) : ?>
        <img src="<?= wp_get_attachment_url($img_pc); ?>" alt="<?php if ($img_pc_alt) echo $img_pc_alt; ?>" width="1080px;">
      <?php else : ?>
        <img src="<?= wp_get_attachment_url($img_sp); ?>" alt="<?php if ($img_sp_alt) echo $img_sp_alt; ?>" width="1080px;">
      <?php endif; ?>
    <?php endif; ?>
  </div>
<?php endif; ?>