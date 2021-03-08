
<?php
	$args = array(
		'post_type'			=>'event',
		'post_status' 		=> 'publish',
		'meta_query' 		=> array(
			array(
		        'key'		=> 'event_start',
		        'compare'	=> '>=',
		        'value'		=> date('Ymd')
		    )
	    ),
	    'posts_per_page'	=> 3,
	    'meta_key' 			=> 'event_start',
		'orderby' 			=> 'meta_value_num',
		'order' 			=> 'ASC'
	);

	$events = new WP_Query($args);
?>

<div id="upcoming">
	<h3>Upcoming events</h3>
	<ul>

		<?php
			while($events->have_posts()) :
				setup_postdata($post);
				$events->the_post();

				$short_title = get_field('event_short_title');
				$title = empty($short_title) ? get_the_title() : $short_title;

				$url = get_field('event_site');
				$url = empty($url) ? get_permalink() : $url;

				$date = get_field('event_date');
				$venue = get_field('event_venue');
				$city = get_field('venue_city', $venue[0])

		?>
		<li>
			<p><a class="white" href="<?php echo $url; ?>"><?php echo $title; ?></a></p>
			<p><?php echo $date.' &ndash; '.$city; ?></p>
		</li>
	<?php
		endwhile;
		wp_reset_postdata();
	?>

	</ul>
	
</div>