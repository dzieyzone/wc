<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="block block-<?php print $block->module ?> <?php print $block_zebra; ?> <?php print $position; ?> <?php print $skinr; ?>">
  <div class="inner clearfix">
    <?php if (isset($edit_links)): ?>
    <?php print $edit_links; ?>
    <?php endif; ?>
    <?php if ($block->subject): ?>
    <div class="block-title-wrapper">
      <h2 class="title block-title"><?php print $block->subject ?></h2>
    </div>
    <?php endif;?>
    <div class="block-content clearfix">
      <?php print $block->content ?>
    </div>
  </div>
</div>
