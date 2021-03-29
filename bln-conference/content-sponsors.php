<div id="sponsors">
	<div class="container-outer bk-white sponsor-<?php echo $sponsors_span; ?>">
		<div class="container-inner overflow">
  			<h2 class="dark"><a href="/supporters/" style="color:black">Supporters</a></h2>
  			<?php
  				echo get_sponsor_list("gold");
				echo get_sponsor_list("silver");
				echo get_sponsor_list("bronze");
				echo get_sponsor_list("media");
  			?>
 		</div>
	</div>
</div>