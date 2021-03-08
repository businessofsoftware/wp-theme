<?php
	global $sponsors_span;
	$sponsor_ids = get_field('event_sponsors');
?>


<div id="event-sponsors">
	<div class="container-outer bk-white sponsor-<?php echo $sponsors_span; ?>">
		<div class="container-inner overflow">

  			<h1 class="dark">Event Sponsors</h1>

				<?php
					if(!empty($sponsor_ids)) {
						foreach($sponsor_ids as $sponsor_id) {
							$post = get_post($sponsor_id);
							setup_postdata($post);

							$url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(212, 114));

							echo '<div class="sponsor-outer">';
							echo '<div class="sponsor-inner">';
							echo '<a href="'.get_field('sponsor_url').'">';
							echo '<img src="'.$url[0].'" alt="'.get_the_title().'" />';
							echo '</a>';
							echo '</div>';
							echo '</div>';
						}
					}

					wp_reset_postdata();
				?>

 		</div>
	</div>
</div>