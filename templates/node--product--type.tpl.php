<?php
 // print '<pre>';
  //print_r($content);
  //print '</pre>';
?>
<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  </header>
  <?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>
  <div class="images-region clearfix">
    <?php print render($content['product:field_images']); ?>
  </div>
  <div class="content-region">
    <div<?php print $content_attributes; ?>>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        hide($content['service_links']);
        print render($content);
      ?>
    </div>
  </div>
  <div class="links-region clearfix">
    <?php if (!empty($content['links']) || !empty($content['service_links'])): ?>
    <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <nav class="service-links node-links clearfix"><?php print render($content['service_links']); ?></nav>
    <?php endif; ?>
    <?php
    print render($content['comments']);
    ?>
  </div>
</article>
