<?php
	/*
	Template Name: Archive
	*/
	get_header();
?>

<section>

	<div class="container-outer bk-white overflow">
		<div class="container-inner">
			<div class="content-main">
				<h1 class="dark"><?php the_archive_title(); ?></h1>

				<p><?php echo get_the_archive_description(); ?></p>

				<?php while ( have_posts() ) : ?>
					<?php the_post(); ?>
					
						<h3><a class="blog-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					
				<?php endwhile; ?>

			</div>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>
