<?php

	get_header();
	get_template_part('content', 'register-full-width');
?>

<section>

	<?php get_template_part('content', 'title-block'); ?>

	<div class="container-outer bk-white overflow">
		<div class="container-inner" style="padding: 0px 40px 40px 40px">
			<div class="content-main">
				<?php
					while(have_posts()) {
						the_post();
					 	the_content();
					}
				?>
			</div>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>