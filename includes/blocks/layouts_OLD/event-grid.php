<?php

$classes = ['block-event-grid'];
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

$setDate = '<span style="color: #212121; font-style: italic;">Click to edit</span>';
$date = get_field('date');
if( !empty($date))
  $setDate = $date;

$template = array(
  array('core/group', array('className' => 'event-date'), array(
    array( 'acf/date'),
  )),
  array('core/group', array('className' => 'event-content'), array(
    array( 'core/paragraph', array(
      'placeholder' => 'Start typing to add some details',
      'className' => 'event-description'
    )),
    array( 'core/paragraph', array(
      'placeholder' => 'Add a location',
      'className' => 'event-location'
    )),
     
    array( 'acf/external-link', array('className' => 'event-link') )
  )),
);

echo '<div class="' . join( ' ', $classes ) . ' grid p-4 grid-cols-2 md:grid-cols-3 gap-6"' . $anchor . '>';
  echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '" />';
echo '</div>';