<section class="talk excerpt">
	<h1 class="bk-0 beak beak-0"><?php the_title(); ?> </h1>

	<div class="container-inner overflow bk-white">

		<div class="container-right">
			<?php the_post_thumbnail(array(320,240), array("class"=>"floatright")); ?>
		</div>

		<div class="container-left overflow">
			<h4 class="dark subtitle"><?php echo get_talk_event_title(); ?></h4>
			<div class="content-main"><?php echo get_field_excerpt('talk_description'); ?></div>
			<p class="more"><a href="<?php the_permalink(); ?>">Watch this talk</a></p>
		</div>

	</div>
</section>