<?php

	get_header();
	get_template_part('content', 'register-full-width');
?>

<section>

	<div class="container-outer bk-white overflow">
		<div class="container-inner" style="padding: 40px">
			<div class="content-main">
				<?php
					woocommerce_content();
				?>
			</div>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>