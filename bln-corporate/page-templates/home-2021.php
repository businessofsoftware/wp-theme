<?php
	/*
	Template Name: Home 2021
	*/
    get_header();
    get_template_part('content', 'join');
?>

<style type="text/css">
    footer {
        margin-top: -18px;
    }
</style>

<div class="container-outer-full-width">
        
    <?php
        while(have_posts()) {
            the_post();
            the_content();
        }
    ?>
                            
</div>

<?php 
    //get_template_part('content', 'hero');
    //get_template_part('content', 'why');
    //get_template_part('content', 'event-featured-list');
    //get_template_part('content', 'testimonials-list');
    //get_template_part('content', 'home-social');
    get_footer();
?>