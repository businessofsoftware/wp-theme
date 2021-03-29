<?php
	
	$session_start = get_field("session_start");
	if($session_start == "") {
		$session_start = "TBC";
	}

?>

<div class="container">
	<div class="container-session overflow">

		<div class="container-left-fixed">
			<div class="container overflow">
				<div class="start">
					<h4 class="dark"><?php echo $session_start; ?></h4>
				</div>
			</div>
		</div>

		<div class="container-right-flex">
			<div class="content-main">
				<?php
					$slug = $post->post_name;
					$excerpt = get_field_excerpt('session_description');
					$content = get_field('session_description');

					if(strlen($content) > strlen($excerpt)) {
						echo '<h4><a class="fg-0" href="/session/'.$slug.'">'.get_the_title().'</a></h4>';
					}
					else{
						echo '<h4 class="dark">'.get_the_title().'</h4>';
					}
				?>

				<div class="content-main">
					<?php echo $excerpt; ?>
				</div>

				<?php
					echo get_session_speakers_list(get_session_speakers($post->id), "speakers");
					echo get_session_speakers_list(get_session_speakers($post->id, "moderators"), "moderators");
					echo get_session_companies_list($post->xid);
				?>
			</div>
		</div>

	</div>
</div>