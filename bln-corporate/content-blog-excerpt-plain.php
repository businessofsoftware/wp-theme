
<div class="container-outer bk-0 white overflow">
	<h1 class="bk-0 beak beak-0 heading-2021"><a class="blog-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="container-inner bk-white overflow">

		<div class="container overflow">
			<h4 class="dateline dark"><?php the_time('F j, Y'); ?> by <?php the_author('F j, Y'); ?></h4>
			
			<div class="content-main">
				<?php the_content(false); ?>
			</div>

			<p class="more">
				<a class="fg-0" href="<?php the_permalink(); ?>">Read more</a>
			</p>
		</div>

	</div>
</div>
