
<?php
	global $bk;
?>

<div class="testimonial">
	<div class=" <?php echo $bio_bk; ?>">

		<div class="quote-outer">
			<div class="quote-inner <?php echo 'beak beak-'.$bk[0].' bk-'.$bk[0]; ?>">
				<p><?php echo get_field('testimonial_text'); ?></p>
			</div>

			<div class="attribution bk-<?php echo $bk[1]; ?>">
				<h4><?php the_title(); ?></h4>
			</div>
		</div>

	</div>
</div>