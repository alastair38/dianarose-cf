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

<?php 
// Load values and assing defauaside_title = get_field('block_title');
$pubs = get_field('featured_publications');



if( $pubs ): ?>

  <div class="block-details">
    
    <?php foreach( $pubs as $post ): 

        // Setup this post for WP functions (variable must be named $post).
      setup_postdata($post); 
      
      ?>
      <div class="article-list">

      <span class="h6"><?php echo get_the_title($post->ID); ?></span>
      <div class="article-details">
      <?php

      if($post->post_type === 'books'):

        $editors = get_field("editors", $post->ID);
        $pubTitle = get_field("publication", $post->ID);
        $volumeDetails = get_field("volume", $post->ID);
        $pages = get_field("pages", $post->ID);
        $publisher = get_field("publisher", $post->ID);
        $pubDate = get_field("publication_date", $post->ID);
        $isbn = get_field("isbn", $post->ID);
        $pubLink = get_field("publication_link", $post->ID);
        $authors = get_field("other_authors", $post->ID);
        $doi = get_field("doi", $post->ID);
      
        if( $authors ): 
          echo $authors . '. ';
        endif;
      
        if( $pages ): 
          echo '<span itemprop="numberOfPages">' . $pages . '</span> pages. ';
        endif;
        
        if( $editors ): 
          echo $editors . '. ';
        endif;
      
        if( $pubTitle ): 
          echo ' <em itemprop="publication">' . $pubTitle . '</em>, ';
        endif;
      
        if( $volumeDetails ): 
          echo $volumeDetails . ', ';
        endif;
      
        if( $publisher ): 
          echo '<span itemprop="publisher">' . $publisher . '</span> ';
        endif;
      
        if( $pubDate['year'] ): 
          
          echo '(' . $pubDate['year'] . ').';
      
          if( $pubDate['reprinted']):
            echo	$pubDate['reprinted'] . ' ';
            endif;
        endif;
      
        if( $isbn): 
          
          echo '<div class="isbn">';
      
          if( $isbn['issn']):
            echo '<span class="isbn">ISSN: ' .	$isbn['issn'] . '</span> ';
          endif;
      
          if( $isbn['paperback']):
            echo '<span class="isbn"><strong>Pb</strong> ISBN:<span itemprop="isbn"> ' .	$isbn['paperback'] . '</span></span> ';
          endif;
      
          if( $isbn['hardback']):
            echo '<span class="isbn"><strong>Hb</strong> ISBN:<span itemprop="isbn"> ' .	$isbn['hardback'] . '</span></span> ';
          endif;
      
          if( $isbn['ebook']):
            echo '<span class="isbn"><strong>E</strong> ISBN:<span itemprop="isbn"> ' .	$isbn['ebook'] . '</span></span> ';
          endif;
      
          echo '</div>';
      
        endif;
      
        echo '<div class="article-link"><a itemprop="sameAs" href="' . get_the_permalink($post->ID) . '" rel="bookmark">View Publication</a></div>';
            // endif;

      endif;

      if($post->post_type === "articles"):

      $editors = get_field("editors", $post->ID);
      $pubTitle = get_field("publication_title", $post->ID);
      $volumeDetails = get_field("volume_details", $post->ID);
      $publisher = get_field("publisher", $post->ID);
      $pubDate = get_field("publication_date", $post->ID);
      $pubLink = get_field("publication_link", $post->ID);
      $authors = get_field("other_authors", $post->ID);
      $doi = get_field("doi", $post->ID);

      if( $editors ): 
        echo $editors;
      endif;

      if( $pubTitle ): 
        echo ' <em itemprop="publication">' . $pubTitle . '</em>, ';
      endif;

      if( $volumeDetails ): 
        echo $volumeDetails . ', ';
      endif;

      if( $publisher ): 
        echo '<span itemprop="publisher">' . $publisher . '</span>, ';
      endif;

      if( $pubDate['year'] ): 
        if( $pubDate['month']):
        echo	$pubDate['month'] . ' ';
        endif;
        echo '<span itemprop="datePublished">' .  $pubDate['year'] . '</span>.';
      endif;

      if( $doi ): 
        echo '<span class="block">DOI: ' . $doi . '</span>';
      endif;

      if( $authors ): 
        echo '<span class="block">' . $authors . '</span>';
      endif;

      if( $pubLink ): 
        echo '<div class="article-link"><a itemprop="sameAs" href="' . $pubLink . '">View Publication</a></div>';
      endif;

      

      $library_tags = get_the_terms( get_the_ID(), 'articles_categories' );
      //print_R($library_tags);
      if($library_tags) {
        echo '<span class="article-tags">';

        foreach ($library_tags as $tag) {
          $tag_link = get_term_link( $tag );
          echo '<span class="tag">' . $tag->name . '</span>';
        }

        echo '</span>';
      }
      endif;
      
      echo '</div>';
      ?>

      </div>
    <?php endforeach; ?>
    
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
  <?php endif; ?>

  </div>
    </aside>