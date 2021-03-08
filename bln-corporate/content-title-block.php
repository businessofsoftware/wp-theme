<div class="title-block">
	<div class="container-outer overflow">
		<div class="container">
			<?php
				$aside = get_field('page_aside');
				if($aside) {
					echo '<div class="container-right bk-4 white">';
					echo '<div class="container-inner">';
					echo $aside;
					echo '</div>';
					echo '</div>';
				}
	        ?>
	        <div class="container-left">
	        	<div class="container-inner">
	            	<h1 class="dark"><?php echo get_the_title(); ?></h1>
					<h4 class="fg-0"><?php echo get_field('page_subtitle'); ?></h4>
				</div>
	        </div>

		</div>
	</div>
</div>