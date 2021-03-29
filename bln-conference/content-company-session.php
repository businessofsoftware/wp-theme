
<section class="session">
	<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

	<div class="container-inner overflow bk-white">

		<h4 class="dark">Presenting company</h4>

		<div class="content-main">
			<?php echo get_field('session_description'); ?>
		</div>

		<?php get_template_part('content', 'session-share'); ?>
		
	</div>
</section>
