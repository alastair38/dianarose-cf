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
      'name'              => 'featured_pages_extended',
      'title'             => __('Featured Pages - Extended'),
      'description'       => __('Showcase your main pages with an excerpt in a grid layout'),
      'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/featured_pages_extended.php',
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
		'name'              => 'featured_publications_external',
		'title'             => __('Featured Publications - External'),
		'description'       => __('Add external publication details to a page.'),
		'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/featured_publication_external.php',
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