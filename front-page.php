<?php get_header(); ?>
<?php JC_Sandbox::run(); ?>
<?php // JC_Component::the_nav(); ?>

<?php
if (have_posts()):
	while(have_posts()): the_post();
// 		echo get_the_ID();
		
		// check if the repeater field has rows of data
		if( have_rows('sections') ):

			// loop through the rows of data
			while ( have_rows('sections') ) : the_row();

				// display a sub field value
				$post = get_sub_field('post');
// 				var_dump($post) ;
// 				var_dump($post->ID) ;
// 				var_dump($post->post_title) ;

// 				JC_Component::the_featured_primary([
// 					'post_id' => $post->ID,
// 					'featured_image' => get_the_post_thumbnail_url($post->ID,'full'),
// 					'title' => $post->post_title,
// 					'content' => get_field('subtitle', $post->ID)
// 				]);

				if (have_rows('buttons')): 
					while(have_rows('buttons')): the_row();
						var_dump(get_sub_field('button_label'));
					endwhile;
				endif;

			endwhile;

		else :

			// no rows found

		endif;

	endwhile;
endif;
?>

<?php get_footer(); ?>