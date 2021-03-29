<?php
	/*
	Template Name: Talks
	*/
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section id="talks">
	<?php get_template_part('content', 'title-block'); ?>

	<div class="fancy-list container-outer overflow">

		<div class="filters container-right">
        	<div class="container">
				<?php get_template_part('content', 'talk-filters'); ?>
			</div>
		</div>

		<div class="container-left">
        	<div class="container">
				<?php
					function recommended_orderby($orderby) {
						global $wpdb;
    					return $wpdb->prefix.'postmeta.meta_value DESC, '.$wpdb->prefix.'posts.post_date DESC';
					}

					$tax_query = null;
					if(isset($_REQUEST["topics"])) {
						$topics = explode("_", $_REQUEST["topics"]);

						$tax_query = array(
							array(
								'taxonomy' => 'talks',
								'field' => 'term_id',
								'terms' => $topics,
								'operator' => 'IN',
								'include_children'=>true
							));
					}

					$args= array(
				        'post_type' => 'talk',
				        'post_status' => 'publish',
				        'paged' => $paged,
				       	'tax_query' => $tax_query,
				    );

					$orderby = isset($_REQUEST["orderby"]) ? strtolower($_REQUEST["orderby"]) : "recommended";
				 
					if($orderby == "newest") {
						$args['orderby'] = 'date';
						$args['order'] = 'DESC';
					} else if($orderby == "recommended") {
						$args['meta_key'] = 'talk_featured';
					    $args['meta_query'] = array(
					        array(
					            'key' => 'talk_featured',
					        )
					    );
					    add_filter('posts_orderby','recommended_orderby');
					}

				    $wp_query = new WP_Query($args);

				    if(has_filter('posts_orderby','recommended_orderby')) {
				    	remove_filter('posts_orderby','recommended_orderby');
				    }

				    while($wp_query->have_posts())
				    {
				        setup_postdata($post);
				        $wp_query->the_post();
				       	get_template_part('content', 'talks');
				    }
				?>
			</div>
		</div>
	</div>
	<?php
		if($wp_query->max_num_pages > 1) {
	        get_template_part('content', 'talk-paging');
	    }
	    wp_reset_postdata();
	?>
</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>