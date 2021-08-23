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
				<h1 class="dark"><?php single_term_title(); ?></h1>

				<p><?php echo get_the_archive_description(); ?></p>

				<ul>
				<?php while ( have_posts() ) : ?>
					
					<?php the_post(); ?>
					
					<li><a class="blog-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					
				<?php endwhile; ?>
				</ul>

			</div>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>
