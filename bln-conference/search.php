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
				<h1 class="dark">Results for: <?php echo get_search_query(); ?></h1>

				<p>&nbsp;</p>

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
