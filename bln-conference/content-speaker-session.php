<?php
	global $speaker_id;
?>

<section class="session">
	<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

	<div class="container-inner overflow bk-white">

		<?php echo get_session_date_time($post->ID); ?>

		<h4 class="dark"><?php echo get_speaker_session_role($speaker_id, $post->ID); ?></h4>

		<div class="content-main">
			<?php echo get_field('session_description'); ?>
		</div>

		<?php
			$type = get_field("session_type", $post->ID);
			if (($type == "talk") || ($type == "panel") || ($type == "pitch") || ($type == "workshop")) {
				get_template_part('content', 'session-share');
			}
		?>

	</div>
</section>
