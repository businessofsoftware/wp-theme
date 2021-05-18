<!--?php
	$event = get_event();

	$venue = get_field('event_venue', $event->ID);
	$city = get_field('venue_city', $venue[0]);

	$date = get_field('event_date', $event->ID);
	$time = get_field('event_time');
	$time = ($time != "") ? (" | ".$time) : "";

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
?-->

<!--section>
	<div id="event-register">

		<div class="container-full-width bk-white shadow">
			<div class="container-outer">
				<div class="container-inner-full-width overflow">
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
</section-->
