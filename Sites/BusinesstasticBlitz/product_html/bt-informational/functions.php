<?php
/**
 * bt-informational functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package bt-informational
 */

if ( ! function_exists( 'bt_informational_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bt_informational_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on bt-informational, use a find and replace
	 * to change 'bt-informational' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'bt-informational', get_template_directory() . '/languages' );

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


	// Add custom image sizes
	add_image_size( 'post-sm', 45, 45, true );
	add_image_size( 'post-md', 750, 208, true );
	add_image_size( 'post-mobile-header', 768, 300, true );
	add_image_size( 'post-lg', 1300, 360, true );

	// Bootstrap Nav Walker
	// the main menu
	function bt_main_nav() {
		// display the wp3 menu if available
	    wp_nav_menu(array(
	    	'container' => false,                           // remove nav container
	    	'container_class' => '',           // class of container (should you choose to use it)
	    	'menu' => __( 'The Primary Menu', 'bt-informational' ),  // nav name
	    	'menu_class' => 'nav navbar-nav',         // adding custom nav class
	    	'theme_location' => 'primary',                 // where it's located in the theme
	    	'before' => '',                                 // before the menu
	        'after' => '',                                  // after the menu
	        'link_before' => '',                            // before each link
	        'link_after' => '',                             // after each link
	    	'fallback_cb' => 'bt_main_nav_fallback',					// fallback function
				  'walker' => new bt_custom_nav_walker()
		));
	} /* end bt main nav */

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'bt-informational' ),
		'footer_c1' => esc_html__( 'Footer Menu Col 1', 'bt-informational'),
		'footer_c2' => esc_html__( 'Footer Menu Col 2', 'bt-informational'),
		'footer_c3' => esc_html__( 'Footer Menu Col 3', 'bt-informational'),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'bt_informational_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // bt_informational_setup
add_action( 'after_setup_theme', 'bt_informational_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bt_informational_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bt_informational_content_width', 640 );
}
add_action( 'after_setup_theme', 'bt_informational_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bt_informational_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bt-informational' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bt_informational_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bt_informational_scripts() {
	// styles
	wp_enqueue_style( 'bt-informational-style', get_stylesheet_uri() );
	wp_enqueue_style( 'bt-informational-style-custom', get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'bt-informational-webfonts', 'https://fonts.googleapis.com/css?family=Glegoo:400,700' );

	// scripts
	//Add jquery that comes with WP
	wp_enqueue_script( 'jquery' );

	// Add bootstrap scripts
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap-sass/javascripts/bootstrap.min.js', array('jquery'), '3.3.5', true );

	wp_enqueue_script( 'bt-informational-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'bt-informational-script', get_template_directory_uri() . '/assets/js/app.js', array(), '', true );


	wp_enqueue_script( 'bt-informational-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bt_informational_scripts' );

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

//ABANDON HOPE ALL YE WHO ENTER here
class bt_custom_nav_walker extends Walker_Nav_Menu {

   function start_lvl(&$output, $depth = 0, $args = array()) {
      $output .= "\n<ul class=\"dropdown-menu\">\n";
   }

   function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
       $item_html = '';
       parent::start_el($item_html, $item, $depth, $args);

       if ( $item->is_dropdown && $depth === 0 ) {
           $item_html = str_replace( '<a', '<a class="dropdown-toggle" data-toggle="dropdown"', $item_html );

       }

       $output .= $item_html;
    }

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) {
        if ( $element->current )
        $element->classes[] = 'active';

        $element->is_dropdown = !empty( $children_elements[$element->ID] );

        if ( $element->is_dropdown ) {
            if ( $depth === 0 ) {
                $element->classes[] = 'dropdown';
            } elseif ( $depth === 1 ) {
                // Extra level of dropdown menu,
                // as seen in http://twitter.github.com/bootstrap/components.html#dropdowns
                $element->classes[] = 'dropdown-submenu';
            }
        }

    parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }
	}
