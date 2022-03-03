<?php
function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'call_to_action',
        'title'             => __('Call to Action'),
        'description'       => __('Add a call to action statement with optional page link'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/cta.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'megaphone',
        ),

        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'call to action', 'cta' ),

    ));

    acf_register_block_type(array(
      'name'              => 'call_to_action_bg',
      'title'             => __('CTA w/ background image'),
      'description'       => __('Add a call to action statement with optional page link'),
      'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/cta_background.php',
      'category'          => 'custom-blocks',
      'icon' => array(
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
        'foreground' => '#ff005d',
      // Specifying a dashicon for the block
        'src' => 'megaphone',
      ),

      //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
      'keywords'          => array( 'call to action', 'cta' ),

  ));

    acf_register_block_type(array(
        'name'              => 'featured_pages',
        'title'             => __('Featured Pages'),
        'description'       => __('Showcase your main pages in a grid layout'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/featured_pages.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'admin-post',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'featured', 'pages' ),
    ));


    acf_register_block_type(array(
      'name'              => 'featured_publications',
      'title'             => __('Featured Publications'),
      'description'       => __('Add publication details to a page.'),
      'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/featured_publication.php',
      'category'          => 'custom-blocks',
      'icon' => array(
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
        'foreground' => '#ff005d',
      // Specifying a dashicon for the block
        'src' => 'admin-post',
      ),
      'mode' => 'edit',
      'supports' => array( 
          'align' => false,
      ),
      //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
      'keywords'          => array( 'featured', 'publications' ),
  ));

    acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero Image'),
        'description'       => __('Full width banner image for your page'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/hero.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'cover-image',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'hero image', 'image' ),
        //'post_types' => array('page', 'post')
    ));

    acf_register_block_type(array(
        'name'              => 'latest_news',
        'title'             => __('Latest News'),
        'description'       => __('Display your latest posts in a list layout'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/latest.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'media-document',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'latest', 'news' ),
    ));

    acf_register_block_type(array(
        'name'              => 'featured_book',
        'title'             => __('Featured book'),
        'description'       => __('Display your featured library outputs in a list layout'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/featured_book.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'book',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'featured', 'book' ),
    ));

    acf_register_block_type(array(
        'name'              => 'media_coverage',
        'title'             => __('Media coverage'),
        'description'       => __('Add a media coverage with link'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/media_coverage.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'images-alt2',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'media coverage','image' ),
    ));

    // acf_register_block_type(array(
    //     'name'              => 'projects',
    //     'title'             => __('Priority areas'),
    //     'description'       => __('Showcase featured priority areas in a carousel'),
    //     'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/projects.php',
    //     'category'          => 'custom-blocks',
    //     'icon' => array(
    //     // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    //       'foreground' => '#ff005d',
    //     // Specifying a dashicon for the block
    //       'src' => 'clipboard',
    //     ),
    //     //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
    //     'keywords'          => array( 'featured', 'priority areas' ),
    //     // 'example'  => array(
    //     //     'attributes' => array(
    //     //     'mode' => 'preview',
    //     //     )
    //     // ),
    //     'enqueue_assets' 	=> function(){
    //
		// 		wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), '1.8.1', true );
    //     wp_enqueue_script( 'slick-init-block', get_template_directory_uri() . '/assets/js/slick_block.js', array( 'jquery' ), '1.0.0', true );
		// 	  },
    // ));

    acf_register_block_type(array(
        'name'              => 'profile_card',
        'title'             => __('Profile Cards'),
        'description'       => __('Add user profiles with a card layout'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/profile.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'admin-users',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'profile', 'card' ),
    ));

    // acf_register_block_type(array(
    //     'name'              => 'project_gallery',
    //     'title'             => __('Project Gallery'),
    //     'description'       => __('Add a gallery of images'),
    //     'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/gallery.php',
    //     'category'          => 'custom-blocks',
    //     'icon' => array(
    //     // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    //       'foreground' => '#ff005d',
    //     // Specifying a dashicon for the block
    //       'src' => 'format-gallery',
    //     ),
    //     //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
    //     'keywords'          => array( 'image', 'gallery' ),
    // ));


    acf_register_block_type(array(
        'name'              => 'related_info',
        'title'             => __('Related content'),
        'description'       => __('Shows links to related site content'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/related_info.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'admin-links',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'related', 'resources' ),
    ));

    acf_register_block_type(array(
        'name'              => 'social_call_to_action',
        'title'             => __('Connect with us'),
        'description'       => __('Add a block with links to your Twitter profile, newsletter signup etc'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/social_cta.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'megaphone',
        ),

        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'connect', 'social media' ),

    ));

    // acf_register_block_type(array(
    //     'name'              => 'standard_image',
    //     'title'             => __('Standard Image'),
    //     'description'       => __('Standard image layout'),
    //     'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/image.php',
    //     'category'          => 'custom-blocks',
    //     'icon' => array(
    //     // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    //       'foreground' => '#ff005d',
    //     // Specifying a dashicon for the block
    //       'src' => 'format-image',
    //     ),
    //     //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
    //     'keywords'          => array( 'image' ),
    //     'mode' => 'auto'
    // ));

    acf_register_block_type(array(
      'name'              => 'slider',
      'title'             => __('Slider Header'),
      'description'       => __('Add a statement header image and title'),
      'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/slider.php',
      'category'          => 'custom-blocks',
      'icon' => array(
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
        'foreground' => '#ff005d',
      // Specifying a dashicon for the block
        'src' => 'cover-image',
      ),
      //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
      'keywords'          => array( 'statement block', 'header' ),
  ));

    acf_register_block_type(array(
        'name'              => 'statement',
        'title'             => __('Statement Header'),
        'description'       => __('Add a statement header image and title'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/statement.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'cover-image',
        ),
        'mode' => 'edit',
      'supports' => array( 
          'align' => false,
      ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'statement block', 'header' ),
    ));

    acf_register_block_type(array(
        'name'              => 'workstreams-list',
        'title'             => __('Workstreams grid'),
        'description'       => __('Add a list of workstreams in grid format'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/workstreams.php',
        'category'          => 'custom-blocks',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'clipboard',
        ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'workstreams block' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}


// <?php

// acf_register_block_type( array(
// 	'title'			=> __( 'Statement', 'client_textdomain' ),
// 	'name'			=> 'statement',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/statement.php',
// 	'mode'			=> 'preview',
// 	'supports'		=> [
// 		'align'			=> true,
// 		'anchor'		=> true,
// 		'color'			=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'CTA', 'client_textdomain' ),
// 	'name'			=> 'cta',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/cta.php',
// 	'mode'			=> 'preview',
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'color'			=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'Featured pages', 'client_textdomain' ),
// 	'name'			=> 'featured-pages',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/featured-pages.php',
// 	'mode'			=> 'preview',
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'color'			=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'Event', 'client_textdomain' ),
// 	'name'			=> 'event',
// 	'description' => 'This minimal wrapper comes with a date field and the option to add additional blocks to suit your needs',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/event.php',
// 	'mode'			=> 'preview',
// 	'example'   => array(
// 		'attributes' => array(
// 				'mode' => 'preview',
// 				'data' => array(
// 						'date'   			=> "26/04/2022",
// 						'is_preview'	=> true
// 				)
// 		)
// 	),
// 	'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M11.696 13.972c.356-.546.599-.958.728-1.235a1.79 1.79 0 00.203-.783c0-.264-.077-.47-.23-.618-.148-.153-.354-.23-.618-.23-.295 0-.569.07-.82.212a3.413 3.413 0 00-.738.571l-.147-1.188c.289-.234.59-.41.903-.526.313-.117.66-.175 1.041-.175.375 0 .695.08.959.24.264.153.46.362.59.626.135.265.203.556.203.876 0 .362-.08.734-.24 1.115-.154.381-.427.87-.82 1.466l-.756 1.152H14v1.106h-4l1.696-2.609z"></path><path d="M19.5 7h-15v12a.5.5 0 00.5.5h14a.5.5 0 00.5-.5V7zM3 7V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"></path></svg>',
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'Event - Grid', 'client_textdomain' ),
// 	'name'			=> 'event-grid',
// 	'description' => 'This minimal wrapper comes with a date field and the option to add additional blocks to suit your needs',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/event-grid.php',
// 	'mode'			=> 'preview',
// 	'example'   => array(
// 		'attributes' => array(
// 				'mode' => 'preview',
// 				'data' => array(
// 						'date'   			=> "26/04/2022",
// 						'is_preview'	=> true
// 				)
// 		)
// 	),
// 	'icon'				=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M11.696 13.972c.356-.546.599-.958.728-1.235a1.79 1.79 0 00.203-.783c0-.264-.077-.47-.23-.618-.148-.153-.354-.23-.618-.23-.295 0-.569.07-.82.212a3.413 3.413 0 00-.738.571l-.147-1.188c.289-.234.59-.41.903-.526.313-.117.66-.175 1.041-.175.375 0 .695.08.959.24.264.153.46.362.59.626.135.265.203.556.203.876 0 .362-.08.734-.24 1.115-.154.381-.427.87-.82 1.466l-.756 1.152H14v1.106h-4l1.696-2.609z"></path><path d="M19.5 7h-15v12a.5.5 0 00.5.5h14a.5.5 0 00.5-.5V7zM3 7V5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V7z"></path></svg>',
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'External Link', 'client_textdomain' ),
// 	'name'			=> 'external-link',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/external-link.php',
// 	'mode'			=> 'preview',
// 	'icon'			=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M15.6 7.2H14v1.5h1.6c2 0 3.7 1.7 3.7 3.7s-1.7 3.7-3.7 3.7H14v1.5h1.6c2.8 0 5.2-2.3 5.2-5.2 0-2.9-2.3-5.2-5.2-5.2zM4.7 12.4c0-2 1.7-3.7 3.7-3.7H10V7.2H8.4c-2.9 0-5.2 2.3-5.2 5.2 0 2.9 2.3 5.2 5.2 5.2H10v-1.5H8.4c-2 0-3.7-1.7-3.7-3.7zm4.6.9h5.3v-1.5H9.3v1.5z"></path></svg>',
// 	'example'           => array(
// 		'attributes' => array(
// 				'mode' => 'preview',
// 				'data' => array(
// 						'link'   			=> "https://bbc.co.uk",
// 						'link_text' 	=> "Further details",
// 						'is_preview'	=> true
// 				)
// 		)
// 	),
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'Date', 'client_textdomain' ),
// 	'name'			=> 'date',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/date.php',
// 	'mode'			=> 'preview',
// 	'icon'			=> '<svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true" focusable="false"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm.5 16c0 .3-.2.5-.5.5H5c-.3 0-.5-.2-.5-.5V7h15v12zM9 10H7v2h2v-2zm0 4H7v2h2v-2zm4-4h-2v2h2v-2zm4 0h-2v2h2v-2zm-4 4h-2v2h2v-2zm4 0h-2v2h2v-2z"></path></svg>',
// 	'example'           => array(
// 		'attributes' => array(
// 				'mode' => 'preview',
// 				'data' => array(
// 					'date'   			=> "26/04/2022",
// 					'is_preview'	=> true
// 				)
// 		)
// 	),
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'color'			=> true,
// 		'customClassName'	=> true,
// 	]
// ));

// acf_register_block_type( array(
// 	'title'			=> __( 'Publication Meta', 'client_textdomain' ),
// 	'name'			=> 'publication-meta',
// 	'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/publication-meta.php',
// 	'mode'			=> 'preview',
// 	'example'   => array(
// 		'attributes' => array(
// 				'mode' => 'preview',
// 				'data' => array(
// 						'is_preview'	=> true
// 				)
// 		)
// 	),
// 	'supports'		=> [
// 		'align'			=> false,
// 		'anchor'		=> true,
// 		'color'			=> true,
// 		'customClassName'	=> true,
// 		'jsx' 			=> true,
// 	]
// ));