
<?php
	get_header(); 
    get_template_part('content', 'join');
?>

<section id="page">
	<div class="container-outer page-title bk-4 white overflow">
		<div class="container">

	        <div class="container-right">
	        	<div class="container-inner">
	           		<?php get_template_part('content', 'upcoming-events'); ?>
				</div>
	        </div>

	        <div class="container-left overflow">
	        	<div class="container-inner">
	            	<h1 class="dark">Page not found</h1>
					<h4 class="fg-0">Sorry, the requested URL could not be found</h4>
				</div>
	        </div>

		</div>

		<div class="container-inner bk-white">
			<div class="content-main">
				<p>The link you followed may be broken, or the page may have been removed.</p>
				<p>You may have typed the address (URL) incorrectly. Check to make sure you’ve got the exact right spelling or capitalization.</p>
				<p>You can view our footer below for links to our most popular content.</p>
			</div>
		</div>
	</div>
</section>

<?php
	get_template_part('content', 'event-social');
	get_footer();
?>

