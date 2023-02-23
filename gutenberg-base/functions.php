<?php
/**
 * gutenberg-starter-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gutenberg-starter-theme
 */

if ( ! function_exists( 'gutenberg_starter_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function gutenberg_starter_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on gutenberg-starter-theme, use a find and replace
		 * to change 'gutenberg-starter-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'gutenberg-starter-theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'gutenberg-starter-theme' ),
			'footer' => esc_html__( 'Footer', 'gutenberg-starter-theme' ),
			'footer-lower' => esc_html__( 'Footer - lower', 'gutenberg-starter-theme' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( '_s_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'gutenberg_starter_theme_setup' );


function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'Rotating',
        'title'             => __('Rotating'),
        'description'       => __('A rotating block for displaying customer logos.'),
        'render_template'   => '/acf-blocks/rotating.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'rotating', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Tabs',
        'title'             => __('Tabs'),
        'description'       => __('A Tabs block.'),
        'render_template'   => '/acf-blocks/tabs.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'tabs', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Checkbox messages',
        'title'             => __('Checkbox messages'),
        'description'       => __('A Checkbox messages block.'),
        'render_template'   => '/acf-blocks/checkbox-message.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'checkbox', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Full Contact',
        'title'             => __('Full Contact'),
        'description'       => __('A Full Contact block.'),
        'render_template'   => '/acf-blocks/full-contact.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'Full', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Courses',
        'title'             => __('Courses'),
        'description'       => __('A Courses block.'),
        'render_template'   => '/acf-blocks/courses.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'checkbox', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Contact Locations',
        'title'             => __('Contact Locations'),
        'description'       => __('A Contact Locations block.'),
        'render_template'   => '/acf-blocks/contact-locations.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'contact', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Leadership cards',
        'title'             => __('Leadership cards'),
        'description'       => __('A Leadership cards block.'),
        'render_template'   => '/acf-blocks/leadership-cards.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'leadership', 'quote' ),
	));

	acf_register_block_type(array(
        'name'              => 'Mission Diamonds',
        'title'             => __('Mission Diamonds'),
        'description'       => __('A Mission Diamonds block.'),
        'render_template'   => '/acf-blocks/mission-diamonds.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'mission', 'diamonds' ),
	));

	acf_register_block_type(array(
        'name'              => 'Business Stats',
        'title'             => __('Business Stats'),
        'description'       => __('A Business Stats block.'),
        'render_template'   => '/acf-blocks/business-stats.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'mission', 'diamonds' ),
	));

	acf_register_block_type(array(
        'name'              => 'Reviews',
        'title'             => __('Reviews'),
        'description'       => __('A Reviews block.'),
        'render_template'   => '/acf-blocks/reviews.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'reviews', 'quote' ),
	));


	acf_register_block_type(array(
        'name'              => 'Diamonds',
        'title'             => __('Diamonds'),
        'description'       => __('The Diamonds block.'),
        'render_template'   => '/acf-blocks/diamonds.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'diamonds', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Industries List',
        'title'             => __('Industries List'),
        'description'       => __('The Industries list block.'),
        'render_template'   => '/acf-blocks/industries-list.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'industries', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Mission Cards',
        'title'             => __('Mission Cards'),
        'description'       => __('The Mission Cards block.'),
        'render_template'   => '/acf-blocks/mission-cards.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'mission', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Awards',
        'title'             => __('Awards'),
        'description'       => __('The Awards block.'),
        'render_template'   => '/acf-blocks/awards.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'industries', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'New Features',
        'title'             => __('New Features'),
        'description'       => __('The New Features block.'),
        'render_template'   => '/acf-blocks/new-features.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'features', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Side by Side columns',
        'title'             => __('Side by Side columns'),
        'description'       => __('The Side by Side columns block.'),
        'render_template'   => '/acf-blocks/side-by-side.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'side by side', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Onboarding Diamonds',
        'title'             => __('Onboarding Diamonds'),
        'description'       => __('The Onboarding Diamonds block.'),
        'render_template'   => '/acf-blocks/diamonds-onboarding.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'diamonds', 'block' ),
	));

	
	acf_register_block_type(array(
        'name'              => 'Featured Page Links',
        'title'             => __('Featured Page Links'),
        'description'       => __('Featured Page Links block.'),
        'render_template'   => '/acf-blocks/featured-page-links.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'featured', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Standout border quote',
        'title'             => __('Standout border quote'),
        'description'       => __('Standout border quote block.'),
        'render_template'   => '/acf-blocks/standout-border-quote.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Updated Cards',
        'title'             => __('Updated Cards'),
        'description'       => __('Updated Cards block.'),
        'render_template'   => '/acf-blocks/updated-cards.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Accordions',
        'title'             => __('Accordions'),
        'description'       => __('Accordions block.'),
        'render_template'   => '/acf-blocks/accordions.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));


	acf_register_block_type(array(
        'name'              => 'Button banner',
        'title'             => __('Button banner'),
        'description'       => __('Button banner block.'),
        'render_template'   => '/acf-blocks/button-banner.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Category Switcher',
        'title'             => __('Category Switcher'),
        'description'       => __('Category Switcher block.'),
        'render_template'   => '/acf-blocks/category-switcher.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Very Large Quote',
        'title'             => __('Very Large Quote'),
        'description'       => __('Very Large Quote block.'),
        'render_template'   => '/acf-blocks/very-large-quote.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Multiple Standout border quote',
        'title'             => __('Multiple Standout border quote'),
        'description'       => __('Multiple Standout border quote block.'),
        'render_template'   => '/acf-blocks/multiple-standout-border-quote.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Multiple Standout border quote with person',
        'title'             => __('Multiple Standout border quote with person'),
        'description'       => __('Multiple Standout border quote with person block.'),
        'render_template'   => '/acf-blocks/multiple-standout-border-quote-person.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'standout', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Standout Logos',
        'title'             => __('Standout Logos'),
        'description'       => __('Standout Logos block.'),
        'render_template'   => '/acf-blocks/standout-logos.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'logos', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Diamond columns',
        'title'             => __('Diamond columns'),
        'description'       => __('Diamond columns block.'),
        'render_template'   => '/acf-blocks/diamond-columns.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'diamond', 'block' ),
	));


	acf_register_block_type(array(
        'name'              => 'Pricing',
        'title'             => __('Pricing'),
        'description'       => __('The Pricing block.'),
        'render_template'   => '/acf-blocks/pricing.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'pricing', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Pricing Options',
        'title'             => __('Pricing Options'),
        'description'       => __('The Pricing Options block.'),
        'render_template'   => '/acf-blocks/pricing-options.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'pricing options', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Pricing features',
        'title'             => __('Pricing features'),
        'description'       => __('The Pricing features block.'),
        'render_template'   => '/acf-blocks/pricing-features.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'pricing features', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Interactive Map',
        'title'             => __('Interactive Map'),
        'description'       => __('The Interactive Map block.'),
        'render_template'   => '/acf-blocks/interactive-map.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'Interactive Map', 'block' ),
	));

	acf_register_block_type(array(
        'name'              => 'Why BC Cards',
        'title'             => __('Why BC Cards'),
        'description'       => __('The Why BC Cards block.'),
        'render_template'   => '/acf-blocks/why-bc-cards.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'why', 'block', 'bc' ),
	));

	acf_register_block_type(array(
        'name'              => 'Diamonds 5 in 1',
        'title'             => __('Diamonds-5-in-1'),
        'description'       => __('The 5-in-1 Diamonds block.'),
        'render_template'   => '/acf-blocks/diamonds-5-in-1.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'diamonds', 'block', '5-in-1' ),
	));

	acf_register_block_type(array(
        'name'              => 'Diamonds Culture',
        'title'             => __('Diamonds Culture'),
        'description'       => __('The Diamonds culture block.'),
        'render_template'   => '/acf-blocks/diamonds-culture.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'diamonds', 'block', 'culture' ),
	));

	acf_register_block_type(array(
        'name'              => 'Day in the life',
        'title'             => __('day-in-the-life'),
        'description'       => __('The Day in the lifeblock.'),
        'render_template'   => '/acf-blocks/day-in-the-life.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'day', 'life', 'day in the life' ),
	));

	acf_register_block_type(array(
        'name'              => 'Product Tour Table ',
        'title'             => __('Product-Tour-Table'),
        'description'       => __('The Product Tour Table block.'),
        'render_template'   => '/acf-blocks/product-tour-table.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'tour', 'product', 'Product Tour Table ' ),
	));

	acf_register_block_type(array(
        'name'              => 'New Product Tour tool ',
        'title'             => __('New Product Tour tool '),
        'description'       => __('The new Product Tour tool block.'),
        'render_template'   => '/acf-blocks/new-product-tour-tool.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'tour', 'product', 'Product Tour Table ' ),
	));

	acf_register_block_type(array(
        'name'              => 'Events Block',
        'title'             => __('Events'),
        'description'       => __('The Events block.'),
        'render_template'   => '/acf-blocks/events-block.php',
        'icon'              => 'image-rotate',
        'keywords'          => array('Events', 'event' ),
	));

	acf_register_block_type(array(
        'name'              => 'Updated Events Block',
        'title'             => __('Updated Events'),
        'description'       => __('The Updated Events block.'),
        'render_template'   => '/acf-blocks/updated-events-block.php',
        'icon'              => 'image-rotate',
        'keywords'          => array('Events', 'event' ),
	));

	acf_register_block_type(array(
        'name'              => 'Product Tour Tool ',
        'title'             => __('Product-Tour-Tool'),
        'description'       => __('The Product Tour Tool block.'),
        'render_template'   => '/acf-blocks/product-tour-tool.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'tour', 'product', 'Product Tour Tool ' ),
	));
	
	acf_register_block_type(array(
        'name'              => 'Single Quote Banner',
        'title'             => __('Single-Quote-Banner'),
        'description'       => __('The Single Quote Banner block.'),
        'render_template'   => '/acf-blocks/single-quote-banner.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'quote', 'single', 'Single Quote Banner' ),
	));

	acf_register_block_type(array(
        'name'              => 'Benefits Block',
        'title'             => __('Benefits-Block'),
        'description'       => __('The Benefits Block block.'),
        'render_template'   => '/acf-blocks/benefits-block.php',
        'icon'              => 'image-rotate',
        'keywords'          => array( 'block', 'benefits', 'Benefits Block' ),
	));
	
	acf_register_block_type(array(
        'name'              => 'image-text-list',
        'title'             => __('Image Text List Item'),
        'description'       => __('A Image text list item'),
        'render_template'   => '/acf-blocks/image-text-list.php',
        'icon'              => 'playlist-video',
        'keywords'          => array( 'list', 'image', 'image-text' ),
	));
	
	acf_register_block_type(array(
        'name'              => 'image-text-cards',
        'title'             => __('Image Text Cards'),
        'description'       => __('A Image text card block'),
        'render_template'   => '/acf-blocks/image-text-cards.php',
        'icon'              => 'playlist-video',
        'keywords'          => array( 'list', 'image', 'image-text', 'cards' ),
	));

	acf_register_block_type(array(
        'name'              => 'quotes-slider',
        'title'             => __('Quotes Slider'),
        'description'       => __('Quotes slider block'),
        'render_template'   => '/acf-blocks/quotes-slider.php',
        'icon'              => 'format-quote',
        'keywords'          => array( 'quotes', 'slider', 'quotes-slider' ),
	));

	acf_register_block_type(array(
        'name'              => 'Icon List',
        'title'             => __('Icon List'),
        'description'       => __('Icon List block'),
        'render_template'   => '/acf-blocks/icon-list.php',
        'icon'              => 'format-quote',
        'keywords'          => array( 'quotes', 'icon', 'list' ),
	));

	acf_register_block_type(array(
        'name'              => 'Stats',
        'title'             => __('Stats'),
        'description'       => __('Stats block'),
        'render_template'   => '/acf-blocks/stats.php',
        'icon'              => 'format-quote',
        'keywords'          => array( 'stats', 'icon', 'list' ),
	));

	acf_register_block_type(array(
        'name'              => 'Triple Reviews',
        'title'             => __('Triple Reviews'),
        'description'       => __('Triple Reviews block'),
        'render_template'   => '/acf-blocks/triple-reviews.php',
        'icon'              => 'format-quote',
        'keywords'          => array( 'reviews', 'triple', 'list' ),
	));

	acf_register_block_type(array(
        'name'              => 'Industries',
        'title'             => __('Industries'),
        'description'       => __('Industries block'),
        'render_template'   => '/acf-blocks/industries.php',
        'icon'              => 'format-quote',
        'keywords'          => array( 'industries', 'triple', 'list' ),
	));
	
	acf_register_block_type(array(
        'name'              => 'newsletter-images',
        'title'             => __('Newsletter Images'),
        'description'       => __('Newsletter Images Block'),
        'render_template'   => '/acf-blocks/newsletter-images.php',
        'icon'              => 'playlist-video',
        'keywords'          => array( 'Newsletter', 'Image', 'newsletter-images' ),
    ));

	acf_register_block_type(array(
        'name'              => 'PL-games',
        'title'             => __('Premier League Games'),
        'description'       => __('Premier League Games Block'),
        'render_template'   => '/acf-blocks/PL-games.php',
        'icon'              => 'playlist-video',
        'keywords'          => array( 'PL', 'Games', 'Football' ),
    ));

	acf_register_block_type(array(
        'name'              => 'BCU-block',
        'title'             => __('BigChange University Calendar'),
        'description'       => __('BigChange University Calendar Block'),
        'render_template'   => '/acf-blocks/BCU-block.php',
        'icon'              => 'playlist-video',
        'keywords'          => array( 'BCU', 'University', 'Calendar' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gutenberg_starter_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gutenberg_starter_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'gutenberg_starter_theme_content_width', 0 );

/**
 * Register Google Fonts
 */
function gutenberg_starter_theme_fonts_url() {
	$fonts_url = '';

	/*
	 *Translators: If there are characters in your language that are not
	 * supported by Noto Serif, translate this to 'off'. Do not translate
	 * into your own language.
	 */
	$notoserif = esc_html_x( 'on', 'Noto Serif font: on or off', 'gutenberg-starter-theme' );

	if ( 'off' !== $notoserif ) {
		$font_families = array();
		$font_families[] = 'Noto Serif:400,400italic,700,700italic';

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;

}

/**
 * Enqueue scripts and styles.
 */

 $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

 // var_dump($actual_link);
 if(str_contains($actual_link, '/'.'fr'.'/') || str_contains($actual_link, '/'.'cy'.'/') || str_contains($actual_link, '/'.'us'.'/') || str_contains($actual_link, '?lang=nz') || str_contains($actual_link, '?lang=au') || str_contains($actual_link, '?lang=ca')) {
	 wp_enqueue_style('diamond-styles', get_template_directory_uri() . '/compiled/css/min/diamonds-only.css?' . $style_ver_diamonds, array(), $style_ver_diamonds);
 }

function gutenberg_starter_theme_scripts() {
	wp_enqueue_style( 'gutenberg-starter-theme-fonts', gutenberg_starter_theme_fonts_url() );

	$style_ver = filemtime( get_stylesheet_directory() . '/compiled/css/min/style.css' );
	$style_ver_diamonds = filemtime( get_stylesheet_directory() . '/compiled/css/min/diamonds-only.css' );

	if(!is_admin()) {
		wp_enqueue_style('theme-styles', get_template_directory_uri() . '/compiled/css/min/style.css?' . $style_ver, array(), $style_ver);
	}


	$script_ver = filemtime( get_template_directory() . '/compiled/js/bundle.js' );

	if(!is_admin()) {
		wp_deregister_script('jquery');
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, false);
		wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/js/vendor/owl.carousel.min.js', array(), null, false);
		wp_enqueue_script( 'bundle-js',  get_template_directory_uri() . '/compiled/js/bundle.js?' . $script_ver, array(), $script_ver, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gutenberg_starter_theme_scripts' );

/**
 * Sets the extension and mime type for .webp files.
 *
 * @param array  $wp_check_filetype_and_ext File data array containing 'ext', 'type', and
 *                                          'proper_filename' keys.
 * @param string $file                      Full path to the file.
 * @param string $filename                  The name of the file (may differ from $file due to
 *                                          $file being in a tmp directory).
 * @param array  $mimes                     Key is the file extension with value as the mime type.
 */
add_filter( 'wp_check_filetype_and_ext', 'wpse_file_and_ext_webp', 10, 4 );
function wpse_file_and_ext_webp( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }

    return $types;
}

/**
 * Adds webp filetype to allowed mimes
 * 
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/upload_mimes
 * 
 * @param array $mimes Mime types keyed by the file extension regex corresponding to
 *                     those types. 'swf' and 'exe' removed from full list. 'htm|html' also
 *                     removed depending on '$user' capabilities.
 *
 * @return array
 */
add_filter( 'upload_mimes', 'wpse_mime_types_webp' );
function wpse_mime_types_webp( $mimes ) {
    $mimes['webp'] = 'image/webp';

  return $mimes;
}

add_filter( 'wp_nav_menu_items', 'add_manual_menu_items', 10, 2 );

function add_manual_menu_items( $items, $args ) {


    if ($args->theme_location == 'menu-1') {
		$items .= '
			<li class="menu-item-contact">
				<a href="' . get_permalink(1263) . '">Contact us</a>
			</li>	
			<li class="menu-item-demo">
				<a href="javascript:void(0);" class="btn-normal btn-normal--yellow demo">Get a Demo</a>
			</li>
			<li class="menu-item-sign-in">
				<a href="javascript:void(0);" class="btn-normal btn-normal--light-blue login">Sign In</a>
			</li>';
    }
    return $items;
}

// Customize mce editor font sizes
if ( ! function_exists( 'wpex_mce_text_sizes' ) ) {
    function wpex_mce_text_sizes( $initArray ){
        $initArray['fontsize_formats'] = "12px 13px 14px 16px 18px 21px 24px 28px 32px 36px 40px 45px 50px 60px 70px 80px 90px 100px";
        return $initArray;
    }
}
add_filter( 'tiny_mce_before_init', 'wpex_mce_text_sizes' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Theme Settings
 */
require get_template_directory() . '/inc/theme-options.php';

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Site Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'site-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_page(array(
		'page_title' 	=> 'Cookie Settings',
		'menu_title'	=> 'Cookie Settings',
		'menu_slug' 	=> 'cookie-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}

remove_action( 'wp_head', 'rel_canonical' );
function pricing_form() {
	$priceText = get_field('download_price_list', 'option');
	return '<a href="javascript:void(0);" class="btn-normal btn-normal--yellow pricing-btn">' . $priceText . ' </a>';
	
}
add_shortcode( 'pricing', 'pricing_form' );


function table_wrap($content) {
	$content = str_replace('<table', '<div class="table-wrapper"><table', $content);
	$content = str_replace('</table>', '</table></div>', $content);
    return $content;
}
add_filter('the_content', 'table_wrap');
add_filter('acf_the_content', 'table_wrap');


function iframe_wrap($content) {
	$content = str_replace('<iframe', '<div class="iframe-wrapper"><iframe', $content);
	$content = str_replace('</iframe>', '</iframe></div>', $content);
    return $content;
}
add_filter('the_content', 'iframe_wrap');
add_filter('acf_the_content', 'iframe_wrap');


add_action( 'wp_ajax_nopriv_get_news', 'get_news' );
add_action( 'wp_ajax_get_news', 'get_news' );

function get_news() {
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];

	$current_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if( strpos( $current_link, 'bigchangev3' ) !== false ) {
		$catId = 238;
	} else {
		$catId = 281;
	}

    $query_vars['cat'] = $catId;
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			$continue = get_field('string_continue_reading', 'option');
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}
			$dateLoc = wp_trim_words( get_the_excerpt($post->ID), 30, '' );
			if($blogid == 6) {
				$dateLoc = '';
			}

            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="blog__card card"><div class="card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="card__title"><h3>' . get_the_title($post->ID) .'</h3></div><div class="card__content"><p>' . $dateLoc . ' [...]</p></div><div class="card__link">' . $continue . '</div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}

add_action( 'wp_ajax_nopriv_get_ceo_blog', 'get_ceo_blog' );
add_action( 'wp_ajax_get_ceo_blog', 'get_ceo_blog' );

function get_ceo_blog() {
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];
    $query_vars['cat'] = 8;
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			$continue = get_field('string_continue_reading', 'option');
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}
			$dateLoc = wp_trim_words( get_the_excerpt($post->ID), 30, '' );
			if($blogid == 6) {
				$dateLoc = '';
			}

            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="blog__card card"><div class="card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="card__title"><h3>' . get_the_title($post->ID) .'</h3></div><div class="card__content"><p>' . $dateLoc . ' [...]</p></div><div class="card__link">' . $continue . '</div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}

add_action( 'wp_ajax_nopriv_get_big_community', 'get_big_community' );
add_action( 'wp_ajax_get_big_community', 'get_big_community' );

function get_big_community() {
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];
    $query_vars['cat'] = 372;
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			$continue = get_field('string_continue_reading', 'option');
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}
			$dateLoc = wp_trim_words( get_the_excerpt($post->ID), 30, '' );
			if($blogid == 6) {
				$dateLoc = '';
			}

            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="blog__card card"><div class="card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="card__title"><h3>' . get_the_title($post->ID) .'</h3></div><div class="card__content"><p>' . $dateLoc . ' [...]</p></div><div class="card__link">' . $continue . '</div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}

add_action( 'wp_ajax_nopriv_get_blog', 'get_blog' );
add_action( 'wp_ajax_get_blog', 'get_blog' );

function get_blog() {
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];
	$query_vars['category__not_in'] = [8,238,281,343]; //(podcasts: live = 343, staging = 244)
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    if($_POST['cat'] !== 0) {
        $query_vars['cat'] = $_POST['cat'];
    }

    if($_POST['search'] !== '') {
        $query_vars['s'] = $_POST['search'];
    }

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			$continue = get_field('string_continue_reading', 'option');
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}

			$dateLoc = get_the_date('jS F Y', $post->ID) . ' - ';
			if($blogid == 6) {
				$dateLoc = '';
			}

            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="blog__card card"><div class="card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="card__title"><h3>' . get_the_title($post->ID) . '</h3></div><div class="card__content"><p>' . $dateLoc . wp_trim_words( get_the_excerpt($post->ID), 30, '' ) . ' [...]</p></div><div class="card__category">' . $catString . '</div><div class="card__link">' . $continue . '</div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}

add_action( 'wp_ajax_nopriv_get_combined_blog', 'get_combined_blog' );
add_action( 'wp_ajax_get_combined_blog', 'get_combined_blog' );

function get_combined_blog() {
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    if($_POST['cat'] !== 0) {
        $query_vars['cat'] = $_POST['cat'];

		if($_POST['cat'] == 162) {
			$query_vars['category__not_in'] = array(8, 10);
		}
    }

	if($_POST['cat'] == 0 && $_POST['search'] == '') {
		if($_POST['paged'] > 1) {
			$offsetCalc = 9 * ($_POST['paged'] - 1);
			$offsetFinal = $offsetCalc + 3;
			$query_vars['offset'] = $offsetFinal;
		} else {
			$query_vars['offset'] = $_POST['offset'];
		}
    }

    if($_POST['search'] !== '') {
        $query_vars['s'] = $_POST['search'];
    }

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			$continue = get_field('string_continue_reading', 'option');
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}

            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="combined-blog__card combined-card"><div class="combined-card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="combined-card__lower"><div class="combined-card__lower-wrapper"><div class="combined-card__title"><h3><span>' . get_the_title($post->ID) . '</span></h3></div><div class="combined-card__link"><p>' . $continue . '</p></div></div></div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}

add_action( 'wp_ajax_nopriv_get_case_studies', 'get_case_studies' );
add_action( 'wp_ajax_get_case_studies', 'get_case_studies' );

function get_case_studies() {
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    if($_POST['cat'] !== 0) {
        $query_vars['category__and'] = array($_POST['cat']);
    }

    if($_POST['search'] !== '') {
        $query_vars['s'] = $_POST['search'];
	}
	
	$query_vars['post__not_in'] = array($_POST['featured']);

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}

			$dateLoc = get_the_date('jS F Y', $post->ID) . ' - ';
			if($blogid == 6) {
				$dateLoc = '';
			}

            $html_str .= '<a data-test href="' . get_the_permalink($post->ID) . '" class="case-study__card card"><div class="card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="card__title"><h3>' . get_the_title($post->ID) . '</h3></div><div class="card__category">' . $catString . '</div><div class="card__content"><p>'. $dateLoc . wp_trim_words( get_the_excerpt($post->ID), 24, '' ) . ' [...]</p></div><div class="card__link">Read more...</div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>'	;	
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}


add_action( 'init', 'theme_post_types_init' );
function theme_post_types_init() {

	register_post_type( 'vacancies',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Vacancies' ),
				'singular_name' => __( 'Vacancy' )
			),
			'public' => true,
			'has_archive' => false,
			'show_in_rest' => true,
		)
	);
}


add_action( 'init', 'create_subjects_hierarchical_taxonomy', 0 );
 
//create a custom taxonomy name it subjects for your posts
 
function create_subjects_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Locations', 'taxonomy general name' ),
    'singular_name' => _x( 'location', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Locations' ),
    'all_items' => __( 'All Locations' ),
    'parent_item' => __( 'Parent location' ),
    'parent_item_colon' => __( 'Parent location:' ),
    'edit_item' => __( 'Edit location' ), 
    'update_item' => __( 'Update location' ),
    'add_new_item' => __( 'Add New location' ),
    'new_item_name' => __( 'New location Name' ),
    'menu_name' => __( 'Locations' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('locations',array('vacancies'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'subject' ),
  ));


  $jobTypeLabels = array(
    'name' => _x( 'JobCategories', 'taxonomy general name' ),
    'singular_name' => _x( 'JobCategory', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Job Categories' ),
    'all_items' => __( 'All Job Categories' ),
    'parent_item' => __( 'Parent Job Category' ),
    'parent_item_colon' => __( 'Parent Job Category:' ),
    'edit_item' => __( 'Edit Job Category' ), 
    'update_item' => __( 'Update Job Category' ),
    'add_new_item' => __( 'Add New Job Category' ),
    'new_item_name' => __( 'New Job Category Name' ),
    'menu_name' => __( 'Job Categories' ),
  );    
 
// Now register the taxonomy
  register_taxonomy('JobCategories',array('vacancies'), array(
    'hierarchical' => true,
    'labels' => $jobTypeLabels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'subject' ),
  ));
}

function time_elapsed_string($datetime, $full = false) {
    $now = new DateTime;
    $ago = new DateTime($datetime);
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


add_action( 'wp_ajax_nopriv_get_jobs', 'get_jobs' );
add_action( 'wp_ajax_get_jobs', 'get_jobs' );

function get_jobs() {
    $query_vars['post_type'] = 'vacancies';
    $query_vars['order'] = 'ASC';
    $query_vars['posts_per_page'] = -1;
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    $query_vars['tax_query'] = array(
		'relation' => $_POST['type'],
		array(
			'taxonomy' => 'locations',
			'field'    => 'term_id',
			'terms'    => $_POST['locs'],
		),
		array(
			'taxonomy' => 'JobCategories',
			'field'    => 'term_id',
			'terms'    => $_POST['cats'],
		),
	);

	

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$jobCat = get_the_terms( $post->ID, 'JobCategories' );
            $jobCatString = '';
            
            foreach ($jobCat as $job) {
                $jobCatString .= $job -> name . ', ';
            }

			$jobCatString = rtrim($jobCatString, ", ");
			
			$location = get_the_terms( $post->ID, 'locations' );
            $locationString = '';
            
            foreach ($location as $loc) {
                $locationString .= $loc -> name . ', ';
            }

			$locationString = rtrim($locationString, ", ");

			$time = time_elapsed_string(get_the_date());


            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="job-listing"> <div class="job-listing__logo"> </div> <div class="job-listing__title-cat"><div class="job-listing__title"><p>' . get_the_title($post->ID) . '</p></div><div class="job-listing__category"><p>' . $jobCatString . '</p></div></div><div class="job-listing__loc-time"><div class="job-listing__location"><p>' . $locationString . '</p></div><div class="job-listing__time"><p>' . $time . '</p></div></div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no jobs matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}
#wpcf7_add_shortcode( 'cf7_extra_fields', 'cf7_extra_fields_func', true );
wpcf7_add_form_tag( 'cf7_extra_fields', 'cf7_extra_fields_func', true );
function cf7_extra_fields_func( $atts ) {
   $html = '';
   $html .= '<input type="hidden" name="page-title" value="'.get_the_title().'" />';
   $html .= '<input type="hidden" name="page-url" value="'.get_the_permalink().'" />';
   return $html;
}

//Added excerpts to pages (due to requirement on BigNews)
add_post_type_support( 'page', 'excerpt' ); 

function getRequestHeaders() {
    $headers = array();
    foreach($_SERVER as $key => $value) {
        if (substr($key, 0, 5) <> 'HTTP_') {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    return $headers;
}

add_filter( 'body_class','my_body_classes' );
function my_body_classes( $classes ) {

	$headers = getRequestHeaders();
	$classToAdd = '';
	foreach ($headers as $header => $value) {
		if (strpos($header, 'Cloudfront-Viewer-Country') !== false) {
			$classToAdd = $value;
		}
	}
	
	$classes[] = 'lang-' . $classToAdd;
     
    return $classes;
     
}

add_filter( 'wp_robots', function( $robots ) {
	
	$robotsLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $staging = 0;

	if(strpos($robotsLink, 'proactivecode') !== false) {
		$staging = 1;
	}

	if($staging == 1) {
		$robots['noindex'] = true;
		$robots['index'] = false;
		$robots['nofollow'] = true;
		$robots['follow'] = false;
	} else {
		$robots['noindex'] = false;
		$robots['index'] = true;
		$robots['nofollow'] = false;
		$robots['follow'] = true;
		$robots['max-snippet']       = '-1';
		$robots['max-image-preview'] = 'large';
		$robots['max-video-preview'] = '-1';
	}

	if ( is_page_template( 'template-ppc-capterra.php' ) || is_page_template( 'template-ppc-normal.php' ) || is_page_template( 'template-ppc-fr.php' )) {
		$robots['noindex'] = true;
		$robots['index'] = false;
		$robots['nofollow'] = true;
		$robots['follow'] = false;
	}

    return $robots;
} );

function restructure_template_hierarchy(){

	if (get_post_type() == 'vacancies'){
		include( get_template_directory().'/single-vacancies.php' );
    	exit;
	} else if (get_post_type() == 'attachment'){
		include( get_template_directory().'/single-attachment.php' );
    	exit;
	} else {
		include( get_template_directory().'/single.php' );
		exit;
	}
}
add_action( 'single_template', 'restructure_template_hierarchy' );

add_action( 'wp_ajax_nopriv_get_podcasts', 'get_podcasts' );
add_action( 'wp_ajax_get_podcasts', 'get_podcasts' );

function get_podcasts() {

	$robotsLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    $staging = 0;

	if(strpos($robotsLink, 'proactivecode') !== false) {
		$staging = 1;
	}
    $query_vars['post_type'] = 'post';
    $query_vars['order'] = $_POST['sort']; 
    $query_vars['posts_per_page'] = 9;
	$query_vars['paged'] = $_POST['paged'];
	if ($staging == 1) {
		$query_vars['cat'] = 244;  //live = 343, staging = 244
	} else {
		$query_vars['cat'] = 343;
	}
	$query_vars['post_status'] = 'publish';
	$link = $_POST['url'];
	
	$blogid = 1;

	$blogid = 1; //default UK
	if( strpos( $link, '/fr/' ) !== false ) {
		$blogid = 6;
	}

	if( strpos( $link, '/cy/' ) !== false ) {
		$blogid = 7;
	}

	if( strpos( $link, '/us/' ) !== false ) {
		$blogid = 8;
	}

	if( strpos( $link, '/nz/' ) !== false ) {
		$blogid = 9;
	}

	if( strpos( $link, '/au/' ) !== false ) {
		$blogid = 10;
	}

	switch_to_blog($blogid);

    $ajax_query = new WP_Query( $query_vars );
	$posts = $ajax_query->posts;
    $html_str = '';

    if($ajax_query->have_posts()) {
        while ( $ajax_query->have_posts() ) {
            $ajax_query->the_post();
			$categories = wp_get_post_categories(get_the_ID());
			$catString = '';
			$continue = get_field('string_continue_reading', 'option');
			foreach($categories as $cat){
				$category = get_category($cat);
				if($category -> term_id == 8) {
					$catLink = get_permalink(4373);
				} else {
					$catLink = get_permalink(1267) . '?catid=' . $category -> term_id;
				}
				$catString .= '<p tabindex="0" data-href="' . $catLink . '" data-catid="' . $category -> term_id . '">' . $category -> name . '</p>';
			}
			$dateLoc = wp_trim_words( get_the_excerpt($post->ID), 30, '' );
			if($blogid == 6) {
				$dateLoc = '';
			}

            $html_str .= '<a href="' . get_the_permalink($post->ID) . '" class="blog__card card"><div class="card__image" style="background-image:url(' . get_the_post_thumbnail_url($post->ID) . ');"></div><div class="card__title"><h3>' . get_the_title($post->ID) .'</h3></div><div class="card__content"><p>' . $dateLoc . ' [...]</p></div><div class="card__link">' . $continue . '</div></a>';
        }
    } else {
        $html_str = '<p class="no-posts">There are currently no posts matching your criteria.</p>';
    }
    
	$data_obj = array(
		'max_pages' => $ajax_query->max_num_pages,
		'html' => $html_str
	);

	$return_obj = json_encode($data_obj);
    
    echo $return_obj;
    die();
}

//Remove the WP titles from the header as these are added via a plugin (not on France):
function remove_titles() {
    if (strpos($_SERVER['REQUEST_URI'], '/fr/') === false) {
        remove_action('wp_head', '_wp_render_title_tag', 1);
    }
}
add_action('init', 'remove_titles');