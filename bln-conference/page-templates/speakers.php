<?php
	/*
	Template Name: Speakers
	*/
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section id="event-speakers">

	<?php get_template_part('content', 'title-block'); ?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
	<div class="container-outer bk-white overflow">
		<div class="container-full-width">

			<?php
				global $i;

				$speaker_ids = get_speakers();

				$i=2;
				if($speaker_ids) {
					foreach($speaker_ids as $speaker_id) {
						$post = get_post($speaker_id);
				 		setup_postdata($post);

				 		get_template_part('content', 'event-speaker');

				 		$i = ($i < 5) ? ++$i : 2;
					}
					wp_reset_postdata();
				}
				else {
					get_template_part('content', 'event-page-content');
				}
			?>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>

