<?php

$classes = ['block-external-link'];
if( !empty( $block['className'] ) )
    $classes = array_merge( $classes, explode( ' ', $block['className'] ) );

$anchor = '';
if( !empty( $block['anchor'] ) )
	$anchor = ' id="' . sanitize_title( $block['anchor'] ) . '"';

$setLink = '<div style="display: flex;"><span style="color: #333; background: #eee; padding: 0.25rem 0.75rem; border-radius: 30px;">Further details</span></div>';
$link = get_field('link');
$linkText = get_field('link_text');
if( !empty($link))
  $setLink = '<a style="color: #333; padding: 0.25rem 0.75rem; border-radius: 30px;" href="' . $link . '"/>' . $linkText . '</a>';

// $template = array(
//   array( 'core/paragraph', array(
//     'placeholder' => '
//     Start typing to add some details and click on the button below to set the link address',
//   )),
//   array( 'core/button', array(
//     'text' => 'View event details',
//     'className' => 'is-style-outline flex items-center'
//   ))
// );

echo '<div style="display: flex;" class="' . join( ' ', $classes ) . '"' . $anchor . '>';
	echo $setLink;
echo '</div>';