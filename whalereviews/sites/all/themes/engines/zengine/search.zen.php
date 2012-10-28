<dt class="title"><a href="<?php print $link; ?>"><?php print $title; ?></a></dt>
<dd>
  <?php if ($snippet) { ?><p class="snippet"><?php print $snippet; ?></p><?php } ?>
  <p class="search-info">
    <?php if ($node_type) { print $node_type . ' - '; } ?>
    <?php if ($user) { print $user . ' - '; } ?>
    <?php if ($date) { print format_date($date, 'small') . ' - '; } ?>
    <?php print implode(' - ', $extra); ?>
  </p>
</dd>