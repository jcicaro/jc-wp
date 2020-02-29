<?php get_header(); ?>

<?php 
if (have_posts()): 

?>

	<?php

	while(have_posts()): the_post();
		$post_id = get_the_ID();
		$featured_image = get_the_post_thumbnail_url($post_id,'large');
		if (!$featured_image) {
			$featured_image = get_field('default_featured_image', 'option')['sizes']['large'];
		}
		JC_Component::the_featured_primary([
			'post_id' => $post_id,
			'featured_image' => $featured_image,
			'title' => get_the_title(),
			'content' => '', // get_field('subtitle', $post->ID),
			'buttons' => []
		]);

		$post = get_post($post_id);
		$post_content = $post->post_content ;
		$post_content = apply_filters('the_content', $post_content);
		

		JC_Component::the_featured_secondary([
			'post_id' => $post_id,
			'featured_image' => null,
			'title' => get_the_title(),
			'content' => $post_content, // get_the_content(), // get_field('subtitle', $post->ID),
			'buttons' => [],
			'align_left' => true
		]);

	endwhile; // posts

		?>

	<?php
endif;

?>

<?php get_footer(); ?>