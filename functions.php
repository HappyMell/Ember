<?php
/**
 * Theme functions and definitions
 */

 if ( ! function_exists( 'theme_setup' ) ) :
 /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which
  * runs before the init hook. The init hook is too late for some features, such
  * as indicating support for post thumbnails.
  */
 function theme_setup() {
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

  // Enable custom menus
  // =======================
  add_theme_support( 'menus' );

 	// This theme uses wp_nav_menu() in one location.
 	register_nav_menus( array(
    
 		'main-menu' => esc_html__( 'Main Menu', 'mellisa-theme' ),
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

 	// Add theme support for selective refresh for widgets.
 	add_theme_support( 'customize-selective-refresh-widgets' );
 }
 endif;
 add_action( 'after_setup_theme', 'theme_setup' );

 // Adds CSS
 // ============
 function theme_styles() {
   // Example with external URL
   // wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
   // Example with internal file
	wp_enqueue_style( 'hoverCSS', get_template_directory_uri() . './node_modules/hover.css/css/hover.css' );
	wp_enqueue_style( 'mainCSS', get_template_directory_uri() . './css/style.min.css' );

 }
 add_action( 'wp_enqueue_scripts', 'theme_styles');

 // Adds JS
 // ==========
 function theme_js() {
   // Example with external URL
	wp_enqueue_script( 'mainJS', get_template_directory_uri() . './js/main.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'slideshowJS', get_template_directory_uri() . './js/slideshow.js', array('jquery'), '', true);
	wp_enqueue_script( 'malsupJS', 'http://malsup.github.io/min/jquery.cycle.all.min.js', array('jquery'), '', true);


   // Example with internal file
   // wp_enqueue_script( 'mainJS', get_template_directory_uri() . '/js/main.js', array('jquery'), '', true);
 }
 add_action( 'wp_enqueue_scripts', 'theme_js');

// Implement Additional files
//==========
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
* Load Custom Posts file
*/
require get_template_directory() . '/inc/custom-posts.php';

/**
* Load Custom Taxonomies file
*/
require get_template_directory() . '/inc/custom-taxonomies.php';

/**
* Where to edit login page and dashboard logo
*/
require get_template_directory() . '/inc/theme-appearance.php';


require get_template_directory() . '/inc/register-block.php';


//Adding a custom options field page

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Header Settings'),
            'menu_title'    => __('Header Settings'),
            'menu_slug'     => 'header-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

//Widen Gutenberg Blocks

/**
 * Register support for Gutenberg wide images in your theme
 */
function mytheme_setup() {
  add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'mytheme_setup' );