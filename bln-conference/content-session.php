<?php	
	get_template_part('content', 'join');

	$bits = explode("/", wp_get_referer());
	$src = $bits[3];
?>

<section id="session">
	<div class="container-outer bk-white">

		<div class="container-inner overflow">
			<h4><a class="back fg-0" href="javascript:void(0)" onClick="history.back();">Back to <?php echo $src;?></a></h4>
		</div>
		
		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner session overflow bk-white">
			<div class="speakers">
				<?php
					echo get_session_speakers_list(get_session_speakers($post->id), "speakers");
					echo get_session_speakers_list(get_session_speakers($post->id, "moderators"), "moderators");
				?>
			</div>
			
			<div class="content-main ">
			 	<?php echo get_field('session_description'); ?>
			</div>

			<?php
				$type = get_field("session_type", $post->ID);
				
				if(($type == "talk") || ($type == "panel") || ($type == "pitch")) {
					get_template_part('content', 'session-share');
				}
			?>

		</div>

	</div>
</section>

<?php
	get_template_part('content', 'register');
?>

