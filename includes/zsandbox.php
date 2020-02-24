<?php

class JC_Sandbox {
	
	public static $debug = false; 
	
	public static function run() {
		if (!JC_Sandbox::$debug) { return; }
		
		// Run the code to test here
		JC_Sandbox::get_posts_by_taxonomy('testing');
		
		wp_die();
	}
	
	public static function get_posts_by_category($category_name) {
		$args = array(
			'post_type' => 'post',
			'nopaging' => true,
			'post_status' => 'publish', // publish
			'category_name' => $category_name // 'block
		);

		$query = new WP_Query($args);
		JC_Sandbox::print('Count: ' . $query->found_posts);
		
		while($query->have_posts()) {
			$query->the_post();
			
			
		}
		
		wp_reset_postdata();
	}
	
	public static function get_posts_by_taxonomy($taxonomy) {
		$args = array(
			'post_type' => 'post',
			'nopaging' => true,
			'post_status' => 'publish', // publish
			'tax_query' => array(
				'relation' => 'AND',
				
				// Can get by taxonomy ID
// 				array(
// 					'taxonomy' => 'purpose',
// 					'field'    => 'term_id',
// 					'terms'    => $taxonomy // Testing: 195
// 				)
				
				// OR Can get by taxonomy name
				array(
					'taxonomy' => 'purpose',
					'field'    => 'name',
					'terms'    => $taxonomy // Testing: 195
				)
			),
		);

		$query = new WP_Query($args);
		JC_Sandbox::print('Count: ' . $query->found_posts);
		
		
		while($query->have_posts()) {
			$query->the_post();
			
			
		}
		
		wp_reset_postdata();
	}
	
	
	public static function get_posts_by_author($author) {
		$args = array(
			'post_type' => 'post',
			'nopaging' => true,
// 			'p' => 1153 // can query by ID as well
			'author_name' => $author // 'themedemos'
		);

		$aq = new WP_Query( $args ); 
		JC_Sandbox::print('Count: ' . $aq->found_posts);
		
		while($aq->have_posts()) {
			$aq->the_post();
			
			JC_Sandbox::print(get_the_title());
		}
		
		wp_reset_postdata();
	}
	
	public static function test_custom_meta_query2() {
		
		$config_value = JC_Post_Config_Util::get_post_config_value('incident', 'number_prefix');
		JC_Sandbox::print($config_value);

	}
	
	public static function test_custom_meta_query1() {
		
		// The Query
		$rec = new WP_Query([
			'numberposts'	=> -1,
			'post_type'		=> 'post_config',
			'meta_query'	=> array(
				'relation'		=> 'AND',
				array(
					'key'	 	=> 'post_type',
					'value'	  	=> ['incident'],
					'compare' 	=> 'IN',
				),
				array(
					'key'	  	=> 'active',
					'value'	  	=> '1',
					'compare' 	=> '=',
				),
			),
		]);

		// The Loop
		if ( $rec->have_posts() ) {
			while ( $rec->have_posts() ) {
				$rec->the_post();
				
				JC_Sandbox::print(get_the_ID());
				JC_Sandbox::print(get_field('number_prefix'));
			}
		} 

		// Restore original Post Data
		wp_reset_postdata();

	}
	
	public static function test_custom_query1() {
		
		// The Query
		$rec = new WP_Query([
			'post_type' => ['incident'],
			'nopaging'               => true,
			'order'                  => 'ASC',
			'orderby'                => 'title',
		]);

		// The Loop
		if ( $rec->have_posts() ) {
			while ( $rec->have_posts() ) {
				$rec->the_post();
				
				$num_prefix = 'INC';
				$num = $num_prefix . str_pad(get_the_ID(), 8, '0', STR_PAD_LEFT);
				JC_Sandbox::print($num);
			}
		} 

		// Restore original Post Data
		wp_reset_postdata();

	}
	
	public static function print($obj) {
		echo "<pre>";
		var_dump($obj);
		echo "</pre>";
	}
	
}