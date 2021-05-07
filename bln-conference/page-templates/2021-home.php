<?php
	/*
	Template Name: 2021: Home
	*/
    get_header();
    get_template_part('content', 'register-full-width');    
?>

<link rel='stylesheet' id='2021-styles-css'  href='https://businessofsoftware.org/wp-content/themes/bln-conference/css/2021-style.css?ver=1.0' type='text/css' media='all' />

<div class="container-outer-full-width home-2021">
        
    <?php
        while(have_posts()) {
            the_post();
            the_content();
        }
    ?>
                            
</div>

<?php 
    get_footer();
?>
