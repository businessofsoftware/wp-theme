<?php
	$event = get_the_title();

	$url = get_field('event_reg');
	$url = empty($url) ? urlencode(get_permalink()) : urlencode($url);

	$msg = get_field('event_message');
	$date = get_field('event_date');

	$venue_id = get_field('event_venue');
	$city = get_field('venue_city', $venue_id[0]);

	$title = urlencode($event." &ndash; ".$date.", ".$city);
	$summary = urlencode($msg);
	$source = urlencode("Business Leaders Network");

	$tw = "https://twitter.com/intent/tweet?text=".$title."&amp;url=".$url;
	$fb = "https://www.facebook.com/sharer/sharer.php?u=".$url;
	$li = "http://www.linkedin.com/shareArticle?mini=true&amp;url=".$url."&amp;title=".$title."&amp;summary=".$summary."&amp;source=".$source;
?>

<div id="event-share">

    <div class="container-outer bk-white overflow">
 		<div class="container-inner">
			<div class="sharing">
				<h4 class="floatleft dark">Share this event</h4>

				<ul class="social floatleft">
				 	<li><a class="twitter" href="<?php echo $tw; ?>"></a></li>
				 	<li><a class="facebook" href="<?php echo $fb; ?>"></a></li>
				 	<li><a class="linkedin" href="<?php echo $li; ?>"></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
