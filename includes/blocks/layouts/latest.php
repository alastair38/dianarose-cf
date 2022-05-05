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
$id = 'latest-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'latest';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assing defaults.
$numberposts = get_field('number_of_items');

$args = array(
  'numberposts' => $numberposts
);

$latest_posts = get_posts( $args );

echo '<div class="block latest-news m-block-default m-inline-default">';
  echo '<h2 class="h4 center">Blog</h2>';
foreach($latest_posts as $post) {
  setup_postdata( $post );?>
  <article id="post-<?php the_ID(); ?>" class="blog-card">

    <?php
    $link = get_field('blog_link', $post->ID);
    $post_date = get_the_date( 'F j, Y', $post->ID );
    if ( has_post_thumbnail($post->ID) ) {
    echo get_the_post_thumbnail($post->ID, array(300, 300) );
  } else {
    $image = get_field("default_image", "options");
    //var_dump($image);
    //print_r($image);
    echo '<img src="' . $image['url'] . '" width="'. $image['sizes']['blog-thumbnail size-width'] . '" height="' . $image['sizes']['blog-thumbnail size-height'] . '" alt="' . $image['alt'] . '" />';

  }?>

    <div class="card-content">

  		<h3><?php echo get_the_title($post->ID); ?></h3>
    	<!-- <span class="date"><?php echo $post_date;?></span> -->

      <?php

    	if( strtotime( $post->post_date ) > strtotime('-7 day') ) {
    			echo '<span class="new badge"></span>';
    	}

      if( $link ) {
        echo '<div class="article-link"><a itemprop="sameAs" aria-label="Read ' . get_the_title($post->ID) . '" href="' . $link . '"><span>Read Article</span><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
        </svg></a></div>';
        } else {
          echo '<div class="article-link"><a aria-label="Read ' . get_the_title($post->ID) . '" href="' . the_permalink() . '" rel="bookmark">Read Article</a></div>';
        }
    	?>

    </div>

  </article>
<?php }

echo '</div>';

wp_reset_postdata();
?>
