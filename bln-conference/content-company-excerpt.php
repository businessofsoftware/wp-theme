
<div class="company overflow">
	
	<div class="container-right">
		<div class="container overflow">
			<div class="image">
				<?php $image = wp_get_attachment_image_src(get_field('company_image'), 'thumbnail'); ?>
				<img src="<?php echo $image[0]; ?>" alt="" />
			</div>
		</div>
	</div>


	<div class="container-left">
		<div class="content-main">
			<h4 class="dark"><?php echo get_the_title(); ?></h4>

			<div class="content-main">
				<?php echo get_field_excerpt('company_profile'); ?>
			</div>

			<p class="more"><a class="fg-0" href="/company/<?php echo $post->post_name; ?>">Learn more</a></p>

		</div>
	</div>

</div>
