<?php
$text = block_value('text');
$textarea = block_value('textarea');
$image = block_value('image');
$btnlink = block_value('btnlink');
$btnlabel = block_value('btnlabel');
$id = block_value('id');
$contents_table = block_value('contents_table');
?>
<?php if ($text || $textarea || $image || ($btnlink && $btnlabel)) : ?>
  <div class="p-box" style="border-radius: 0px;margin-top: 0;" <?php if ($id) echo 'id="' . $id . '"'; ?>>
    <div class="inr">
      <?php if ($text) : ?>
        <div class="text"><?php echo $text; ?></div>
      <?php endif; ?>
      <?php if ($textarea) : ?>
        <div class="textarea"><?php echo $textarea; ?></div>
      <?php endif; ?>
      <?php if ($image) : ?>
        <div class="image"><?php echo wp_get_attachment_image($image, 'full'); ?></div>
      <?php endif; ?>
      <?php if ($btnlink && $btnlabel) : ?>
        <a class="btn" href="<?php echo $btnlink; ?>"><?php echo $btnlabel; ?></a>
      <?php endif; ?>
      <?php if ($contents_table) : ?>
        <div class="contents_table">
          <?php
          $trim_list = nl2br(trim(strip_tags($contents_table)));
          $anchor_list = explode('<br />', $trim_list);
          foreach ($anchor_list as $item) {
            $itemArray = explode(' : ', trim(strip_tags($item)));
            echo '<a href="#' . $itemArray[0] . '">' . $itemArray[1] . '</a>';
          }
          ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
<?php endif; ?>