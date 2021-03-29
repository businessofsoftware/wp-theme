<?php
	$speakers = get_speakers();
	$title = (count($speakers) > 0) ? "Speakers" : "&nbsp;";
?>

<section id="home-updates">
	
	<div class="title-block">
		<div class="container-outer overflow">
			<div class="container">
				<?php
					$aside = get_field('home_aside');
					if($aside) {
						echo '<div class="container-right bk-4 white">';
						echo '<div class="container-inner">';
						echo $aside;
						echo '</div>';
						echo '</div>';
					}
		        ?>
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