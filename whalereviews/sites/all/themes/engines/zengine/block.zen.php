<div id="block-<?php print $block->module .'-'. $block->delta; ?>" class="<?php print $block_classes; ?>">  
  <div class="blockinner">
    <?php if ($block->subject) { ?><h2 class="title block-title"><span><?php print $block->subject; ?></span></h2><?php } ?>
    <div class="content">
      <?php print $block->content; ?>
      <?php print $edit_links; ?>
    </div> <!-- /content -->
  </div> <!-- /blockinner -->
</div> <!-- /block -->
