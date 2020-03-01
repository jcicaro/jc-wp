<?php

require_once(get_template_directory() . '/includes/zsandbox.php');
require_once(get_template_directory() . '/includes/class-JC_Component.php');
require_once(get_template_directory() . '/includes/gen-misc_config.php');
require_once(get_template_directory() . '/includes/acf-theme_config.php');


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
	wp_enqueue_script('jquery-easing-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js', array('jquery'), '1.4.1', $show_in_footer);
	wp_enqueue_script('grayscale-js', get_template_directory_uri() . '/public/vendor/grayscale/grayscale.js', array('jquery'), rand(1, 100), $show_in_footer);
	
	// Prism JS
	wp_enqueue_style('prism-css', get_template_directory_uri() . '/public/vendor/prismjs/prism.css', []);
	wp_enqueue_script('prism-js', get_template_directory_uri() . '/public/vendor/prismjs/prism.js', [], '1.19.0', $show_in_footer);
	
	
	// Custom Styles
	wp_enqueue_style('main', get_template_directory_uri() . '/public/css/main.css', false, rand(1, 100), 'all');
	wp_enqueue_script('script', get_template_directory_uri() . '/public/js/index.js', array(), rand(1, 100), $show_in_footer);
});





