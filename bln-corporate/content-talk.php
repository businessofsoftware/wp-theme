
<?php
	get_template_part('content', 'join');

	$speaker_ids = get_field('talk_speaker', $post->ID);
	if($speaker_ids != "") {
		$speaker_title = '<h4 class="dark">';

		foreach($speaker_ids as $speaker_id) {
			$speaker_title.= get_the_title($speaker_id).'<span class="fw-light "> &ndash; '.trim(get_field('speaker_title', $speaker_id).", ".get_field('speaker_org', $speaker_id), ", ")."</span><br/>";
		}

		$speaker_title.= '</h4>';
	}

	$event_title = get_talk_event_title();
	
	$bits = explode("/", wp_get_referer());
	$where = ($bits[3] == 'speaker') ? 'speaker' : 'talks';
?>

<section id="talk">
	<div class="container-outer bk-white">
		<div class="container-inner">
			<h4><a class="back fg-0" href="javascript:void(0)" onClick="history.back();">Back to <?php echo $where; ?></a></h4>
		</div>
		
		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner bk-white">
			<?php echo $speaker_title; ?>
			<?php echo $event_title; ?>

			<div class="content-main">
				<?php echo get_field('talk_description', $post->ID); ?>
			</div>
			
			<?php get_template_part('content', 'talk-share'); ?>
		</div>
	</div>
</section>

<?php
	$event = get_featured_event();

	if($event->have_posts()) {
		get_template_part('content', 'event-featured');
	} else {
		get_template_part('content', 'event-social');
	}
?>
