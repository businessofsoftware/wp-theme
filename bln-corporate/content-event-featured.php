
<?php

	$event = get_featured_event();

	if($event->have_posts()) {
		$event->the_post();

		$type = get_field('event_type');
		$url = get_field('event_site');
		$url = empty($url) ? get_permalink() : $url;
		
		$venue = get_field('event_venue');
		$city = get_field('venue_city', $venue[0]);

		$date = get_field('event_date');
		$time = get_field('event_time');
		$time = ($time != "") ? (" | ".$time) : "";
	
		$alert = get_field('event_message');
		$alert = empty($alert) ? "&nbsp;" : $alert;
	}

?>


<section id="featured-event">
	
	<div class="featured-event">
		<div class="container-outer <?php echo $type; ?>">
			<div class="container-inner">
				<div class="container logo overflow">

					<div class="container-full-width button-message learn-more">
						<a class="button" href="<?php echo $url; ?>">Learn More</a>
						<p class="message fg-0"><?php echo $alert; ?></p>
		    			<h4 class="dark"><?php echo $date.$time." &ndash; ".$city; ?></h4>
		    		</div>

				</div>
			</div>
		</div>
	</div>

</section>

