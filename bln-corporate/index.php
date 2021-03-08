<?php
	/*
	Template for blog posts
	*/
	get_header();
	get_template_part('content', 'join');
?>

<section id="blog">

	<div class="title-block">
		<div class="container-outer overflow">
			<div class="container">
				<?php
					$args = array(
						'post_type'		=>'event',
						'post_status' 	=> 'publish',
						'meta_query' => array(
							array(
						        'key'		=> 'event_start',
						        'compare'	=> '>=',
						        'value'		=> date('Ymd')
						    )
					    ),
					    'meta_key' 		=> 'event_start',
						'orderby' 		=> 'meta_value_num',
						'order' 		=> 'ASC'
					);

					$events = new WP_Query($args);
					if($events->have_posts()) {
						echo '<div class="container-right bk-4 white">';
						echo '<div class="container-inner">';
						get_template_part('content', 'upcoming-events');
						echo '</div>';
						echo '</div>';
					}
		        ?>
		        <div class="container-left">
		        	<div class="container-inner">
		            	<h1 class="dark">Blog</h1>
						<h4 class="fg-0">Perspectives on the wonderful world of tech</h4>
					</div>
		        </div>

			</div>
		</div>
	</div>


	<?php
		$args = array(
			'post_status' => 'publish',
			'cat' => ('-'.get_cat_ID('blind')),
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

</section>


<?php
	
	$event = get_featured_event();

	if($event->have_posts()) {
		get_template_part('content', 'event-featured');
	} else {
		get_template_part('content', 'event-social');
	}

	get_footer();
?>
