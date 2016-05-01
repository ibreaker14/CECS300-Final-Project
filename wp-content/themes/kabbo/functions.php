<?php
/* 	KABBO Theme's Functions
	Copyright: 2012-2014, D5 Creation, www.d5creation.com
	Based on the Simplest D5 Framework for WordPress
	Since KABBO 1.0
*/

// Load the D5 Framework Optios Page and Meta Page
	function kabbo_visual_options_setup() {
		
	add_theme_support( 'automatic-feed-links' );
  	register_nav_menus( array( 'main-menu' => "Main Menu" ) );


//	Set the content width based on the theme's design and stylesheet.
	global $content_width;
	if ( ! isset( $content_width ) ) $content_width = 650;
 
    define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
    require_once( get_template_directory() . '/inc/options-framework.php');
  	function kabbo_ppp() { return ( 'post_type=post&&posts_per_page=2&&ignore_sticky_posts=1' );}
	
	// 	This theme uses Featured Images (also known as post thumbnails) for per-post/per-page Custom Header images
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)

	// additional image sizes
	// delete the next line if you do not need additional image sizes
	add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)
	add_image_size( 'slide-thumb', 520, 270 ); //for featured sliders


	// 	WordPress 3.4 Custom Background Support	
	add_theme_support( 'custom-background');

	// 	WordPress 3.4 Custom Header Support				
	$kabbo_custom_header = array(
	'default-image'          => get_template_directory_uri() . '/images/logo.png',
	'random-default'         => false,
	'width'                  => 300,
	'height'                 => 90,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => 'EEEEEE',
	'header-text'            => false,
	'uploads'                => true,
	'wp-head-callback' 		 => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', $kabbo_custom_header );
	
	}
 	add_action( 'after_setup_theme', 'kabbo_visual_options_setup' );
	
	

// 	Tell WordPress for wp_title in order to modify document title content
	function kabbo_filter_wp_title( $title ) {
    $site_name = get_bloginfo( 'name' );
    $kabbo_title = $site_name . $title;
    return $kabbo_title;
	}
	add_filter( 'wp_title', 'kabbo_filter_wp_title' );
	
	add_editor_style('editor-style.css');

// 	Functions for adding script
	function kabbo_enqueue_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { 
		wp_enqueue_script( 'comment-reply' ); 
	}
	
	wp_enqueue_style('kabbo-style', get_stylesheet_uri(), false);
	wp_enqueue_style('kabbo-gfonts', '//fonts.googleapis.com/css?family=Coda:400', false );
	 ?>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php
	
	if (is_front_page()):
	wp_enqueue_script( 'kabbo-slider-modernizr', get_template_directory_uri() . '/js/modernizr.custom.28468.js' );
	wp_enqueue_script( 'kabbo-slider-cslider', get_template_directory_uri() . '/js/jquery.cslider.js', array( 'jquery' ) );
	wp_enqueue_style( 'kabbo-slider-style', get_template_directory_uri() . '/css/slider.css' ); 
	endif;
	
	}
	add_action( 'wp_enqueue_scripts', 'kabbo_enqueue_scripts' );

//Multi-level pages menu  
function kabbo_page_menu() {
	echo '<ul class="m-menu">'; wp_list_pages(array('sort_column'  => 'menu_order, post_title', 'title_li'  => '' )); echo '</ul>';
}

// 	Functions for adding some custom code within the head tag of site
	function kabbo_custom_code() {
	
?>
	
	<style type="text/css">
	.site-title a, 
	.site-title a:active, 
	.site-title a:hover {
	
	color: #<?php echo get_header_textcolor(); ?>;
	}
		.entrytext {
    background: <?php if (is_page()): echo 'transparent;'; endif; ?>
    padding: 10px 0;
	}
	
	</style>
	
	<?php 
	}
	
	add_action('wp_head', 'kabbo_custom_code');
	

//	function tied to the excerpt_more filter hook.
	function kabbo_excerpt_length( $length ) {
	global $kabbo_excerpt_length;
	if ($kabbo_excerpt_length) {
    return $kabbo_excerpt_length;
	} else {
    return 50; //default value
    } }
	add_filter( 'excerpt_length', 'kabbo_excerpt_length', 999 );
	
	function kabbo_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '" class="read-more">Read More</a>';
	}
	add_filter('excerpt_more', 'kabbo_excerpt_more');
	
	// Content Type Showing
	function kabbo_content() { the_content('<span class="read-more">Read More</span>'); }
	/*function kabbo_credit() { echo '<div id="creditline">&copy; ' . date("Y"). ': ' . get_bloginfo( 'name' ) . '<span class="credit">  | KABBO Theme by: <a 	   href="http://d5creation.com" target="_blank"><img  src="' . get_template_directory_uri() . '/images/d5logofooter.png" /> D5 Creation</a> | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a></span></div>'; }*/
	function kabbo_credit() { echo '<div id="creditline">&copy; ' . date("M Y"). ': ' . get_bloginfo( 'name' ) . '<span class="credit">  | KABBO Child Theme by: Mingtau Li | Powered by: <a href="http://wordpress.org" target="_blank">WordPress</a></span></div>'; }
	
	
//	Registers the Widgets and Sidebars for the site
	function kabbo_widgets_init() {
	
	register_sidebar( array(
		'name' => 'Front Page Sidebar',
		'id' => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	
	register_sidebar( array(
		'name' => 'Main Sidebar',
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	
	register_sidebar( array(
		'name' => 'Footer Area One',
		'id' => 'sidebar-3',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area Two',
		'id' => 'sidebar-4',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => 'Footer Area Three',
		'id' => 'sidebar-5',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
	register_sidebar( array(
		'name' => 'Footer Area Four',
		'id' => 'sidebar-6',
		'description' => 'An optional widget area for your site footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
		
	}
	add_action( 'widgets_init', 'kabbo_widgets_init' );
	
	
//	Remove WordPress Custom Header Support for the theme kabbo
//	remove_theme_support('custom-header');