<?php
	$speakers = get_speakers();
	$title = (count($speakers) > 0) ? "Speakers" : "&nbsp;";
?>

<section id="home-updates">
	
	<div class="title-block" id="sticky-title">
		<div class="container-outer overflow">
			<div class="container">
				
		        <div class="container-left">
		        	<div class="container-inner button-message">
	                    <a class="button" href="/updates">Send me updates</a>
	                    <h4 class="dark">Stay in touch. Join the community</h4>
		            	<h1 class="dark"><?php echo $title; ?></h1>
					</div>
		        </div>

			</div>
		</div>
	</div>

</section>