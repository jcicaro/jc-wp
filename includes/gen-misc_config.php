<?php

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