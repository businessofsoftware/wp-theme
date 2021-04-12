<?php
	/*
	Template Name: 2021: Home
	*/
    get_header();
    get_template_part('content', 'register-full-width');    
?>

<style type="text/css">
	
	/* GLOBAL */

		.bos .bk-0 {
			background: #fff;
		}

		.shadow {
			box-shadow: none;
		}

		.home-2021 p, .home-2021 li {
			font-size: 1.5em;
	        line-height: 1.5em;
		}

		.home-2021 h2 {
			font-weight: bold;
			display: inline-block;
			margin-bottom: 5px;
		}

		.home-2021 h3 {
			color: #fff;
		    background: rgb(238,94,48);
		    padding: 5px 10px;
		    text-transform: uppercase;
		    margin-bottom: 20px;
		    width:fit-content;
		}

		::selection {
		  background: rgb(238,94,48);
		}

		.orange ::selection {
		  background: #fff;
		}

		.home-2021 figure.alignright {
			border-radius: 25px 25px 0 0;
    		border: solid 5px rgb(238,94,48);
		}

		.home-2021 figure.alignright img {
			border-radius: 21px 21px 0 0;
		}

		.home-2021 figure.alignright figcaption {
			text-align: center;
		    background: rgb(238,94,48);
		    color: #fff;
		    margin: 0;
		    padding: 5px 10px 10px 10px;
		    border-radius: 0 0 25px 25px;
		    line-height: 1.5em;
		}


	/* CONTENT SECTIONS */

		/* select all ".wp-block-group__inner-container"s that are not descendants of ".wp-block-group__inner-container" */
		.wp-block-group__inner-container:not(.wp-block-group__inner-container *) {
			box-sizing: border-box;
		    max-width: 768px;
	    	margin: 0 auto;
	    	padding: 50px 0;
		}

		@media (max-width: 768px) {
			.wp-block-group__inner-container:not(.wp-block-group__inner-container *) {
	    		padding: 50px 40px;
			}		
		}


	/* HERO SECTION */

		.home-2021 .hero {
			background-image: url(https://businessofsoftware.org/wp-content/themes/bln-corporate/event-images/bos_hero.jpg);
		    background-position: top center;
		    background-repeat: no-repeat;
		    background-size: cover;
		    height: auto;
		}

		.home-2021 .hero h2 {
		    background: #fff;
		    padding: 10px 20px;
		    color: rgb(238,94,48);
		    margin-bottom: 2px;
		}

		.home-2021 .hero h3 {
			font-weight: bold;
		    background: #fff;
		    padding: 10px 20px;
		    color: rgb(238,94,48);
		    width: fit-content;
		    margin: 0 0 40px 0;
		}

		.home-2021 .hero p {
			padding: 10px 20px;
		    color: #000;
		    background: #fff;
		    margin-bottom: 2px;
		    display: inline-block;
		}

		.home-2021 .wp-block-buttons {
			margin-top:40px;
		}

		.home-2021 .wp-block-button a {
			color: #fff;
    		background: rgb(238,94,48);
    		font-size: 1.5em;
    		box-shadow: 2px 3px #000;
		}

		.home-2021 .wp-block-button a:hover {
    		box-shadow: 4px 6px #000;
		}

		.home-2021 div.secondary a {
			color: rgb(238,94,48);
    		background: #fff;
    		border: solid 1px rgb(238,94,48);
		}

	/* ORANGE SECTIONS */
		.home-2021 .orange {
			background: rgb(238,94,48);
		}

		.home-2021 .orange h2, .home-2021 .orange h3 {
		    color: #fff;
		}

		.home-2021 .orange figure.alignright {
    		border: solid 5px #fff;
		}

		.home-2021 .orange figure.alignright figcaption {
			background: #fff;
		    color: #000;
		}

		.home-2021 .orange h3 {
			color: rgb(238,94,48);
		    background: #fff;
		}


	/* RSS FEED SECTION */

		.home-2021 .wp-block-rss {
			margin: 0;
		}

		.home-2021 .wp-block-rss li {
			list-style: none;
			margin-bottom: 40px;
		}

		.home-2021 .wp-block-rss .wp-block-rss__item-title a {
			color: rgb(238,94,48);
		}

		.home-2021 .wp-block-rss .wp-block-rss__item-publish-date {
			text-transform: uppercase;
			font-size: .6125em;
			margin-bottom: 10px;
		}

		.home-2021 .wp-block-rss .wp-block-rss__item-excerpt {

		}


	/* MOBILE TWEAKS */

		@media (max-width: 567px) {
			.home-2021 figure.alignright {
				margin: 0 auto;
    			float: none;
			}
		}
</style>


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
