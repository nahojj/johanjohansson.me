<?php
/**
 * johanjohansson functions and definitions
 *
 * @package johanjohansson
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'johanjohansson_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function johanjohansson_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on johanjohansson, use a find and replace
	 * to change 'johanjohansson' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'johanjohansson', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'johanjohansson' ),
	) );
	
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link'
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'johanjohansson_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // johanjohansson_setup
add_action( 'after_setup_theme', 'johanjohansson_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function johanjohansson_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'johanjohansson' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'johanjohansson_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function johanjohansson_scripts() {
	wp_enqueue_style( 'johanjohansson-style', get_stylesheet_uri() );

	wp_enqueue_script( 'johanjohansson-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'johanjohansson-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'johanjohansson-main', get_template_directory_uri() . '/js/main.js', array(), '20130115', true );

	wp_enqueue_script( 'johanjohansson-bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'johanjohansson_scripts' );


#THEME SUPPORT: Post Thumbnaila
add_theme_support('post-thumbnails');


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// Word limit using the_excerpt
function custom_excerpt_length( $length ) {
	return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Remove what's echo out og the end using the_excerpt
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');