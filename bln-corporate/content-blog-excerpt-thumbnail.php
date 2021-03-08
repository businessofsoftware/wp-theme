<div class="container-outer bk-0 white overflow">
	<h1 class="bk-0 beak beak-0"><a class="blog-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	<div class="container-inner bk-white overflow">

		<div class="container-right">

			<?php
				$image_id = get_field('blog_excerpt_image', $post->ID);
				if($image_id != '') {
					$url = wp_get_attachment_image_src($image_id, array(256, 256));
					echo '<img class="floatright" src="'.$url[0].'" alt="'.get_the_title().'" />';
				}
				else {
					the_post_thumbnail(array(256,256), array("class"=>"floatright"));	
				}
			?>
		</div>

		<div class="container-left overflow">
			<h4 class="dateline dark"><?php the_time('F j, Y'); ?></h4>
			<h4 class="dateline dark">By <?php the_author('F j, Y'); ?></h4>

			<div class="content-main">
				<?php the_content(false); ?>
			</div>

			<p class="more">
				<a class="fg-0" href="<?php the_permalink(); ?>">Read more</a>
			</p>
		</div>
	</div>
</div>
