

<section id="comments" class="wp-comments">
	<div class="container-outer bk-white white overflow">
		<div class="container-inner">
			<?php
				if(comments_open() || get_comments_number()){
					comments_template();
				}
			?>
		</div>
	</div>
</section>