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
$id = 'featured-publication-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured-publication';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
} ?>

<aside id="<?php echo $id;?>" class="block featured-publication">

  <div class="block-details">
    
    <div class="article-list">

      <span class="h6"><?php echo get_field('publication_title'); ?></span>

      <div class="article-details">
        <?php echo get_field('publication_details'); ?>
      
        <div class="article-link">
          <a itemprop="sameAs" href="<?php echo get_field('publication_link'); ?>">View Publication</a>
        </div>

      </div>

    </div>

  </div>

</aside>