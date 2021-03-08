<?php
	/*
	Template Name: Speakers
	*/
	get_header();
	get_template_part('content', 'join');
?>

<section class="speakers">

	<?php get_template_part('content', 'title-block'); ?>

	<div class="fancy-list container-outer overflow">

		<div class="filters container-right">
        	<div class="container">
				<?php get_template_part('content', 'speaker-filters'); ?>
			</div>
		</div>

		<div class="container-left">
        	<div class="container">
				<?php

					$params = array(
						"topics" => isset($_REQUEST["topics"]) ? explode(",", $_REQUEST["topics"]) : "",
						"sort" => isset($_REQUEST["sort"]) ? strtolower($_REQUEST["sort"]) : "name",
						"paged" => true,
						"page" => $paged
						);

					$wp_query = get_the_speakers($params);

				    while($wp_query->have_posts())
				    {
				        setup_postdata($post);
				        $wp_query->the_post();
				       	get_template_part('content', 'speakers');
				    }
				?>
			</div>
		</div>
	</div>
	<?php
			if($wp_query->max_num_pages > 1) {
		        get_template_part('content', 'speaker-paging');
		    }
		    wp_reset_postdata();
		?>
</section>

<?php
    get_template_part('content', 'event-social');
	get_footer();
?>

