<?php	
	get_template_part('content', 'register-full-width');
?>

<?php
	$bits = explode("/", wp_get_referer());
	$src = $bits[3];
	if($src == "") $src = "home page";
?>

<section id="speaker">
	<div class="container-outer bk-white">
		<div class="container-inner overflow">
			<h4><a class="back fg-0" href="javascript:void(0)" onClick="history.back();">Back to <?php echo $src;?></a></h4>
		</div>
		
		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner company-logo excerpt overflow bk-white">
			<div class="container-right">
				<?php $image = wp_get_attachment_image_src(get_field('company_image'), 'thumbnail'); ?>
				<img src="<?php echo $image[0]; ?>" alt="" />
			</div>

			<div class="container-left overflow">
				<div class="content-main">
					<?php echo get_field('company_profile'); ?>
				</div>

				<p class="company-more"><a class="fg-0" href="<?php echo get_field('company_url'); ?>">Learn more</a></p>

				<?php get_template_part('content', 'company-share'); ?>
				
			</div>
		</div>


		<?php
			$speaker_id = get_the_ID();
			
			$args = array(
				'post_type' => 'session',
				'post_status' => 'publish',
				'meta_query' => array(
					'relation' => 'OR',
					array(
						'key' => 'session_companies', 
						'value' => '"'.$speaker_id.'"',
						'compare' => 'LIKE'
					)
				)
			);

			$sessions = new WP_Query($args);
			while ($sessions->have_posts()) {
				$sessions->the_post();
				setup_postdata($post);
				get_template_part('content', 'company-session');
			}
			wp_reset_postdata();
		?>


	</div>
</section>

<?php
	get_template_part('content', 'register');
?>

