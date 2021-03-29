
<?php
	global $i, $event_type, $event_name;

	$bk = "bk-".$i;
	$beak_bk = "beak-".$i;
	$bio_bk = ($i % 2 ) ? "bk-light" : "bk-white";

	$title = get_field('speaker_title');
	$org = get_field('speaker_org');

	if($title != "") {
		$title_org = $title;
		if($org != "") {
			$title_org.= ", ".$org;
		}
	} else {
		$title_org = $org;
	}

	$url = "/speaker/".$post->post_name;

	$speaker_image = wp_get_attachment_image_src(get_field('speaker_image'), 'thumbnail');
?>



<div class="speaker">
	<a href="<?php echo $url; ?>">
		<img src="<?php echo $speaker_image[0]; ?>" alt="" />
	</a>

	<h4 class="name <?php echo $bk; ?> beak <?php echo $beak_bk; ?>">
		<span class="name-inner"><?php the_title(); ?></span>
	</h4>

	<div class=" <?php echo $bio_bk; ?>">
		<div class="bio-outer">
			<div class="bio-inner">
				<h4 class="dark"><?php echo $title_org; ?></h4>
				<?php echo get_field_excerpt('speaker_bio'); ?>
			</div>
			<div class="bio-more">
				<a class="fg-0" href="<?php echo $url; ?>">View profile</a>
			</div>
		</div>
	</div>

</div>

