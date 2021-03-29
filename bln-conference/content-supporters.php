<div id="sponsors">
	<div class="container-outer bk-white sponsor-<?php echo $sponsors_span; ?>">
		<div class="container-inner overflow">
  			<h2 class="dark"><a href="/supporters/" style="color:black">Supporters </a></h2>
  			<?php
  				echo get_supporter_list("gold");
				echo get_supporter_list("silver");
				echo get_supporter_list("bronze");
				echo get_supporter_list("media");
  			?>
 		</div>
	</div>
</div>