<?php

require_once(get_template_directory() . '/includes/zsandbox.php');
require_once(get_template_directory() . '/includes/class-JC_Component.php');


add_action('wp_enqueue_scripts', function() {
	$show_in_footer = false; // set this to true later, need wp_footer() in footer.php
	
	// Use new version of jQuery
	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1' );
	
	// Font Awesome
	wp_enqueue_style('font-awesome-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array());
	
	// Bootstrap Styles
	wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', $show_in_footer);
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', $show_in_footer);
	wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array());
	
	// Grayscale theme
	wp_enqueue_style('grayscale-css', get_template_directory_uri() . '/public/vendor/grayscale/grayscale.css', false, '1.0.1', 'all');
// 	wp_enqueue_style('grayscale-css', get_template_directory_uri() . '/public/vendor/grayscale/grayscale.min.css', false, '1.0.0', 'all');
	wp_enqueue_script('jquery-easing-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.4.1', $show_in_footer);
// 	wp_enqueue_script('grayscale-js', get_template_directory_uri() . '/public/vendor/grayscale/grayscale.min.js', array('jquery'), '1.0.0', $show_in_footer);
	wp_enqueue_script('grayscale-js', get_template_directory_uri() . '/public/vendor/grayscale/grayscale.js', array('jquery'), rand(1, 100), $show_in_footer);
	
	// Custom Styles
	wp_enqueue_style('main', get_template_directory_uri() . '/public/css/main.css', false, rand(1, 100), 'all');
	wp_enqueue_script('script', get_template_directory_uri() . '/public/js/index.js', array(), rand(1, 100), $show_in_footer);
});


// function replace_core_jquery_version() {
//     wp_deregister_script( 'jquery' );
//     // Change the URL if you want to load a local copy of jQuery from your own server.
//     wp_register_script( 'jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1' );
// }
// add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );


// remove the 32px margin at the top
    add_action('get_header', 'luna_remove_filter_head'); 
    function luna_remove_filter_head() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }

    // Remove admin bar on the front end
    add_filter('show_admin_bar', '__return_false');


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'JC Theme General Settings',
		'menu_title'	=> 'JC Theme Settings',
		'menu_slug' 	=> 'jc-theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Theme Header Settings',
// 		'menu_title'	=> 'Header',
// 		'parent_slug'	=> 'jc-theme-general-settings',
// 	));
	
// 	acf_add_options_sub_page(array(
// 		'page_title' 	=> 'Theme Footer Settings',
// 		'menu_title'	=> 'Footer',
// 		'parent_slug'	=> 'jc-theme-general-settings',
// 	));
	
}
