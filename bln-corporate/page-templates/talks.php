<?php
	/*
	Template Name: Talks
	*/
	get_header();
	get_template_part('content', 'join');
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

					$params = array(
						"event" => isset($_REQUEST["evnt"]) ? strtolower($_REQUEST["evnt"]) : "all",
						"year" => isset($_REQUEST["yr"]) ? strtolower($_REQUEST["yr"]) : "all",
						"speaker" => isset($_REQUEST["spkr"]) ? strtolower($_REQUEST["spkr"]) : "all",
						"topics" => isset($_REQUEST["topics"]) ? explode(",", $_REQUEST["topics"]) : "",
						"sort" => isset($_REQUEST["sort"]) ? strtolower($_REQUEST["sort"]) : "talkdate",
						"paged" => true,
						"page" => $paged
						);

					$wp_query = get_talks($params);

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
    get_template_part('content', 'event-social');
	get_footer();
?>

