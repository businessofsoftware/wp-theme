<?php
	get_header();
	get_template_part('content', 'join');
?>

<section id="post">

	<div class="container-outer bk-white">

		<h1 class="bk-0 beak beak-0 heading-2021"><?php the_title(); ?> </h1>

		<div class="container-inner bk-white post-container-2021">

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
	get_template_part('content', 'event-featured');
	get_footer();
?>