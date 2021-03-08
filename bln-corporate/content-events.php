
<?php
	global $event;

	$event_venue = get_field('event_venue');
	$venue_id = $event_venue[0];
	$city = get_field('venue_city', $venue_id);
	$url = get_field('event_site');
	$url = empty($url) ? get_permalink() : $url; 
?>

<div class="container-outer <?php echo "bk-$event ".get_field('event_type'); ?>">
	<div class="container-inner">
		<div class="container logo">
			
			<div class="when">
				<h3><?php echo get_field('event_date'); ?><br/><?php echo $city; ?></h3>
			</div>
			<div class="more">
				<a class="button" href="<?php echo $url; ?>">Learn More</a>
			</div>
			<div class="excerpt">
				<?php echo get_field('event_summary', $post->ID); ?>
			</div>

		</div>
	</div>
</div>




