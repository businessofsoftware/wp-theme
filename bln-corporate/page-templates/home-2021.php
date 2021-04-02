<?php
	/*
	Template Name: Home 2021
	*/
    get_header();
    get_template_part('content', 'join');
?>

<style type="text/css">
    footer {
        margin-top: 0px;
    }

    .hp-2021-section {

    }

    .hp-2021-section-orange {

    }

    .hp-2021-section-hero {

    }

    .hp-2021-orange {

    }

    .hp-2021-image {
        background-image: url("https://businessofsoftware.org/wp-content/themes/bln-corporate/event-images/bos_hero.jpg");
        background-position: top center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .hp-2021-white {
        background: #fff;
    }

    .hp-2021-white p, .hp-2021-orange p {
        font-size: 1.3em;
        line-height: 1.5em;
    }

    .hp-2021-content {
        max-width: 768px !important;
        margin: 0 auto;
        padding: 50px 0;
    }

    .hp-2021-orange h2 {
        color: #fff;
        display: inline-block;
        margin-bottom: 5px;
    }

    .hp-2021-orange h3 {
        font-weight: bold;
        color: #fff;
        width: fit-content;
        margin-bottom: 40px;
    }

    .hp-2021-orange p.tag {
        font-weight: bold;
        text-transform: uppercase;
        color: #fff;
    }

    .hp-2021-orange img {
        border: solid 3px #fff;
        margin-left: 20px;
        border-radius: 15px;
    }

    .hero-2021 {
        max-width: 768px !important;
        color: #fff;
        margin: 0 auto;
        padding: 50px 0;
    }

    .hero-2021 h2 {
        font-weight: bold;
        background: #fff;
        padding: 10px 20px;
        color: rgb(238,94,48);
        display: inline-block;
        margin-bottom: 5px;
    }

    .hero-2021 h3 {
        font-weight: bold;
        background: #fff;
        padding: 10px 20px;
        color: rgb(238,94,48);
        width: fit-content;
        margin-bottom: 40px;
    }

    .hero-2021 p {
        padding: 10px 20px;
        color: #000;
        font-size: 1.5em;
        line-height: 1.5em;
        background: #fff;
        margin-bottom: 5px;
    }

    .cta-2021-primary a {
        color: #fff;
        background: rgb(238,94,48);
        border: solid 1px rgb(238,94,48);
        font-size: 1.3em;
        margin-top: 40px;
    }

    .cta-2021-secondary a {
        color: rgb(238,94,48);
        background: #fff;
        border: solid 1px rgb(238,94,48);
        font-size: 1.3em;
        margin-top: 40px;
    }

    .hp-2021-orange .cta-2021-primary a {
        color: rgb(238,94,48);
        background: #fff;
        border: solid 1px rgb(238,94,48);
    }
</style>

<div class="container-outer-full-width">
        
    <?php
        while(have_posts()) {
            the_post();
            the_content();
        }
    ?>
                            
</div>

<?php 
    get_template_part('content', 'testimonials-list');
    get_footer();
?>