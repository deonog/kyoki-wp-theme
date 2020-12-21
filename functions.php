<?php

// Scripts

function kyoki_scripts(){
	// styles
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css', 'all' );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.css', array(), '4.5.0', 'all' );
	wp_enqueue_style( 'kyoki-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.1', 'all' );
	// scripts
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/inc/js/jquery.js', array( 'jquery' ), '4.5.0', true );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.5.0', true );
	wp_enqueue_script( 'kyoki-script', get_template_directory_uri() . '/inc/js/script.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'kyoki_scripts');

// Post Thumbnails

function kyoki_theme_setup(){
   add_theme_support('post-thumbnails');
   add_post_type_support( 'page', 'excerpt' );
}

add_action('after_setup_theme','kyoki_theme_setup');

// Menu

function register_my_menus() {

   // Nav Menus
   register_nav_menus(
     array(
       'main-menu' => __( 'Menu' ),
     )
   );

   // Post Formats
   add_theme_support('post-formats', array('aside','gallery'));
 }

add_action( 'init', 'register_my_menus' );

// Hide admin bar

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );


add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Portraits', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slides'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-format-image',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}



// Customizer File

require get_template_directory(). '/inc/customizer/customizer.php';
