<?php get_header(); ?>

<?php JC_Component::the_nav(); ?>

<?php
if (have_posts()): 
    $summary_row_index = 0;
?>
    <section id="projects" class="projects-section">
		<div class="container">
                            
    <?php
            
	while(have_posts()): the_post();
        $post_id = get_the_ID();
        $order_first_class = '';
        if ($summary_row_index%2 == 1) {
            $order_first_class = 'order-lg-first';
        }
        $summary_row_index++;
        
        $featured_image = get_the_post_thumbnail_url($post_id,'full');
        if (!$featured_image) {
            $featured_image = get_field('default_featured_image', 'option')['sizes']['medium'];
        }
            
        $buttons = [];
        if (have_rows('buttons')): 
            while(have_rows('buttons')): the_row();
                array_push($buttons, [
                    'button_label' => get_sub_field('button_label'),
                    'button_href' => get_sub_field('button_href')
                ]);
            endwhile; // buttons
        else:
            array_push($buttons, [
                    'button_label' => 'View more',
                    'button_href' => get_the_permalink()
                ]);
        endif;
            
        JC_Component::the_post_summary_row([
            'post_id' => $post_id,
            'featured_image' => $featured_image,
            'title' => get_the_title(),
            'content' => get_the_excerpt(),
            'order_first_class' => $order_first_class,
            'buttons' => $buttons
        ]);
        
	endwhile; // posts
            
        ?>
            <div class="mt-5 d-flex justify-content-center">
                <?php JC_Component::bootstrap_pagination(); ?>
            </div>
            
        </div>
    </section>
    <?php
endif;
?>




<?php JC_Component::the_social_links(); ?>

<?php get_footer(); ?>