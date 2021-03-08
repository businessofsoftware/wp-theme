<?php
	/*
	Template Name: Events
	*/
	get_header();
	get_template_part('content', 'join');
?>

<section id="events">

	<?php
		global $event;

		$args = array(
			'post_type'		=>'event',
			'post_status' 	=> 'publish',
			'meta_query' => array(
				array(
			        'key'		=> 'event_end',
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
			get_template_part('content', 'title-block');
			
			$event = 2;
			while($events->have_posts())
			{
				$events->the_post();
				get_template_part('content', 'events');
				$event = ($event < 4) ? ++$event : 2;
			}
		}
	?>


	<?php
		global $event;

		$args = array(
			'post_type'		=>'event',
			'post_status' 	=> 'publish',
			'meta_query' => array(
				'relation' => 'AND',
				array(
			        'key'		=> 'event_end',
			        'compare'	=> '<',
			        'value'		=> date('Ymd')
			    ),
			    array(
			        'key'		=> 'event_start',
			        'compare'	=> '>=',
			        'value'		=> date('Ymd', (time() - 60*60*24*365))
			    )
		    ),
		    'meta_key' 		=> 'event_start',
			'orderby' 		=> 'meta_value_num',
			'order' 		=> 'DESC'
		);

		$events = new WP_Query($args);
		
		if($events->have_posts()) {
			get_template_part('content', 'title-block-recent-events');

			$event = 2;
			while($events->have_posts())
			{
				$events->the_post();
				get_template_part('content', 'events');
				$event = ($event < 4) ? ++$event : 2;
			}
		}
	?>

</section>


<?php
    get_template_part('content', 'event-social');
	get_footer();
?>

