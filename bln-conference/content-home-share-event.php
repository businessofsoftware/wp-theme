
<?php
	$event = get_event();

	$title = urlencode($event->post_title);
	$date = get_field('event_date', $event->ID);
	$url =  home_url();
	
	$message = urlencode($title.", ".$date);
	$source = urlencode("Business Leaders Network");

	$tw = "https://twitter.com/intent/tweet?text=".$message."&amp;url=".$url;
	$fb = "https://www.facebook.com/sharer/sharer.php?u=".$url;
	$li = "http://www.linkedin.com/shareArticle?mini=true&amp;url=".$url."&amp;title=".$title."&amp;summary=".$message."&amp;source=".$source;
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
