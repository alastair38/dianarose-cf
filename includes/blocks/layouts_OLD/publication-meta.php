<?php

$classes = ['block-publication-meta'];
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
  array('core/group', array('className' => 'pub-content'), array(
    array( 'core/paragraph', array(
      'className' => 'author',
      'content' => 'Charles Dickens,',
    )),
    array( 'core/paragraph', array(
      'className' => 'publication',
      'content' => '<em>Journal of Academia,</em>',
    )),
    array( 'core/paragraph', array(
      'className' => 'year',
      'content' => '2022',
    ))
  )),
  array( 'core/paragraph', array(
    'className' => 'isbn',
    'content' => '<strong>ISBN:</strong> 978-3-16-148410-0',
  )),
  array( 'acf/external-link', array('className' => 'pub-link') )
);

echo '<div class="' . join( ' ', $classes ) . '"' . $anchor . '>';
		echo '<div class="block-pub__content">';
    echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
		echo '</div>';
echo '</div>';