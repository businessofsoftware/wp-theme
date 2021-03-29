<?php
	/*
	Template Name: Workshops
	*/
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section class="programme">
	<?php get_template_part('content', 'title-block'); ?>

	<div class="container-outer bk-white overflow">

		<?php

			if (get_post()->post_content != '') {
				echo '<div class="container-inner">';
				echo '<div class="container workshop">';
				the_post();
			 	the_content();
				echo '</div>';
				echo '</div>';
			}

			$workshops = get_workshops();

			if ($workshops != '') {
				foreach ($workshops as $workshop) {
					$post = get_post($workshop);
					if ($post->post_status == 'publish') {
			 			setup_postdata($post);
			 			get_template_part('content', 'workshop-session');
			 		}
				}
				wp_reset_postdata();
			}
		?>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>

