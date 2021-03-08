
<?php
	$title = get_field('speaker_title');
	$org = get_field('speaker_org');
	$title_org = (strlen($org) > 0) ? $title.', '.$org : $title;
	$image = wp_get_attachment_image_src(get_field('speaker_image'), 'thumbnail');
?>

<section id="speaker">
	<div class="container-outer bk-white">

		<div class="container-inner overflow">
			<h4><a class="fg-0" href="javascript:void(0)" onClick="history.back();">Back to speakers</a></h4>
		</div>

		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner excerpt overflow bk-white">
			<div class="container-right">
				<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" />
			</div>

			<div class="container-left overflow">
				<h4 class="dark"><?php echo $title_org; ?></h4>

				<div class="content-main">
					<?php echo get_field('speaker_bio'); ?>
				</div>

				<?php get_template_part('content', 'speaker-share'); ?>
			</div>
		</div>

	</div>
</section>


