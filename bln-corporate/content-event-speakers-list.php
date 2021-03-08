

<div id="event-speakers">

	<div class="container-outer bk-white">
		<div class="container overflow">
			
			<?php
				global $i, $event_type, $event_name, $num_speakers, $sponsors_span;

				$event_type = get_field('event_type');
				$event_name = $post->post_name;

				$speaker_ids = get_field('event_speakers');
				if($speaker_ids) {
					$num_speakers = count($speaker_ids);
					$sponsors_span = 3 - ($num_speakers % 3);

					$i=2;
					foreach($speaker_ids as $speaker_id) {
					
						$post = get_post($speaker_id);
				 		setup_postdata($post);

				 		get_template_part('content', 'event-speaker');

				 		$i = ($i < 5) ? ++$i : 2;
					}
					wp_reset_postdata();

					if($sponsors_span < 3)
						get_template_part('content', 'event-sponsors');
				}
			?>

		</div>
	</div>

</div>

