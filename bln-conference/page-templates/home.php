<?php
	/*
	Template Name: Home
	*/
    get_header();
	get_template_part('content', 'register-full-width');
    
    get_template_part('content', 'home-hero');
    // get_template_part('content', 'home-attend');
	// get_template_part('content', 'home-speakers');
	get_template_part('content', 'home-pitch');
	get_template_part('content', 'home-share-event');
    get_template_part('content', 'home-testimonials');
    get_template_part('content', 'home-sponsors');
	get_template_part('content', 'register');
    
    get_footer();
?>