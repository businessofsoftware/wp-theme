
<article class="post excerpt">

	<?php
		if(has_post_thumbnail($post->ID) || get_field('blog_excerpt_image', $post->ID)) {
			get_template_part('content', 'blog-excerpt-thumbnail');
		} else if(has_excerpt($post->ID)) {
			get_template_part('content', 'blog-excerpt-quote');
		} else {
			get_template_part('content', 'blog-excerpt-plain');
		}
	?>

</article>

<?php
	echo do_shortcode( '[boilerplate 4]' );
?>