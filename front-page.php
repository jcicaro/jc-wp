<?php get_header(); ?>
<?php JC_Sandbox::run(); ?>
<?php JC_Component::the_nav(); ?>

<?php
if (have_posts()):
	while(have_posts()): the_post();
		$post_id = get_the_ID();
		
		if( have_rows('sections', $post_id) ):
			$summary_row_index = 0;
			$inside_post_row_container = false;

			while ( have_rows('sections', $post_id) ) : the_row();

				$post = get_sub_field('post');
				$render_func = get_sub_field('render_function');
				$order_first_class = '';

				if ($render_func == 'the_post_summary_row' && $inside_post_row_container == false) { ?>
					<section id="projects" class="projects-section">
						<div class="container">
				<?php
					$inside_post_row_container = true;
					if ($summary_row_index%2 == 1) {
						$order_first_class = 'order-lg-first';
					}
					$summary_row_index++;
				}
				else if ($render_func != 'the_post_summary_row' && $inside_post_row_container == true) { 
					
				?>
						</div>
					</section>
				<?php
					$inside_post_row_container = false;
				}
				else if ($render_func == 'the_post_summary_row') { 
					if ($summary_row_index%2 == 1) {
						$order_first_class = 'order-lg-first';
					}
					$summary_row_index++;
				}

				$buttons = [];
				if (have_rows('buttons')): 
					while(have_rows('buttons')): the_row();
						array_push($buttons, [
							'button_label' => get_sub_field('button_label'),
							'button_href' => get_sub_field('button_href')
						]);
					endwhile; // buttons
				endif;
				
				$arg = [
					'post_id' => $post->ID,
					'featured_image' => get_the_post_thumbnail_url($post->ID,'full'),
					'title' => $post->post_title,
					'content' => get_field('subtitle', $post->ID),
					'buttons' => $buttons
				];
				if ($render_func == 'the_post_summary_row') {
					$arg['order_first_class'] = $order_first_class;
				}
				call_user_func(['JC_Component', $render_func], $arg);


			endwhile; // sections
			
			if ($inside_post_row_container == true) { ?>
					</div>
				</section>
			<?php 
			}

		endif;

	endwhile; // posts
endif;
?>

<?php JC_Component::the_social_links(); ?>
<?php // JC_Component::the_trisection(); ?>

<?php get_footer(); ?>