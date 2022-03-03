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
$id = 'cta-bg-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

$headerText = get_field('cta_header_text');
$cta = get_field('call_to_action');
$link = get_field('cta_link');
$linkText = get_field('cta_link_text');
$image = get_field('cta_image');
?>


<div id="<?php echo $id;?>" class="row block cta-bg-wrapper blue-grey darken-4 white-text z-depth-1"

>
    <article class="center">

      <?php if($headerText):?>

      <h2 id="skip-target" class="cta-bg-header-text h4 block"><?php echo $headerText;?></h2>

      <?php endif;?>

      <?php if($image):?>

      <div class="cta-bg-image">
        <img src="<?php echo $image['sizes']['card-thumbnail size'];?>" width="100px" height="100px" alt="<?php echo $image_alt;?>" />
      </div>

      <?php endif; ?>

      <p class="cta-bg-text"><?php echo $cta;?></p>

      <?php if($link):?>
      <p class="cta-bg-action">
          <a href="<?php echo $link;?>" class="accent"><?php echo $linkText;?></a>
      </p>
      <?php endif;?>
    </article>
  
</div>
