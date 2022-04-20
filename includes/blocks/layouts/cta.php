<?php

/**
 * Front Page Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'cta-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$headerText = get_field('cta_header_text');
$cta = get_field('call_to_action');
$link = get_field('cta_link');
$linkText = get_field('cta_link_text');
$image = get_field('cta_image');
$image_alt = $image['alt'];
?>


<div id="<?php echo $id;?>" class="row block cta-wrapper">
  <div class="cta">
    <article class="col s12 center">

      <?php if($image):?>

        <div class="cta-image">
          <img src="<?php echo $image['sizes']['card-thumbnail size'];?>" width="200px" height="200px" alt="<?php echo $image_alt;?>" />
        </div>

      <?php endif; ?>

      <?php if($headerText):?>

      <h1 id="skip-target" class="cta-header-text h4 block"><?php echo $headerText;?></h1>

      <?php endif;?>

      <p class="cta-text"><?php echo $cta;?></p>

      <?php if($link):?>
      <p class="cta-action">
          <a href="<?php echo $link;?>" class="accent"><?php echo $linkText;?></a>
      </p>
      <?php endif;?>
    </article>
  </div>
</div>
