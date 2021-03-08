<?php
	get_header();
	get_template_part('content', 'join');
?>

<section id="post">

	<div class="container-outer bk-white">
		<div class="container-inner">
			<h4><a class="back fg-0" href="javascript:void(0)" onClick="history.back();">Back to blog</a></h4>
		</div>

		<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

		<div class="container-inner bk-white">

			<h4 class="dateline dark"><?php the_time('F j, Y'); ?></h4>
			<h4 class="dateline dark">By <?php the_author('F j, Y'); ?></h4>
			<h4 class="subtitle dark"><a class="dark" href="#comments"><?php echo approved_comments($post->ID); ?></a></h4>

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

