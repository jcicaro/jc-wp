<?php

class JC_Component {
	
	// Simple components
	
	public static function the_featured_primary($param) { 
		
		$param = $param ?? [
			'post_id' => '',
			'featured_image' => 'https://picsum.photos/700/600?grayscale',
			'title' => 'Grayscale',
			'content' => 'A free, responsive, one page Bootstrap theme created by Start Bootstrap.',
			'buttons' => []
		];
		
	?>
	
	 <header class="masthead" style="background: linear-gradient(to bottom, rgba(22, 22, 22, 0.3) 0%, rgba(22, 22, 22, 0.7) 75%, #161616 100%), url(<?php echo $param['featured_image']; ?>); background-size: cover; ">
		<div class="container d-flex h-100 align-items-center">
		  <div class="mx-auto text-center">
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
	
		$param = $param ?? [
			'post_id' => '',
			'featured_image' => 'https://picsum.photos/700/600?grayscale',
			'title' => 'Built with Bootstrap 4',
			'content' => 'Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.',
			'buttons' => []
		];
	?>

	<section id="about" class="about-section text-center">
		<div class="container">
		  <div class="row">
			<div class="col-lg-8 mx-auto">
			  <h2 class="text-white mb-4"><?php echo $param['title']; ?></h2>
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

		<section id="projects" class="projects-section bg-light">
			<div class="container">
				<div class="row align-items-center no-gutters mb-4 mb-lg-5">
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
			  <img class="img-fluid w-100" style="" src="<?php echo $post_row['featured_image']; ?>" alt="">
			</div>
			<div class="col-lg-6 <?php echo $post_row['order_first_class']; ?>">
			  <div class="bg-black text-center h-100 project">
				<div class="d-flex h-100">
				  <div class="project-text w-100 my-auto text-center text-lg-left">
					<h4 class="text-white"><?php echo $post_row['title']; ?></h4>
					<div class="mb-0 text-white"><?php echo $post_row['content']; ?></div>
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
		
// 		$param = [
// 			'title' => 'Phone',
// 			'content' => '+1 (555) 902-8832',
// 			'fa_class' => 'fa fa-mobile-alt'
// 		];
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
		
// 		$param = [
// 			'href' => '#',
// 			'fa_class' => 'fa fa-github'
// 		];
		?>

			
			<a href="<?php echo $param['href']; ?>" class="mx-2">
			  <i class="<?php echo $param['fa_class']; ?>"></i>
			</a>

	<?php
	}
	
	
	
	// Composite components
	
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
	  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
		  <a class="navbar-brand js-scroll-trigger" href="#page-top">jc.icaro</a>
		  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
			Menu
			<i class="fa fa-bars"></i>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#about">ServiceNow</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#projects">Wordpress</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="#signup">Photography</a>
			  </li>
			</ul>
			  <form class="form-inline my-2 my-lg-0 ml-auto">

					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
	
	 <!-- Projects Section -->
	  <section id="projects" class="projects-section bg-light">
		<div class="container">

		  <!-- Featured Project Row -->
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
}