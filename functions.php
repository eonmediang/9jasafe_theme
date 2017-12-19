<?php
/**
 * 9jasafe theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package naijasafe
 */

if ( ! function_exists( 'naijasafe_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function naijasafe_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on 9jasafe theme, use a find and replace
	 * to change 'naijasafe' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'naijasafe', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'naijasafe' ),
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
	add_theme_support( 'custom-background', apply_filters( 'naijasafe_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'naijasafe_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function naijasafe_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'naijasafe_content_width', 640 );
}
add_action( 'after_setup_theme', 'naijasafe_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function naijasafe_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'naijasafe' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'naijasafe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'naijasafe' ),
		'id'            => 'sidebar-3',
		'description'   => esc_html__( 'Add footer widgets here.', 'naijasafe' ),
		'before_widget' => '<section id="%1$s" class="col-sm-4 footer-widget widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Home sidebar', 'naijasafe' ),
		'id'            => 'sidebar-4',
		'description'   => esc_html__( 'Add widgets here.', 'naijasafe' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s" data-scroll-reveal="enter bottom over 0.5s after 0.3s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'naijasafe_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function naijasafe_scripts() {

	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], '3.3.2' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', [], '4.2.0' );
	wp_enqueue_style( 'theme-font', 'https://fonts.googleapis.com/css?family=Oswald:400,700', false );
	wp_enqueue_style( 'naijasafe-style', get_stylesheet_uri(), [], '1.0.6' );
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.1.1.min.js', array(), '20151215', true );
	// wp_enqueue_script( 'naijasafe-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'naijasafe-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	// wp_enqueue_script( 'naijasafe-js', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'naijasafe_scripts' );

/** Custom functions **/
$naijasafe_modals_array = [];

function appendModals( $modals = [] )
{
	global $naijasafe_modals_array;
	$naijasafe_modals_array = array_merge( $naijasafe_modals_array, $modals );
}

function loadModals()
{
	global $naijasafe_modals_array;
	if ( empty( $naijasafe_modals_array ) ) return;
	$dir = get_template_directory().'/template-parts/modals';
	$ext = '.php';
	foreach ($naijasafe_modals_array as $modal) {
		$file = "{$dir}/{$modal}{$ext}";
		if ( file_exists( $file ) ) require_once $file;
	}
}

add_action('naijasafe_load_modals', 'loadModals');


function getMetaNames( $arrayData )
{
	$data = array();
	if ( !empty( $arrayData ) && count( $arrayData > 0)){
		foreach ($arrayData as $ar){
			$data[] = $ar->name;
		}

		return implode(	', ', $data);
	}
	
}

function jsonResponse($response_code = 200, $msg = '')
{
	header('Content-Type: application/json');
	header( $response_code );
	if ( ! empty( $msg ) ) echo json_encode( $msg );
}

function new_excerpt_more ($more) {
	global $post;
	return '... <a class="excerpt" href="'.get_permalink($post->ID).'">Read more <i class="fa fa-chevron-circle-right"></i></a>';
}

add_filter('excerpt_more','new_excerpt_more');

function new_excerpt_length ($length) {
	return 30;
}

add_filter('excerpt_length','new_excerpt_length');

function custom_excerpt( $content, $length = 300 ){

	$con_len = strlen( $content );
	if ( $con_len < $length ) return strip_tags( $content );
	$truncText = substr($content, 0, $length );
	$stringpos = strripos($truncText,' ');
	$stringposComma = strripos($truncText,",");
	if (($stringpos - $stringposComma) == 1){
		$stringpos = $stringposComma;
	}
	return strip_tags( substr($truncText, 0,$stringpos) )."...";
}

function split_sentence( $content, $num = 1 ){

	$final_text = '';
	$split_text = $content;
	for ( $i  = 0; $i < $num; $i++ ){

		$dot_pos = stripos( $split_text, '.') + 1;
		$final_text .= substr( $split_text, 0, $dot_pos ) . ' ';
		$split_text = ltrim( substr( $split_text, $dot_pos ) );
	}

	$final_text = rtrim( $final_text );

	return $final_text;
}

function captionText( $content, $num = 1)
{
	return strip_tags( split_sentence( $content, $num ) );
}

if ( ! function_exists('bgStyle') ){

	function bgStyle( $img )
	{
	 	echo "background: url('{$img}') center top #000; background-size: cover";
	 }
}

function get_posts_obj( $args )
{
	global $post;
	$posts = get_posts( $args ); $data = array(); $img_thumb = get_template_directory_uri().'/assets/img/default_thumbnail.png'; $img_feature = get_template_directory_uri().'/assets/img/default_thumbnail.png';

	if ( $posts ){

		foreach ($posts as $post) {
			
			setup_postdata( $post );
			$entry = new stdClass;
			$entry->permalink = esc_url( get_permalink() );
			$entry->title = strip_tags( get_the_title() );
			$entry->thumbnail_sm = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_ID(), 'small') : $img_thumb;
			$entry->thumbnail_md = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_ID(), 'medium') : $img_thumb;
			$entry->thumbnail_lg = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url( get_the_ID(), 'large') : $img_feature;
			$entry->post_caption = get_post_meta( get_the_ID(), 'showyblog_post_caption', true);
			$p =  ( $entry->post_caption ) ? $entry->post_caption : '';
			$entry->excerpt = ( $p !== '' ) ? $p : custom_excerpt( get_the_content(), 180 );
			$entry->tags = ( has_tag() ) ? getMetaNames( get_the_tags() ) : '';
			$entry->category = getMetaNames( get_the_category() );
			$entry->time = get_the_time();
			$entry->timestamp = get_the_time('U');

			array_push( $data, $entry );
		}

		wp_reset_postdata();
	}

	return $data;
}

function print_date_or_time( $timestamp ){

	$pd = new PrettyDate;

	$time = $timestamp;
	$current_time = time();
	$date = strtoupper( date( 'D', $time ) );
	$day_old_post_time = $time + (60*60*24);

	if ( ( strtoupper( date('D') ) !== $date ) || $current_time >= $day_old_post_time ) return date('M j, \'y @ g:i a', $time);
	return $pd->calcDate( $timestamp );
	return date('g:i a', $time);

}

function autoloadThemeClasses($classname)
{

	$pathToFile = get_template_directory().'/inc/classes/'.ucfirst( $classname ).'.php';
	if ( file_exists( $pathToFile ))
		require_once $pathToFile;
}

spl_autoload_register('autoloadThemeClasses');

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
