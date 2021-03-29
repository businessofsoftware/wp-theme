
<div id="event-speakers">

	<div class="container-outer bk-white">
		<div class="container overflow">
			
			<?php
				$speaker_ids = get_speakers(6);

				$i=2;
				foreach($speaker_ids as $speaker_id) {
					$post = get_post($speaker_id);
				 	setup_postdata($post);

					$bk = "bk-".$i;
					$beak_bk = "beak-".$i;
					$bio_bk = ($i % 2 ) ? "bk-light" : "bk-white";

					$url = "/speaker/".$post->post_name;
					
					$speaker_image = wp_get_attachment_image_src(get_field('speaker_image', $post->ID), 'thumbnail');
					$title_org = trim(get_field('speaker_title').", ".get_field('speaker_org'), ", ");

					echo '<div class="speaker">';

					echo '<a href="'.$url.'"><img src="'.$speaker_image[0].'" alt="" /></a>';
					echo '	<h4 class="name '.$bk.' beak '.$beak_bk.'">';
					echo '		<span class="name-inner">'.the_title().'</span>';
					echo '	</h4>';
					echo '	<div class="'.$bio_bk.'">';
					echo '		<div class="bio-outer">';
					echo '			<div class="bio-inner">';
					echo '				<h4 class="dark">'.$title_org.'</h4>';
					echo 				get_field_excerpt('speaker_bio', $post->ID);
					echo '			</div>';
					echo '			<div class="bio-more">';
					echo '				<a class="fg-0" href="'.$url.'">View profile</a>';
					echo '			</div>';
					echo '		</div>';
					echo '	</div>';	
					echo '</div>';		
					
			 		$i = ($i < 5) ? ++$i : 2;
				}

				wp_reset_postdata();
			?>
	
		</div>
		
		<?php
			if (count(get_speakers()) > 6) {
				echo '<div class="container-outer more-speakers">';
				echo '	<a class="button" href="/speakers">Show me all the speakers</a>';
				echo '</div>';
			}
		?>
		
	</div>

</div>

