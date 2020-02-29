<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'JC WP Theme Settings',
		'menu_title'	=> 'JC WP Theme Settings',
		'menu_slug' 	=> 'jc-wp-theme-settings',
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