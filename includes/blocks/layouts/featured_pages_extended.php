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


$featured_pages = get_field('pages');
$count = count(get_field('pages'));
$title = get_field('section_title');


  
if( $featured_pages ): ?>
    <div id="<?php echo $id;?>" class="block columns-<?php echo $count;?> feat-pages-extended m-block-default m-inline-default">
    <?php if($title) {
    echo '<h2 class="h4 center">' . $title . '</h2>';
    }
    foreach( $featured_pages as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); 
        $image = get_the_post_thumbnail_url($post->ID, 'full');
       
        ?>
        <div class="feat z-depth-1">
        <?php if($image):?>
          <img src="<?php echo $image;?>" height="300" width="600" alt="" />
        <?php endif;?>
        
        <h2 class="center"><a href="<?php the_permalink($post->ID); ?>"><?php echo $post->post_title; ?></a></h2>
            <div class="content"><?php echo $post->post_excerpt; ?></div>
    </div>
    <?php endforeach; ?>
    </div>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif;

?>
