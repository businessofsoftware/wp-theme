
<?php

	$speaker_ids = get_field('talk_speaker');
	$speaker_title = "";
	if($speaker_ids != "")
	{
		$speaker_title = '<p class="dark"><strong>';

		foreach($speaker_ids as $speaker_id)
			$speaker_title.= get_the_title($speaker_id).'<br/>';

		$speaker_title.= '</strong></p>';
	}

	$event_title = get_talk_event_title();

	$image = wp_get_attachment_image_src(get_field('talk_image'), 'thumbnail');
?>


<div class="fancy-item overflow">
	<div class="container-right">
		<p class="bk-2 beak beak-2"><?php the_title(); ?></p>
		
		<div class="right overflow">
			<div class="right-inner">
				<?php echo $speaker_title; ?>
				<?php echo $event_title; ?>
				<p><a class="fg-0" href="<?php the_permalink(); ?>">View this talk</a></p>
			</div>
		</div>
		<div class="left">
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
			</a>
		</div>
	</div>

	<div class="container-left">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
		</a>
	</div>

</div>

