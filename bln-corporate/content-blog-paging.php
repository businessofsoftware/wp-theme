<?php
	if($wp_query->max_num_pages > 1) {

		$args = array(
			"base"=> home_url().$_SERVER["REQUEST_URI"],
			"type" => 'blog',
			"current" => $paged,
			"total" => $wp_query->max_num_pages,
			"width" => 2,
			// "prefix" => "Newest",
			// "suffix" => "Oldest",
		);

		echo paging_control($args);
	}
?>