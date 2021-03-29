<?php
	/*
	Template Name: Programme
	*/
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section id="schedule">

	<?php get_template_part('content', 'title-block'); ?>

	<div class="container-outer bk-white overflow">
		<?php
			global $num_programmes;

			$programme_ids = get_field('event_programmes', get_event()->ID);
			$num_programmes = published_programmes($programme_ids);

			if ($programme_ids) {
				foreach ($programme_ids as $programme_id) {
					$post = get_post($programme_id);

					if ($post->post_status == 'publish') {
						setup_postdata($post);
			 			get_template_part('content', 'event-programme');
					}	 		
				}
				wp_reset_postdata();
			}
			else {
				get_template_part('content', 'event-page-content');
			}
		?>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>