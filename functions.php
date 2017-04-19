<?php
/**
 * myowncorks functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package myowncorks
 */

if ( ! function_exists( 'myowncorks_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function myowncorks_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on myowncorks, use a find and replace
	 * to change 'myowncorks' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'myowncorks', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'myowncorks' ),
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
	add_theme_support( 'custom-background', apply_filters( 'myowncorks_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'myowncorks_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function myowncorks_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'myowncorks_content_width', 640 );
}
add_action( 'after_setup_theme', 'myowncorks_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function myowncorks_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'myowncorks' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'myowncorks' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'myowncorks_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function myowncorks_scripts() {
  wp_enqueue_style( 'myowncorks-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style( 'myowncorks-grid', get_template_directory_uri() . '/css/grid.css');
  wp_enqueue_style( 'myowncorks-style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style( 'myowncorks-media', get_template_directory_uri() . '/css/media.css');
  wp_register_style( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css');
  wp_register_style( 'jquery', 'https://fonts.googleapis.com/css?family=Alegreya+Sans|Roboto+Mono', '', '', false);
  wp_enqueue_style('jquery');
  
  	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js');
	wp_register_script( 'jquery', 'https://use.fontawesome.com/813411220b.js');
	wp_enqueue_script( 'jquery' );
  	wp_enqueue_script( 'myowncorks-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.pkgd.min.js', array(), '20151215', true );
	wp_enqueue_script( 'grid-masonry', get_template_directory_uri() . '/js/masonry-grid.js', array(), '20151215', true );
	wp_enqueue_script( 'loader', get_template_directory_uri() . '/js/loader.js', array(), '20151215', true );
  
	wp_enqueue_script( 'myowncorks-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
;

	wp_enqueue_script( 'myowncorks-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'myowncorks_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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



remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<body>';
}

function my_theme_wrapper_end() {
  echo '</body>';
}




add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}