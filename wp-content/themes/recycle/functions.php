<?php
/**
 * Recycle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Recycle
 */

if ( ! function_exists( 'recycle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function recycle_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Recycle, use a find and replace
	 * to change 'recycle' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'recycle', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'recycle' ),
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
	add_theme_support( 'custom-background', apply_filters( 'recycle_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'recycle_setup' );

function  recycle_default_menu(){
	echo '<ul class="nav navbar-nav navbar-right">';
	echo '<li><a href="'.esc_url(home_url('/')).'">Home </a></li>';
	echo '</ul>';
	}	

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function recycle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'recycle_content_width', 640 );
}
add_action( 'after_setup_theme', 'recycle_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function recycle_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__('Sidebar', 'recycle'),
		'id'            => 'sidebar',
		'description'   => esc_html__('Add widgets here.', 'recycle'),
		'before_widget' => '<div class="blog-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4><hr class="separator">',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer About', 'recycle' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'recycle' ),
		'before_widget' => '<div class="footer-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Quick Links', 'recycle' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'recycle' ),
		'before_widget' => '<div class="footer-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Recent Posts', 'recycle' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'recycle' ),
		'before_widget' => '<div class="footer-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Contact Info', 'recycle' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'recycle' ),
		'before_widget' => '<div class="footer-contact">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Copyright', 'recycle' ),
		'id'            => 'footer-5',
		'description'   => esc_html__( 'Add widgets here.', 'recycle' ),
		'before_widget' => '',
		'after_widget'  => '',
	) );
}
add_action( 'widgets_init', 'recycle_widgets_init' );

/**
 * Enqueue scripts and styles and fonts.
 */
function recycle_fonts_url() {
	$fonts_url = '';
	
	$open_sans = _x( 'on', 'Open Sans font: on or off', 'recycle' );
	 
	if ('off' !== $open_sans ) {
	$font_families = array();
	 
	if ( 'off' !== $open_sans ) {
	$font_families[] = 'Open Sans:700italic,400,800,600,700';
	}
	 
	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),
	);
	
	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );
}

function recycle_scripts() {
	wp_enqueue_style( 'recycle-fonts', recycle_fonts_url(), array(), null );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'popup-css', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css' );
	wp_enqueue_style( 'imagehover', get_template_directory_uri() . '/css/imagehover.min.css' );
	wp_enqueue_style( 'dropdown-css', get_template_directory_uri() . '/css/bootstrap-dropdownhover.min.css' );
	wp_enqueue_style( 'recycle-responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'recycle-style', get_stylesheet_uri() );

	wp_enqueue_script("jquery");
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '20151215', true );
	wp_enqueue_script( 'dropdown-js', get_template_directory_uri() . '/js/bootstrap-dropdownhover.min.js', array(), '20151215', true );
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/isotope.min.js', array(), '20151215', true );
	wp_enqueue_script( 'popup-js', get_template_directory_uri() . '/js/magnific-popup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/js/smooth-scroll.js', array(), '20151215', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array(), '20151215', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/counterup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.min.js', array(), '20151215', true );
	wp_enqueue_script( 'timer', get_template_directory_uri() . '/js/coundown-timer.js', array(), '20151215', true );
	wp_enqueue_script( 'recycle-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'recycle_scripts' );

/**
 * Walker Class
 */
require get_template_directory() . '/wp_menu.php';

/**
 * Apply theme's stylesheet to the visual editor.
 */
function recycle_add_editor_styles() {

    add_editor_style( get_stylesheet_uri() );

}
add_action( 'init', 'recycle_add_editor_styles' );	

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

/**
 * TGM Setup.
 */
require_once(get_template_directory()."/inc/tgm.php");

/**
 * Load Metabox.
 */

if ( !class_exists( 'CMB2_Bootstrap_2231' ) && file_exists( plugin_dir_path( __FILE__ ) . '/cmb2/init.php' ) ) {
    require_once( plugin_dir_path( __FILE__ ) . '/cmb2/init.php' );
}
require get_template_directory() . '/inc/cmb2/functions.php';
require get_template_directory() . '/inc/cmb2/cmb-field-sorter.php';

/**
 * Load Redux Framework.
 */
if ( !class_exists( 'ReduxFramework' ) && file_exists( plugin_dir_path( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( plugin_dir_path( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( get_template_directory()."/inc/recycle-config.php") ) {
    require_once(get_template_directory()."/inc/recycle-config.php");
}
add_action( 'admin_menu', 'recycle_remove_redux_menu',12 );
function recycle_remove_redux_menu() {
    remove_submenu_page('tools.php','redux-about');
}

/**
 * Hide editor from Page template
 */
add_action( 'admin_head', 'hide_editor' );
function hide_editor() {
	$template_file = $template_file = basename( get_page_template() );
	if($template_file == 'sorter.php'){ // template
		remove_post_type_support('page', 'editor');
	}
}