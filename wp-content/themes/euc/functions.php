<?php
/**
 * euc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package euc
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', rand() );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function euc_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on euc, use a find and replace
		* to change 'euc' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'euc', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'euc' ),
			'footer-list-1' => esc_html__( 'Footer List 1', 'euc' ),
			'footer-list-2' => esc_html__( 'Footer List 2', 'euc' ),
			'footer-list-3' => esc_html__( 'Footer List 3', 'euc' ),
			'footer-list-4' => esc_html__( 'Footer List 4', 'euc' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'euc_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'euc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function euc_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'euc_content_width', 640 );
}
add_action( 'after_setup_theme', 'euc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function euc_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'euc' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'euc' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'euc_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function euc_scripts() {
	wp_enqueue_style( 'euc-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data('euc-style', 'rtl', 'replace' );
	wp_enqueue_style( 'euc-style-bootstrap-rtl', get_template_directory_uri() . "/assets/css/plugin/bootstrap.rtl.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'euc-style-font-awesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css", array(), _S_VERSION );
	wp_enqueue_style( 'euc-style-googleapis', "//fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap", array(), _S_VERSION );
	wp_enqueue_style( 'euc-style-slick-carousel-theme', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css", array(), _S_VERSION );
	wp_enqueue_style( 'euc-style-slick-carousel', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css", array(), _S_VERSION );
	wp_enqueue_style( 'euc-min-style', get_template_directory_uri() . "/assets/css/style.css", array(), _S_VERSION );
	
	wp_enqueue_script( 'euc-script-jQuery', get_template_directory_uri() . '/assets/js/plugin/jQuery.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'euc-script-bootstrap', get_template_directory_uri() . '/assets/js/plugin/bootstrap.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'euc-script-slick-carousel', "//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js", array(), _S_VERSION, true );
	wp_enqueue_script( 'euc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'euc-min-script', get_template_directory_uri() . '/assets/js/script.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'euc_scripts' );

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








if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Site General Settings',
		'menu_title'	=> 'Site Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Feedback Section',
		'menu_title'	=> 'Feedback Section',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'FAQ Page',
		'menu_title'	=> 'FAQ Page',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}






// Our custom post type function
function create_posttype() {
    register_post_type( 'courses',
        array(
            'labels' => array(
                'name' => __( 'Courses' ),
                'singular_name' => __( 'courses' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'courses'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-welcome-learn-more',
			'supports' => array( 'title', 'excerpt', 'editor','thumbnail', 'tags' ),  
			'taxonomies'         => array( 'category', 'post_tag' ),
        )
    );
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Services' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-networking',
			'supports' => array( 'title', 'excerpt', 'editor','thumbnail' ),
        )
    );
    register_post_type( 'instructors',
        array(
            'labels' => array(
                'name' => __( 'Instructors' ),
                'singular_name' => __( 'instructors' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'instructors'),
            'show_in_rest' => true,
			'menu_icon' => 'dashicons-welcome-learn-more',
			'supports' => array( 'title', 'excerpt', 'editor','thumbnail' ),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );