<?php

$classes = ['block-statement'];
if( !empty( $block['className'] ) )
    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );

if ( ! empty( $block['align'] ) ) {
      $classes[] = 'align' . $block['align'];
}

if ( ! empty( $block['backgroundColor'] ) ) {
      $classes[] = 'has-background';
      $classes[] = 'has-' . $block['backgroundColor'] . '-background-color';
}

if ( ! empty( $block['textColor'] ) ) {
      $classes[] = 'has-text-color';
      $classes[] = 'has-' . $block['textColor'] . '-color';
}
    

$anchor = '';
if( !empty( $block['anchor'] ) )
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';

  $template = array(
 
  
      array( 'core/image', array('className' => 'statement-image') ),
     
      array( 'core/paragraph', array(
        'placeholder' => 'Add a byline',
        'className' => 'statement-text'
      )),   
   
  );

echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . '>';
  echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
echo '</div>';