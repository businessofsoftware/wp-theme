
<?php

	$date = get_field('event_date');
	$time = get_field('event_time');
	$venue = get_field('event_venue');
	$city = get_field('venue_city', $venue[0]);

	if (date('Ymd') > get_field('event_end')) {
		$title = "Get invited";
		$message = "All over! join us at the next one";
		$url = '/join';
	} else {
		$title = "Register Now";
		$message = get_field('event_message');
		$message = empty($message) ? "&nbsp;" : $message;
		$url = get_field('event_reg');
	}
?>

<div id="event-register">

	<div class="container-full-width house-advert">
		<div class="container-outer">
			<div class="container-inner-full-width">
				<div class="container-full-width logo overflow">
					<div class="container button-message">
						<a class="button" href="/updates">Get Invited</a>
						<p class="message fg-0">Join us at the next one</p>
		    			<h4 class="dark">&nbsp;</h4>
	    			</div>
	    		</div>
		    </div>
		</div>
	</div>

</div>
