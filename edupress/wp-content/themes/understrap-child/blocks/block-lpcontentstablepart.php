<?php
$contents_table = block_value('lp_contents_table');
if ($contents_table) :
?>
  <div class="c-grid lp-contents_table" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <div class="inr">
      <div class="p-sub-ttl-00">
        <ul>
          <?php
          $trim_list = nl2br(trim(strip_tags($contents_table)));
          $anchor_list = explode('<br />', $trim_list);
          foreach ($anchor_list as $item) {
            $itemArray = explode(' : ', trim(strip_tags($item)));
            echo '<li><a href="#' . $itemArray[0] . '" class="scroll">' . $itemArray[1] . '</a></li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </div>
<?php endif; ?>