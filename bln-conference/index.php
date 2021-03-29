<?php
	/*
	Template Name: Blog
	*/
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section id="news">
	
	<?php
		$post = get_page_by_title('blog');
		setup_postdata($post);
		get_template_part('content', 'title-block');
		wp_reset_postdata();
	?>

	<div class="container-outer bk-white overflow">

			<?php
				$args = array(
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'DESC',
					'paged' => $paged
					);

				$posts = new WP_Query($args);
				if($posts->found_posts > 0)
				{
					while($posts->have_posts())
					{
						$posts->the_post();
						get_template_part('content', 'blog-posts');
					}

					get_template_part('content', 'blog-paging');
				}
				else
				{
					get_template_part('content', 'blog-no-posts');
				}
			?>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>