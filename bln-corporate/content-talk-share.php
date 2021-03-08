
<?php
	$url = urlencode(get_permalink());

	$talk_speaker = get_field('talk_speaker');
	$speaker_id = $talk_speaker[0];
	$speaker = get_the_title($speaker_id);

	$title = urlencode($speaker." - ".get_the_title());
	$summary = urlencode(strip_tags(get_field_excerpt("talk_description")));
	$source = urlencode("Business Leaders Network");

	$tw = "https://twitter.com/intent/tweet?text=".$title."&amp;url=".$url;
	$fb = "https://www.facebook.com/sharer/sharer.php?u=".$url;
	$li = "http://www.linkedin.com/shareArticle?mini=true&amp;url=".$url."&amp;title=".$title."&amp;summary=".$summary."&amp;source=".$source;
?>


<div class="sharing">
	<h4 class="floatleft dark">Share this talk</h4>

	<ul class="social floatleft">
	 	<li><a class="twitter" href="<?php echo $tw; ?>"></a></li>
	 	<li><a class="facebook" href="<?php echo $fb; ?>"></a></li>
	 	<li><a class="linkedin" href="<?php echo $li; ?>"></a></li>
	</ul>
</div>

