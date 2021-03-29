<?php
	$event = get_event();

	$venue = get_field('event_venue', $event->ID);
	$city = get_field('venue_city', $venue[0]);
	$date = get_field('event_date', $event->ID);

	if (date('Ymd') > get_field('event_end', $event->ID)) {
		$title = "Get invited";
		$message = "All over! Join us at the next one";
		$url = '/updates';
	} else {
		$title = "Register Now";
		$message = get_field('event_alert', $event->ID);
		$message = empty($message) ? "&nbsp;" : $message;
		$url = get_field('event_register_url', $event->ID);
	}
?>

<section>
	<div class="featured-event">

		<div class="container-outer">
			<div class="container-inner overflow">
				<div class="container logo">
					<div class="container-full-width button-message">
						<a class="button" href="<?php echo $url; ?>"><?php echo $title; ?></a>
						<p class="message fg-0"><?php echo $message; ?></p>
		    			<h4 class="dark"><?php echo $date." &ndash; ".$city; ?></h4>
		    		</div>
				</div>
			</div>
		</div>

	</div>
</section>
