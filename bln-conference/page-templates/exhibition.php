<?php
	/*
	Template Name: Exhibition
	*/
	get_header();
	get_template_part('content', 'register-full-width');
?>

<section id="event-speakers">

	<?php get_template_part('content', 'title-block'); ?>

	<div class="container-outer bk-white overflow">
		<div class="container-inner">
			
			<?php
				global $i;

				$company_ids = get_field('exhibition_companies');
				
				$i=2;
				if($company_ids) {
					foreach($company_ids as $company_id) {
						$post = get_post($company_id);
				 		setup_postdata($post);
				 		
						get_template_part('content', 'company-excerpt');

						$i = ($i < 5) ? ++$i : 2;
					}
					wp_reset_postdata();
				}
				else {
					get_template_part('content', 'event-page-content');
				}
			?>
		</div>
	</div>

</section>

<?php
    get_template_part('content', 'register');
	get_footer();
?>

