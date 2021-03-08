
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

<div id="event-attend">
	<div class="container-outer page-title bk-white overflow">

	    <div class="container-right bk-4 white">
	        <div class="container-inner">
	            <?php echo get_field('event_who_should_attend'); ?>
	        </div>
	    </div>

	    <div class="container-left">
	        <div class="container-inner button-message">
	            <a class="button" href="<?php echo $url ?>"><?php echo $title; ?></a>
				<p class="message fg-0"><?php echo $message; ?></p>
	    		<h4 class="dark"><?php echo $date." ".$time." &ndash; ".$city; ?></h4>
	    		
	            <h1 class="dark">Speakers</h1>
	        </div>
	    </div>

	</div>
</div>
