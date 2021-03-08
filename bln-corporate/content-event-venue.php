
<?php
	$event_venue = get_field('event_venue');
	$venue_id = $event_venue[0];
?>

<div id="event-venue">

	<div class="container-outer <?php echo $type; ?> bk-white">
		<div class="container-inner clearfloat">

			<h1 class="dark">Venue</h1>

			<div class="container overflow">
				<div class="venue">
					<div class="content-main event">
						<?php echo get_field('venue_description', $venue_id); ?>
					</div>
				</div>

				<div class="map">
					<?php echo get_field('venue_map', $venue_id); ?>
				</div>
			</div>

		</div>
	</div>

</div>

