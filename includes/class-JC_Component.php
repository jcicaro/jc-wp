<?php

class JC_Component {
	
	//
	// Simple components
	//
	
	public static function the_featured_primary($param) { 
		
// 		$param = $param ?? [
// 			'post_id' => '',
// 			'featured_image' => 'https://picsum.photos/700/600?grayscale',
// 			'title' => 'Grayscale',
// 			'content' => 'A free, responsive, one page Bootstrap theme created by Start Bootstrap.',
// 			'buttons' => []
// 		];
		
		$d_none = is_single() ? 'd-none' : '';
		$bg_size = is_single() ? '100% 100%' : 'cover';
	?>
	
	 <header class="masthead" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.3) 0%, rgba(22, 22, 22, 0.7) 75%, #161616 100%), url(<?php echo $param['featured_image']; ?>); background-size: <?php echo $bg_size; ?>; ">
		<div class="container d-flex h-100 align-items-center">
		  <div class="mx-auto text-center <?php echo $d_none; ?>">
			<h1 class="mx-auto my-0 text-uppercase"><?php echo $param['title']; ?></h1>
			<h2 class="text-white-50 mx-auto mt-2 mb-5"><?php echo $param['content']; ?></h2>
			  <?php
			  foreach($param['buttons'] as $button) { ?>
				<a href="<?php echo $button['button_href']; ?>" class="btn btn-primary js-scroll-trigger"><?php echo $button['button_label']; ?></a>
			  <?php
			  }
			  ?>
		  </div>
		</div>
	  </header>

	<?php
	}
	
	
	public static function the_featured_secondary($param) { 
	
// 		$param = $param ?? [
// 			'post_id' => '',
// 			'featured_image' => 'https://picsum.photos/700/600?grayscale',
// 			'title' => 'Built with Bootstrap 4',
// 			'content' => 'Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.',
// 			'buttons' => [],
// 			'align_left' => false
// 		];
		
		$text_center_class = $param['align_left'] ? '' : 'text-center';
	?>

	<section id="jc-featured-dark-bg" class="jc-featured-dark-bg <?php echo $text_center_class; ?>">
		<div class="container">
		  <div class="row">
			<div class="col-lg-8 mx-auto">
			  <h2 class="text-white mb-4 text-center"><?php echo $param['title']; ?></h2>
			<?php 
				if ($param['show_date'] === true) {
					echo '<h5 class="text-center mb-4"> <span class="badge badge-pill badge-light">' . get_the_date( 'M Y' ) . '</span></h5>';
				}
			?>
			  <div class="text-white"><?php echo $param['content']; ?></div>
				 <?php
			  foreach($param['buttons'] as $button) { ?>
				<a href="<?php echo $button['button_href']; ?>" class="btn btn-primary js-scroll-trigger"><?php echo $button['button_label']; ?></a>
			  <?php
			  }
			  ?>
			</div>
		  </div>
		  <img src="<?php echo $param['featured_image']; ?>" class="img-fluid featured-img" alt="">
		</div>
	  </section>

	<?php
	}
	
	
	public static function the_post_summary_row_lg($param) { 
	
		$param = $param ?? [
				'featured_image' => 'https://picsum.photos/700/600?grayscale',
				'title' => 'Shoreline',
				'content' => 'Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!',
				'buttons' => []
			];	
		?>

		<section id="jc-post-rows" class="jc-post-rows">
			<div class="container">
				<div class="row align-items-center no-gutters mb-4">
					<div class="col-xl-8 col-lg-7">
					  <img class="img-fluid mb-3 mb-lg-0" src="<?php echo $param['featured_image']; ?>" alt="">
					</div>
					<div class="col-xl-4 col-lg-5">
					  <div class="featured-text text-center text-lg-left">
						<h4><?php echo $param['title']; ?></h4>
						<div class="text-black-50 mb-0"><?php echo $param['content']; ?></div>
						  <?php
					  foreach($param['buttons'] as $button) { ?>
						<a href="<?php echo $button['button_href']; ?>" class="btn btn-primary js-scroll-trigger"><?php echo $button['button_label']; ?></a>
					  <?php
					  }
					  ?>
					  </div>
					</div>
				  </div>
			</div>
		</section>

	<?php
	}
	
	public static function the_post_summary_row($post_row) { 
		
// 		$post_row = $post_row ?? [
// 				'featured_image' => 'https://picsum.photos/700/600?grayscale',
// 				'title' => 'Misty',
// 				'content' => 'An example of where you can put an image of a project, or anything else, along with a description.',
// 				'order_first_class' => 'order-lg-first',
// 				'buttons' => []
// 			];
		?>
		
			
		<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
			<div class="col-lg-6">
			  <img class="img-fluid w-100 h-100" style="" src="<?php echo $post_row['featured_image']; ?>" alt="">
			</div>
			<div class="col-lg-6 <?php echo $post_row['order_first_class']; ?>">
			  <div class="bg-black text-center h-100 project">
				<div class="d-flex h-100">
				  <div class="jc-post-row-text-light w-100 my-auto text-center text-lg-left">
					<h4 class="text-white"><?php echo $post_row['title']; ?></h4>
					<div class="mb-3 text-white"><?php echo $post_row['content']; ?></div>
<!-- 					<hr class="d-none d-lg-block mb-0 ml-0"> -->
					  <?php
					  foreach($post_row['buttons'] as $button) { ?>
						<a href="<?php echo $button['button_href']; ?>" class="btn btn-primary btn-sm js-scroll-trigger"><?php echo $button['button_label']; ?></a>
					  <?php
					  }
					  ?>
				  </div>
				</div>
			  </div>
			</div>
		  </div>

	<?php
	}
	
	
	public static function the_small_white_card($param) { 
		?>

			
			<div class="col-md-4 mb-3 mb-md-0">
			  <div class="card py-4 h-100">
				<div class="card-body text-center">
				  <i class="<?php echo $param['fa_class']; ?> text-primary mb-2"></i>
				  <h4 class="text-uppercase m-0"><?php echo $param['title']; ?></h4>
				  <hr class="my-4">
				  <div class="small text-black-50"><?php echo $param['content']; ?></div>
				</div>
			  </div>
			</div>

	<?php
	}
	
	public static function the_social_badge($param) { 
		?>

			
			<a href="<?php echo $param['href']; ?>" target="<?php echo ($param['target'] ? $param['target'] : '_self'); ?>" class="mx-2">
			  <i class="<?php echo $param['fa_class']; ?>"></i>
			</a>

	<?php
	}
	
	
	public static function the_nav_item($param) { 
		
		$href = $param['href'];
		if (strpos($href, 'http') !== 0) { $href = site_url() . '/' . $href; }
		?>

			
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="<?php echo $href; ?>" target="<?php echo ($param['target'] ? $param['target'] : '_self'); ?>"><?php echo $param['label']; ?></a>
			</li>

	<?php
	}
	
	
	//
	// Composite components
	//
	
	public static function the_nav_old() { ?>
	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-between">

		<a class="navbar-brand" href="<?php echo site_url(); ?>">
			<img src="<?php site_icon_url(); ?>" alt="" width="40">
			<?php //bloginfo('name'); ?>
		</a>



		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>



		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<?php

			wp_nav_menu(array(
				'theme_location' => 'header',
				'container' => false,
				'menu_class' => 'navbar-nav mr-auto',
				'fallback_cb' => false
			));

			?>

			<form class="form-inline my-2 my-lg-0 ml-auto">

			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<!-- <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button> -->
			</form>
		</div>
	</nav>

	<?php
	}
	
	
	public static function the_nav() { ?>
	
	<!-- Navigation -->
	  <nav class="navbar navbar-expand-lg navbar-light navbar-shrink fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="<?php echo site_url(); ?>">
			  <span>
				  <?php 
				  	$logo_dark = get_field('logo_dark', 'option');
					$logo_light = get_field('logo_light', 'option');
				  ?>
				  <img class="logo-dark"  src="<?php echo $logo_dark['sizes']['medium']; ?>" alt="">
				  <img class="logo-light" src="<?php echo $logo_light['sizes']['medium'];  ?>" alt="">
			  </span>
			</a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
				<?php while( have_rows('nav_links', 'options') ): the_row(); 
					self::the_nav_item([
						'label' => get_sub_field('nav_label'),
						'href' => get_sub_field('nav_href'),
						'target' => get_sub_field('nav_target')
					]);
				endwhile; ?>
			</ul>
			  <form class="form-inline my-2 my-lg-0 ml-auto" method="get" action="<?php echo site_url(); ?>">

					<input name="s" id="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					<!-- <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button> -->
				</form>
		  </div>
		</div>
	  </nav>

	<?php
	}
	
	
	
	public static function the_header() { 
		self::the_featured_primary();
	}
	
	
	public static function the_about() { 
		self::the_featured_secondary();
	}
	
	public static function the_post_list() { ?>
	
	 <!-- Post Row Light Section -->
	  <section id="jc-post-rows" class="jc-post-rows bg-light">
		<div class="container">

		  <!-- Post Row Light -->
		<?php self::the_post_summary_row_lg(); ?>

		  <!-- Project One Row -->
		<?php
			$post_row = [
				'featured_image' => 'https://picsum.photos/700/600?grayscale',
				'title' => 'Misty',
				'excerpt' => 'An example of where you can put an image of a project, or anything else, along with a description.'
			];
			self::the_post_summary_row($post_row);
		?>
			

		  <!-- Project Two Row -->
			
		<?php
			$post_row = [
				'featured_image' => 'https://picsum.photos/700/600?grayscale',
				'title' => 'Mountains',
				'excerpt' => 'Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!',
				'order_first_class' => 'order-lg-first'
			];
			self::the_post_summary_row($post_row);
		?>
			

		</div>
	  </section>


	<?php
	}
	
	public static function the_contact_form() { ?>
	
	 <!-- Signup Section -->
	  <section id="signup" class="signup-section" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.1) 0%, rgba(22, 22, 22, 0.5) 75%, #161616 100%), url('https://picsum.photos/700/600?grayscale'); background-size: cover;">
		<div class="container">
		  <div class="row">
			<div class="col-md-10 col-lg-8 mx-auto text-center">

			  <i class="fa fa-paper-plane fa-2x mb-2 text-white"></i>
			  <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

			  <form class="form-inline d-flex">
				<input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
				<button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
			  </form>

			</div>
		  </div>
		</div>
	  </section>

	<?php
	}
	
	
	public static function the_trisection() { 
		$left_block = [
			'title' => 'Address',
			'content' => '4923 Market Street, Orlando FL',
			'fa_class' => 'fa fa-map-marked-alt'
		];
		$middle_block = [
			'title' => 'Email',
			'content' => 'hello@yourdomain.com',
			'fa_class' => 'fa fa-envelope'
		];
		$right_block = [
			'title' => 'Phone',
			'content' => '+1 (555) 902-8832',
			'fa_class' => 'fa fa-mobile-alt'
		];
	?>
	
	  <!-- Contact Section -->
	  <section class="contact-section bg-black">
		  
		<div class="container">

		  <div class="row">
			<?php self::the_small_white_card($left_block); ?>
			<?php self::the_small_white_card($middle_block); ?>
			<?php self::the_small_white_card($right_block); ?>

		  </div>

		  <div class="social d-flex justify-content-center">
		<?php
			$social_links = [
				[
					'fa_class' => 'fa fa-twitter',
					'href' => '#'
				],
				[
					'fa_class' => 'fa fa-facebook-f',
					'href' => '#'
				],
				[
					'fa_class' => 'fa fa-github',
					'href' => '#'
				],
				[
					'fa_class' => 'fa fa-facebook-f',
					'href' => '#'
				],
			];	  
		?>
			  
		<?php 
			foreach ($social_links as $sl) {
				self::the_social_badge($sl);
			}
		?>
		  </div> <!-- .social -->

		</div><!-- .container -->
	  </section> <!-- .contact-section -->

	<?php
	}
	
	public static function the_social_links() { 
		?>
		<div class="contact-section">
			

			<div class="social d-flex justify-content-center bg-black">
				
				<?php while( have_rows('social_links', 'options') ): the_row(); 
					self::the_social_badge([
						'fa_class' => get_sub_field('font_awesome_icon_class'),
						'href' => get_sub_field('button_href'),
						'target' => get_sub_field('button_target')
					]);
				endwhile; ?>
				
			</div>
		</div>
		
	<?php
	}
	
	/*
	 * custom pagination with bootstrap .pagination class
	 * source: http://www.ordinarycoder.com/paginate_links-class-ul-li-bootstrap/
	 */
	public static function bootstrap_pagination( $echo = true ) {
		global $wp_query;

		$big = 999999999; // need an unlikely integer

		$pages = paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'type'  => 'array',
				'prev_next'   => true,
				'prev_text'    => __('« Prev'),
				'next_text'    => __('Next »'),
			)
		);

		if( is_array( $pages ) ) {
			$paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

			$pagination = '<ul class="pagination pagination-sm">';

			foreach ( $pages as $page ) {
				$pagination .= '<li class="page-item">' . $page . '</li>';
			}

			$pagination .= '</ul>';

			if ( $echo ) {
				echo $pagination;
			} else {
				return $pagination;
			}
		}
	}
	
	public static function the_footer() { 
		$copyright_text = '&copy; JC Icaro 2020';
	?>
	
	  <!-- Footer -->
	  <footer class="bg-black small text-center text-white-50">
		<div class="container">
			<?php echo $copyright_text; ?>
		</div>
	  </footer>

	<?php
	}
	
	
	//
	// Templates
	//
	
	public static function the_single_post() {
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
		// 		JC_Sandbox::print($post);

				JC_Component::the_featured_secondary([
					'post_id' => $post_id,
					'featured_image' => null,
					'title' => get_the_title(),
					'content' => $post_content, // get_the_content(), // get_field('subtitle', $post->ID),
					'buttons' => [],
					'align_left' => true,
					'show_date' => true
				]);

			endwhile; // posts

				?>

			<?php
		endif;
	}
	
	
	public static function the_front_page() {
		
		if (have_posts()):
			while(have_posts()): the_post();
				$post_id = get_the_ID();

				if( have_rows('sections', $post_id) ):
					$summary_row_index = 0;
					$inside_post_row_container = false;

					while ( have_rows('sections', $post_id) ) : the_row();
						
						
						$post = get_sub_field('post');
						$child_post_id = $post->ID;
// 						JC_Sandbox::print($post);
						$render_func = get_sub_field('render_function');
						$order_first_class = '';

						if ($render_func == 'the_post_summary_row' && $inside_post_row_container == false) { ?>
							<section id="jc-post-rows" class="jc-post-rows">
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
						if (have_rows('buttons', $child_post_id)): 
							while(have_rows('buttons', $child_post_id)): the_row();
								array_push($buttons, [
									'button_label' => get_sub_field('button_label'),
									'button_href' => get_sub_field('button_href')
								]);
							endwhile; // buttons
						endif;

						$arg = [
							'post_id' => $post->ID,
							'featured_image' => get_the_post_thumbnail_url($post->ID,'large'),
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
		
	}
}