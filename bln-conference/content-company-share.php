
<?php
	$event = get_event();

	$title = urlencode($event->post_title." - ".get_the_title());
	$url = urlencode(get_permalink());
	$summary = urlencode(strip_tags(get_field_excerpt("company_profile",$post)));
	$source = urlencode($event->post_title);

	$tw = "https://twitter.com/intent/tweet?text=".$title."&amp;url=".$url;
	$fb = "https://www.facebook.com/sharer/sharer.php?u=".$url;
	$li = "http://www.linkedin.com/shareArticle?mini=true&amp;url=".$url."&amp;title=".$title."&amp;summary=".$summary."&amp;source=".$source;
?>


<div class="sharing">
	<h4 class="floatleft dark">Share this company</h4>

	<ul class="social floatleft">
	 	<li><a class="twitter" href="<?php echo $tw; ?>"></a></li>
	 	<li><a class="facebook" href="<?php echo $fb; ?>"></a></li>
	 	<li><a class="linkedin" href="<?php echo $li; ?>"></a></li>
	</ul>
</div>