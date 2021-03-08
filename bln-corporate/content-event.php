
<?php
	global $sponsors_span;

	get_template_part('content', 'event-header');
	get_template_part('content', 'event-hero');
	get_template_part('content', 'event-attend');
	get_template_part('content', 'event-speakers-list');

	if($sponsors_span == 3)
		get_template_part('content', 'event-sponsors');

	get_template_part('content', 'event-testimonials');
	get_template_part('content', 'event-pitch');
	get_template_part('content', 'event-share');
	get_template_part('content', 'event-register');
	get_template_part('content', 'event-venue');
?>

