<?php	
	get_template_part('content', 'register-full-width');
?>

<?php
	global $speaker_id;

	$speaker_id = $post->ID;

	$title_org = trim(get_field('speaker_title').", ".get_field('speaker_org'), ", ");

	$bits = explode("/", wp_get_referer());
	$src = $bits[3];
	if($src == "") $src = "home page";

	$speaker_image = wp_get_attachment_image_src(get_field('speaker_image'), 'thumbnail');
?>

<section id="speaker">
	<div class="container-outer bk-white">
		<div class="container-inner overflow">
			<h4><a class="back fg-0" href="javascript:void(0)" onClick="history.back();">Back to <?php echo $src;?></a></h4>
		</div>
		
		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner excerpt overflow bk-white">
			<div class="container-right">
				<img src="<?php echo $speaker_image[0]; ?>" alt="" />
			</div>

			<div class="container-left overflow">
				<h4 class="dark"><?php echo $title_org; ?></h4>

				<div class="content-main">
					<?php echo get_field('speaker_bio'); ?>
				</div>

				<?php get_template_part('content', 'speaker-share'); ?>
			</div>
		</div>

		<?php
			
			$speaker_session_ids = get_speaker_sessions($post->ID);

			if($speaker_session_ids) {
				foreach($speaker_session_ids as $speaker_session_id) {
					$post = get_post($speaker_session_id);
					setup_postdata($post);
					get_template_part('content', 'speaker-session');
				}
			}
			wp_reset_postdata();
		?>

	</div>
</section>

<?php
	get_template_part('content', 'register');
?>

