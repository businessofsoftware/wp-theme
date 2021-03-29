<?php
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section id="post">

	<div class="container-outer bk-white">
		<div class="container-inner">
			<h4><a class="back fg-0" href="javascript:void(0)" onClick="history.back();">Back to blog</a></h4>
		</div>

		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner bk-white">
			<h4 class="dateline dark"><?php the_time('F j, Y'); ?> by <?php the_author('F j, Y'); ?></h4>
			
			<div class="content-main">
				<?php the_content(false); ?>
			</div>

			<?php get_template_part('content', 'post-share'); ?>
		</div>
	</div>

</section>


<?php
	get_template_part('content', 'comments');
	get_template_part('content', 'register');
	get_footer();
?>

