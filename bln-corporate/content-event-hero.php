

<div id="hero">

	<div class="container-outer-full-width hero">
	    <div class="container-outer">
	    	<div class="container-inner-full-width overflow">

		        <div class="words">
		            <div class="container-inner">
		                <h2><?php the_title(); ?></h2>
		                <?php echo get_field_excerpt('event_description', $post->ID); ?>
		            </div>
		        </div>

			</div>

	    </div>
	</div>

</div>
