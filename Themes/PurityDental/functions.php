<?php

/* ----------------------------------------------------------------------------------
	Ekwa Marketing Theme only works in WordPress 4.4 or later.
---------------------------------------------------------------------------------- */
if ( version_compare( $GLOBALS['wp_version'], '4.4-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'bizgrowtheme' ) ) :
/* ----------------------------------------------------------------------------------
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * Create your own bizgrowtheme() function to override in a child theme.
 *
 * @since Ekwa Marketing Theme 1.0
---------------------------------------------------------------------------------- */
function bizgrowtheme() {
/* ----------------------------------------------------------------------------------
 * Make theme available for translation.
 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/bizgrowtheme
 * If you're building a theme based on Ekwa Marketing Theme, use a find and replace
 * to change 'bizgrowtheme' to the name of your theme in all the template files
---------------------------------------------------------------------------------- */
load_theme_textdomain( 'bizgrowtheme' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

/* ----------------------------------------------------------------------------------
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
---------------------------------------------------------------------------------- */
add_theme_support( 'title-tag' );

/* ----------------------------------------------------------------------------------
 * Enable support for Post Thumbnails on posts and pages.
 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
---------------------------------------------------------------------------------- */
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1200, 9999 );

/* ----------------------------------------------------------------------------------
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
---------------------------------------------------------------------------------- */
add_theme_support( 'html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption',
) );

/* ----------------------------------------------------------------------------------
	 * Enable support for Post Formats.
	 * See: https://codex.wordpress.org/Post_Formats
---------------------------------------------------------------------------------- */
add_theme_support( 'post-formats', array(
	'aside',
	'image',
	'video',
	'quote',
	'link',
	'gallery',
	'status',
	'audio',
	'chat',
) );

/* ----------------------------------------------------------------------------------
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
---------------------------------------------------------------------------------- */
	add_editor_style( array( 'css/editor-style.css', bizgrowtheme_fonts_url() ) );
	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif; // bizgrowtheme
add_action( 'after_setup_theme', 'bizgrowtheme' );

/* ----------------------------------------------------------------------------------
 * Sets the content width in pixels, based on the theme's design and stylesheet.
 * Priority 0 to make it available to lower priority callbacks.
 * @global int $content_width
 * @since Bizgrow  Theme 1.0
---------------------------------------------------------------------------------- */
function bizgrowtheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bizgrowtheme_content_width', 840 );
}
add_action( 'after_setup_theme', 'bizgrowtheme_content_width', 0 );

/* ----------------------------------------------------------------------------------
 * Registers a widget area.
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 * @since Bizgrow Theme 1.0
---------------------------------------------------------------------------------- */
function bizgrowtheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'bizgrowtheme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'bizgrowtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'bizgrowtheme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'bizgrowtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'bizgrowtheme' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'bizgrowtheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bizgrowtheme_widgets_init' );

if ( ! function_exists( 'bizgrowtheme_fonts_url' ) ) :

/* -------------------------------------------------------------------------------
 * Register Google fonts for Bizgrow Theme.
 * Create your own bizgrowtheme_fonts_url() function to override in a child theme.
 * @since Bizgrow Theme 1.0
 * @return string Google fonts URL for the theme.
---------------------------------------------------------------------------------- */
function bizgrowtheme_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Merriweather, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Merriweather font: on or off', 'bizgrowtheme' ) ) {
		$fonts[] = 'Merriweather:400,700,900,400italic,700italic,900italic';
	}

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Montserrat font: on or off', 'bizgrowtheme' ) ) {
		$fonts[] = 'Montserrat:400,700';
	}

	/* translators: If there are characters in your language that are not supported by Inconsolata, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', 'bizgrowtheme' ) ) {
		$fonts[] = 'Inconsolata:400';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
wp_deregister_script('heartbeat');
}

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Bizgrow Theme 1.0
 */
function bizgrowtheme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
//add_action( 'wp_head', 'bizgrowtheme_javascript_detection', 0 );

/**
 * Enqueues scripts and styles.
 *
 * @since Bizgrow Theme 1.0
 */
function bizgrowtheme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	// Add Genericons, used in the main stylesheet.

	// Theme stylesheet.
	//wp_enqueue_style( 'bizgrowtheme-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_localize_script( 'bizgrowtheme-script', 'screenReaderText', array(
		'expand'   => __( 'expand child menu', 'bizgrowtheme' ),
		'collapse' => __( 'collapse child menu', 'bizgrowtheme' ),
	) );
}
add_action( 'wp_enqueue_scripts', 'bizgrowtheme_scripts' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @since Bizgrow Theme 1.0
 *
 * @param array $classes Classes for the body element.
 * @return array (Maybe) filtered body classes.
 */
function bizgrowtheme_body_classes( $classes ) {
	// Adds a class of custom-background-image to sites with a custom background image.
	if ( get_background_image() ) {
		$classes[] = 'custom-background-image';
	}

	// Adds a class of group-blog to sites with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of no-sidebar to sites without active sidebar.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'bizgrowtheme_body_classes' );

/**
 * Converts a HEX value to RGB.
 *
 * @since Bizgrow Theme 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 */
function bizgrowtheme_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) === 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) === 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images
 *
 * @since Bizgrow Theme 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function bizgrowtheme_content_image_sizes_attr( $sizes, $size ) {
	$width = $size[0];

	840 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 62vw, 840px';

	if ( 'page' === get_post_type() ) {
		840 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	} else {
		840 > $width && 600 <= $width && $sizes = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 61vw, (max-width: 1362px) 45vw, 600px';
		600 > $width && $sizes = '(max-width: ' . $width . 'px) 85vw, ' . $width . 'px';
	}

	return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'bizgrowtheme_content_image_sizes_attr', 10 , 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails
 *
 * @since Bizgrow Theme 1.0
 *
 * @param array $attr Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function bizgrowtheme_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
	if ( 'post-thumbnail' === $size ) {
		is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 984px) 60vw, (max-width: 1362px) 62vw, 840px';
		! is_active_sidebar( 'sidebar-1' ) && $attr['sizes'] = '(max-width: 709px) 85vw, (max-width: 909px) 67vw, (max-width: 1362px) 88vw, 1200px';
	}
	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'bizgrowtheme_post_thumbnail_sizes_attr', 10 , 3 );

/**
 * Modifies tag cloud widget arguments to have all tags in the widget same font size.
 *
 * @since Bizgrow Theme 1.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array A new modified arguments.
 */
function bizgrowtheme_widget_tag_cloud_args( $args ) {
	$args['largest'] = 1;
	$args['smallest'] = 1;
	$args['unit'] = 'em';
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'bizgrowtheme_widget_tag_cloud_args' );

if ( 'ja' !== get_bloginfo( 'language' ) ) {
	function write_change_excerpt_length( $length ) {
		return 50;
	}
	add_filter( 'excerpt_length', 'write_change_excerpt_length', 999 );
}

/**
 * Change excerpt length in Japanese.
 */
function write_change_excerpt_mblength( $length ) {
	return 100;
}
add_filter( 'excerpt_mblength', 'write_change_excerpt_mblength' );




function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation-paging"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li> .. </li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>..</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

function feed_getFeaturedImage() {
        global $post; if( function_exists ('has_post_thumbnail') && has_post_thumbnail($post->ID)) {
            $thumbnail_id = get_post_thumbnail_id( $post->ID );
            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
        }
        return ($thumbnail_url);
}



/* -------------------------------------------------------------------------------
 *Customizing the WordPress Login
 *https://codex.wordpress.org/Customizing_the_Login_Form
---------------------------------------------------------------------------------- */

/*Login Page Logo*/

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(http://biz-grow.com.au/wp-content/uploads/2015/12/logo-final-cropped.jpg);
			height:80px; width:223px; background-size: 223px 80px; background-repeat: no-repeat;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/*Login Page URL*/

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Powered by Bizgrow';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/*Login Page Styles*/

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


/* -------------------------------------------------------------------------------
 Admin footer modification
---------------------------------------------------------------------------------- */

function remove_footer_admin () 
{
    echo '<span id="footer-thankyou">Developed by <a href="http://biz-grow.com.au/" target="_blank">BizGrow Digital</a></span>';
}
 
add_filter('admin_footer_text', 'remove_footer_admin');

/* -------------------------------------------------------------------------------
 Remove default dashboard news widget
---------------------------------------------------------------------------------- */

function max_remove_dashboard_widgets() {
        remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
}
add_action( 'admin_init', 'max_remove_dashboard_widgets' ); // this may work when you're trying to use wp_dashboard_setup and the dashboard_primary widget keeps showing up

/* -------------------------------------------------------------------------------
 Remove network dashboard news widget
---------------------------------------------------------------------------------- */

function max_remove_network_dashboard_widgets() {
	remove_meta_box('dashboard_primary', 'dashboard-network', 'side');
}
add_action( 'wp_network_dashboard_setup', 'max_remove_network_dashboard_widgets' );

/* -------------------------------------------------------------------------------
 Customize Admin menu Bar
---------------------------------------------------------------------------------- */

// calling it only on the login page
//add_filter('login_headerurl', '');
//add_filter('login_headertitle', '');

function remove_admin_bar_links() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');          // Remove the WordPress logo
    $wp_admin_bar->remove_menu('about');            // Remove the about WordPress link
    $wp_admin_bar->remove_menu('wporg');            // Remove the WordPress.org link
    $wp_admin_bar->remove_menu('documentation');    // Remove the WordPress documentation link
    $wp_admin_bar->remove_menu('support-forums');   // Remove the support forums link
    $wp_admin_bar->remove_menu('feedback');         // Remove the feedback link
    //$wp_admin_bar->remove_menu('site-name');        // Remove the site name menu
    $wp_admin_bar->remove_menu('view-site');        // Remove the view site link
    $wp_admin_bar->remove_menu('updates');          // Remove the updates link
    $wp_admin_bar->remove_menu('comments');         // Remove the comments link
    $wp_admin_bar->remove_menu('new-content');      // Remove the content link
    $wp_admin_bar->remove_menu('w3tc');             // If you use w3 total cache remove the performance link
    //$wp_admin_bar->remove_menu('my-account');       // Remove the user details tab
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );


function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8
}
add_action( 'admin_init', 'remove_dashboard_meta' );

function myplugin_disable_screen_options( $show_screen ) {
    // Logic to allow admins to still access the menu
    if ( current_user_can( 'manage_options' ) ) {
        return $show_screen;
    }
    return false;
}
add_filter( 'screen_options_show_screen', 'myplugin_disable_screen_options' );


// Enable support for custom logo.
add_theme_support( 'custom-logo' );

/*********** shortcodes **********/

	 global $phone;
	 global $mobile_p;
	 
	 $phone = get_option('phone_1');
	 $mobile_p = preg_replace("/[^0-9]/", "", $phone);
	 
	 if(get_option('country') == 'United States' || get_option('country') == 'Canada'){
		$mobile_p ="+1".$mobile_p;
	 }

	 


add_shortcode('phone',function(){
     global $phone;
     global $mobile_p;
    $phone_1 = '<a class="p_number" href="tel:'.$mobile_p.'">'.$phone.'</a>';
     return $phone_1;
    
});
add_shortcode('mobile_number',function(){
     global $mobile_p;
     return $mobile_p;
});


//Location two 
if(get_option('location_two') == 1){
	  global $phone2;
	  global $mobile_p2;
	    $phone2 = get_option('phone_2');
	    $mobile_p2 = preg_replace("/[^0-9]/", "", $phone2);
	  
	   if(get_option('country') == 'United States' || get_option('country') == 'Canada'){
		$mobile_p2 ="+1".$mobile_p2;
	}
	add_shortcode('phone2',function(){
		global $phone2;
		global $mobile_p2;
	       $phone_2 = '<a class="p_number" href="tel:'.$mobile_p2.'">'.$phone2.'</a>';
		return $phone_2;
    
	});
	add_shortcode('mobile_number2',function(){
	     global $mobile_p2;
	     return $mobile_p2;
	});

}


//Location two 
if(get_option('location_three') == 1){
	  global $phone3;
	  global $mobile_p3;
	    $phone3 = get_option('phone_3');
	    $mobile_p3 = preg_replace("/[^0-9]/", "", $phone3);
	  
	   if(get_option('country') == 'United States' || get_option('country') == 'Canada'){
		$mobile_p3 ="+1".$mobile_p3;
	}
	add_shortcode('phone3',function(){
		global $phone3;
		global $mobile_p3;
	       $phone_3 = '<a class="p_number" href="tel:'.$mobile_p3.'">'.$phone3.'</a>';
		return $phone_3;
    
	});
	add_shortcode('mobile_number3',function(){
	     global $mobile_p3;
	     return $mobile_p3;
	});

}




/************Menus *******/

function bizgrow_custom_menu() {
  register_nav_menu('main-menu',__( 'Main' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_nav_menu('mobile-menu',__( 'Mobile Menu' ));
  register_nav_menu('mobile-menu-services',__( 'Mobile Menu Services' ));
  register_nav_menu('site-map',__( 'Site Map' ));
  register_nav_menu('left-menu',__( 'Left Menu' ));
  register_nav_menu('right-menu',__( 'Right Menu' ));
}
add_action( 'init', 'bizgrow_custom_menu' );




require_once('inc/option-page.php');

if ( empty ( $GLOBALS['admin_page_hooks']['bizgrow-theme-options'] ) ){
	require_once('inc/slider.php');
	require_once('inc/shortcodes_and_post_types.php');
}



// exceprt start //

function excerpt($limit) { 
  $excerpt = explode(' ', get_the_excerpt(), $limit); 
  if (count($excerpt)>=$limit) { 
    array_pop($excerpt); 
    $excerpt = implode(" ",$excerpt).'...'; 
  } else { 
    $excerpt = implode(" ",$excerpt); 
  }      
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt); 
  return $excerpt; 
} 
  
function content($limit) { 
  $content = explode(' ', get_the_content(), $limit); 
  if (count($content)>=$limit) { 
    array_pop($content); 
    $content = implode(" ",$content).'...'; 
  } else { 
    $content = implode(" ",$content); 
  }      
  $content = preg_replace('/[.+]/','', $content); 
  $content = apply_filters('the_content', $content);  
  $content = str_replace(']]>', ']]&gt;', $content); 
  return $content; 
}

// exceprt end //


/*
add_action( 'wp_enqueue_scripts', function() {
    if (!is_page('test-2') {
        wp_dequeue_script( 's201-bai' );
    }
}, 99 );*/
	
	
	function project_dequeue_unnecessary_scripts() {
		if(is_page(9370)){
			wp_dequeue_script( 's201-bai' );
			wp_deregister_script( 's201-bai' );
		}
}

add_action( 'wp_print_scripts', 'project_dequeue_unnecessary_scripts' );

function my_deregister_styles()    {
	if ( ! is_user_logged_in() ) {
		wp_deregister_style( 'dashicons' );  
	}
}
add_action( 'wp_print_styles',     'my_deregister_styles', 100 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function remove_contact_form7_scripts(){
	if(!is_page(array(3949,9317,10603,10913,12371,12958,10870,12916,12933,12871,10926,10929,10919,10933,10936,10922))){
   //  Edit page IDs here
		wp_dequeue_script('google-recaptcha'); // Dequeue JS Script file.
		wp_dequeue_script('swv'); // Dequeue JS Script file.
		wp_dequeue_script('contact-form-7'); // Dequeue JS Script file.
		wp_dequeue_script('wpcf7-recaptcha'); // Dequeue JS Script file.
	}
    
}

// add_action( 'wp_enqueue_scripts', 'remove_contact_form7_scripts', 100 );



//Remove JQuery migrate
 
function remove_jquery_migrate( $scripts ) {
	if ( ! is_admin() && isset( $scripts->registered['jquery'] ) ) {
		 $script = $scripts->registered['jquery'];
	if ( $script->deps ) { 
 // Check whether the script has any dependencies
 
		 $script->deps = array_diff( $script->deps, array( 'jquery-migrate' ) );
  }
  }
  }
 add_action( 'wp_default_scripts', 'remove_jquery_migrate' );

 	
add_filter( 'wp_sitemaps_enabled', '__return_false' );


/** 
 * Enables the HTTP Strict Transport Security (HSTS) header in WordPress. 
 */
function tg_enable_strict_transport_security_hsts_header_wordpress() {
    header( 'Strict-Transport-Security: max-age=31536000' );
}
add_action( 'send_headers', 'tg_enable_strict_transport_security_hsts_header_wordpress' );

add_filter('robots_txt', 'addToRoboText');

function addToRoboText($robotext) {
    $additions = "
User-agent: *
Disallow: /wp-admin/
Allow: /wp-admin/admin-ajax.php
Sitemap:https://puritydental.com.au/sitemap.xml
";
    return $robotext . $additions;
}