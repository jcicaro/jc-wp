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
// 		JC_Component::the_featured_primary([
// 			'post_id' => $post_id,
// 			'featured_image' => $featured_image,
// 			'title' => get_the_title(),
// 			'content' => '', // get_field('subtitle', $post->ID),
// 			'buttons' => []
// 		]);

		$post = get_post($post_id);
// 		$post_content = $post->post_content ;
// 		$post_content = apply_filters('the_content', $post_content);

		?>

		<section id="jc-featured-dark-bg" class="jc-featured-dark-bg <?php echo $text_center_class; ?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mx-auto">
					  <h2 class="text-white mb-4 text-center"><?php the_title(); ?></h2>
						<h5 class="text-center mb-4"> <span class="badge badge-pill badge-light"><?php the_date( 'M Y' ); ?></span></h5>
					  <div class="text-white"><?php the_content(); ?></div>
				<?php 
					while(have_rows('code_section')): the_row();
						echo '<pre class="language-' . get_sub_field('language') . ' line-numbers"><code>' . get_sub_field('code') . '</code></pre>';
						echo '<div class="text-white">' . get_sub_field('notes') . '</div>';
					endwhile;
				?>
						</div>
				  </div>
				</div>
			</div>
		</section>


		<?php

	endwhile; // posts

		?>

	<?php
endif;

?>

<?php get_footer(); ?>