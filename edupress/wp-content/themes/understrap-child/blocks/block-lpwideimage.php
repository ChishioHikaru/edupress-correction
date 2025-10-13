<?php
$img_pc = block_value('img_pc');
$img_pc_alt = get_post_meta($img_pc, '_wp_attachment_image_alt', true);
$img_sp = block_value('img_sp');
$img_sp_alt = get_post_meta($img_sp, '_wp_attachment_image_alt', true);
?>
<?php if ($img_pc || $img_sp) : ?>
  <div class="c-grid lp-wideimage wide" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <?php if ($img_pc && $img_sp) : ?>
      <picture>
        <source srcset="<?= wp_get_attachment_url($img_pc); ?>" media="(min-width: 889px)">
        <img src="<?= wp_get_attachment_url($img_sp); ?>" alt="<?php $img_pc_alt ? print $img_pc_alt : ($img_sp_alt ? print $img_sp_alt : ''); ?>">
      </picture>
    <?php
    elseif ($img_sp) :
      echo wp_get_attachment_image($img_pc, 'full');
    elseif ($img_pc) :
      echo wp_get_attachment_image($img_sp, 'full');
    endif;
    ?>
  </div>
<?php endif; ?>