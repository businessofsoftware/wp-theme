<?php
	$permalink = urlencode(get_permalink());

	$title = urlencode(get_the_title());
	$summary = urlencode("New blog post by ".get_the_author()." of the Business Leaders Network");
	$source = urlencode("Business Leaders Network");

	$tw = "https://twitter.com/intent/tweet?text=".$title."&amp;url=".$permalink;
	$fb = "https://www.facebook.com/sharer/sharer.php?u=".$permalink;
	$li = "http://www.linkedin.com/shareArticle?mini=true&amp;url=".$permalink."&amp;title=".$title."&amp;summary=".$summary."&amp;source=".$source;
?>

<!--div class="sharing">
	<h4 class="floatleft dark">Share this post</h4>

	<ul class="social floatleft">
	 	<li><a class="twitter" href="<?php echo $tw; ?>"></a></li>
	 	<li><a class="facebook" href="<?php echo $fb; ?>"></a></li>
	 	<li><a class="linkedin" href="<?php echo $li; ?>"></a></li>
	</ul>
</div-->
