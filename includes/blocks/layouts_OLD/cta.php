<?php

$classes = ['block-cta'];
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
 
  // array('core/group', array('className' => 'cta-container'), array(
    array( 'core/image', array('className' => 'cta-image') ),
    array( 'core/group', array('className' => 'cta-content'), array(
    array('core/heading', array(
      'level' => 2,
      'placeholder' => 'Add a title',
    )),
    array( 'core/paragraph', array(
      'placeholder' => 'Add a byline',
      'className' => 'cta-byline'
    )),
    array( 'core/button', array('className' => 'cta-link') )
  )),
    
  // )),
);

echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . '>';
  echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
echo '</div>';