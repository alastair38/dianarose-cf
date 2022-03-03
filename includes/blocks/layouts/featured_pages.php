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
$id = 'featured-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'featured';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.

if( have_rows('pages') ):

  $count = count(get_field('pages'));
  $cols = 12 / $count;
  $title = get_field('section_title');
  $bg = get_field('background');

  echo '<div id="' . $id . '" class="block feat-pages">';

  if($title) {
    echo '<h2 class="col s12 h4">' . $title . '</h2>';
  }

    // loop through the rows of data
      while ( have_rows('pages') ) : the_row();

      $image = get_sub_field('feat_image');
      $image_alt = $image['alt'];

      echo '<div class="feat z-depth-1">
      <img src="' . $image['sizes']['card-thumbnail size'] . '" height="100" width="100" alt="' . $image_alt . '" />';

      if($title) {
      echo '<h3 class="center"><a href="' . get_sub_field('feat_link') . '" rel="bookmark">' . get_sub_field('feat_title') . '</a></h3>';
      } else {
        echo '<h2 class="center"><a href="' . get_sub_field('feat_link') . '" rel="bookmark">' . get_sub_field('feat_title') . '</a></h2>';
      }
      echo '</div>';

    endwhile;

    echo '</div>';

endif;
?>
