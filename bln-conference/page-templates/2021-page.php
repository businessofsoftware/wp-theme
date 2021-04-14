<?php
	/*
	Template Name: 2021: Page
	*/
    get_header();
    get_template_part('content', 'register-full-width');    
?>

<link rel='stylesheet' id='2021-styles-css'  href='https://businessofsoftware.org/wp-content/themes/bln-conference/css/2021-style.css' type='text/css' media='all' />


<div class="container-outer-full-width page-2021">
        
    <?php
        while(have_posts()) { 
        	?>
            
            <h1><?php echo get_the_title(); ?></h1>

        	<?php 
        		the_post();
            	the_content();
        }
    ?>
                            
</div>

<?php 
    get_footer();
?>
