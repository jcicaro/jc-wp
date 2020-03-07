<?php

add_action( 'after_setup_theme', function() {
    add_theme_support( 'post-thumbnails' );
});

// remove the 32px margin at the top
add_action('get_header', 'luna_remove_filter_head'); 
function luna_remove_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}

// Remove admin bar on the front end
add_filter('show_admin_bar', '__return_false');

add_filter( 'excerpt_length', function($length) {
    return 20;
});

// Add code snippet to main query
add_action( 'pre_get_posts', function ( $query ) {
//     if ( $query->is_home() && $query->is_main_query() ) {
    if ($query->is_main_query()) {
        $query->set( 'post_type', array('post', 'code_snippet') );
    }
});
