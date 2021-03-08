<?php
	global $post;

	/*
	get the event post for cobranding
	*/
	$bits = explode('/', $_SERVER["REQUEST_URI"]);
	$event = get_posts(array('name' => $bits[2], 'post_type' => 'event'));
	$post = $event[0];
	setup_postdata($post);

	get_header();
	wp_reset_postdata();

	get_template_part('content', 'join');
	

	/*
	get the speaker post
	*/
	$speaker = get_posts(array('name' => $bits[4], 'post_type' => 'speaker'));
	$post = $speaker[0];
	setup_postdata($post);

	get_template_part('content', 'event-speaker-profile');
	wp_reset_postdata();

    get_template_part('content', 'event-social');
	get_footer();
?>

