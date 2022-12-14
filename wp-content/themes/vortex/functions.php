<?php 

// WP Theme Supports (Basic Theme Setup function) //

function vortex_theme_support(){

	add_theme_support('title-tag');

	add_theme_support('post-thumbnails');

	add_image_size('home-featured', 680, 400, array('center', 'center'));
	 
};
add_action('after_theme_setup', 'vortex_theme_support');

add_theme_support( 'post-thumbnails' ); 	

// Custom Logo //

function vortex_custom_logo() {
    $defaults = array(
        // 'height'               => 100,
        // 'width'                => 400,
        // 'flex-height'          => true,
        // 'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'vortex_custom_logo' );

//Register Navigation Menu in WP Dashbaord //

function vortex_nav_menu(){

	register_nav_menus(
     array(
      'header-menu' => __( 'Header Menu','text_domain'),
      'footer-menu' => __( 'Footer Menu','text_domain'),
     )
   );
}

add_action('init', 'vortex_nav_menu');

// Navbar Link Menu Change // 

function add_link_atts($atts){

$atts['class'] = 'nav-link';
return $atts;

}

add_filter('nav_menu_link_attributes', 'add_link_atts');

/* Require bootstrap navwalker for menu */

// require_once('bootstrap-navwalker.php');


/* Add Support to Excerpt */

add_post_type_support( 'page', 'excerpt' );

//* Registering Widget Area *//

function register_widget_areas() {

    register_sidebar( array(
      'name'          => 'Header area one',
      'id'            => 'header_area_one',
      'description'   => 'This widget area discription',
      'before_widget' => '<div class="footer-inner-wrap">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    ));
  
    register_sidebar( array(
      'name'          => 'Header area two',
      'id'            => 'header_area_two',
      'description'   => 'This widget area discription',
      'before_widget' => '<div class="contact-det-list">',
      'after_widget'  => '</div>',
      'before_title'  => '<h4>',
      'after_title'   => '</h4>',
    ));
  }
  
  add_action( 'widgets_init', 'register_widget_areas' );
























?>