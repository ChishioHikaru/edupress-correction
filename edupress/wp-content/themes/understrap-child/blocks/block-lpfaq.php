<?php
$q = block_value('faq_q');
$a = block_value('faq_a');
if ($q && $a) :
?>

  <div class="c-grid lp-faq" <?php if (block_value('id')) echo 'id="' . block_value('id') . '"'; ?>>
    <dl>
      <dt><?= $q; ?></dt>
      <dd><?= $a; ?></dd>
    </dl>
  </div>

<?php endif; ?>