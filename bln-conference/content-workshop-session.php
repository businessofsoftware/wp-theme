<?php
	
	$session_start = get_field("session_start");
	if($session_start == "") {
		$session_start = "TBC";
	}

?>

<div class="workshop">
	<div class="container">

		<?php
			$excerpt = get_field_excerpt('session_description');
			$description = get_field('session_description');

			if (strlen($description) > strlen($excerpt)) {
				echo '<h1 class="bk-0 beak beak-0"><a class="blog-title" href="/session/'.$post->post_name.'">'.get_the_title().'</a></h1>';
			}
			else{
				echo '<h1 class="bk-0 beak beak-0">'.get_the_title().'</h1>';
			}
		?>
		
		<div class="container-inner">
			<?php
				echo get_session_speakers_list(get_session_speakers($post->id), "speakers");
				echo get_session_speakers_list(get_session_speakers($post->id, "moderators"), "moderators");
				echo get_session_companies_list($post->xid);
			?>

			<div class="content-main">
				<?php echo $excerpt; ?>
			</div>

			<?php
				$reg_url = get_field('session_reg_url', $post->ID);
				if ($reg_url != '') {
					echo '<div class="register">';
					echo '<a class="button" href="'.$reg_url.'">Register Now</a>';
					echo '</div>';
				}
			?>
		</div>
			
	</div>
</div>
