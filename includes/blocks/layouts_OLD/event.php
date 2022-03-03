<?php

$classes = ['block-event'];
if( !empty( $block['className'] ) )
    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );

$anchor = '';
if( !empty( $block['anchor'] ) )
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';

$setDate = '<span style="color: #212121; font-style: italic;">Click to edit</span>';
$date = get_field('date');
if( !empty($date))
  $setDate = $date;

$template = array(
  array('acf/date'),
  array( 'core/paragraph', array(
    'placeholder' => 'Start typing to add some details and click on the button below to set the link address',
  )),
  array( 'acf/external-link' )
);

echo '<div class="' . join( ' ', $classes ) . ' flex p-4 gap-6"' . $anchor . '>';
	echo '<div class="block-event__inner">';
  
    // echo '<div class="block-event__date">';
		// 	echo '<span><strong>Date</strong>: ' . $setDate  . '</span>';
		// echo '</div>';
		echo '<div class="block-about__content">';
   echo '<InnerBlocks template="' . esc_attr( wp_json_encode( $template ) ) . '"  />';
    
		echo '</div>';
    
	echo '</div>';
echo '</div>';