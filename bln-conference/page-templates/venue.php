<?php
	/*
	Template Name: Venue
	*/
	get_header();
	get_template_part('content', 'register-full-width');

	$event = get_event();
	$venue = get_field('event_venue', $event->ID);
	$venue_id = $venue[0];
?>

<section id="event-venue">

	<?php get_template_part('content', 'title-block'); ?>

	<div class="container-outer bk-white">
		<div class="container-inner overflow">
			<div class="venue">
				<div class="content-main event">
					<?php echo get_field('venue_description', $venue_id); ?>
				</div>
			</div>

			<div class="map">
				<?php echo get_field('venue_map', $venue_id); ?>
			</div>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>