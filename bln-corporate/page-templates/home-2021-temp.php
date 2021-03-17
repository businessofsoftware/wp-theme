<?php
	/*
	Template Name: Home 2021
	*/
    get_header();

?>

<style type="text/css">
    
</style>


<section id="join-us">

    <div class="container-full-width house-advert">
        <div class="container-outer">
            <div class="container-inner-full-width overflow">
                <div class="container-full-width logo button-message" style="background-image:url('https://businessofsoftware.org/wp-content/themes/bln-corporate/images/2021/bos-2021.png'); background-size: 180px auto;">
                    
                    <a class="button" href="https://businessofsoftware.org/conferences/spring/#register">Register</a>
                    <h4 class="dark">BoS Conf Online.Spring: 26 & 27 April 2021</h4>
                </div>
            </div>
        </div>
    </div>

</section>




<div id="hero">

<div class="container-outer-full-width">
        <div class="container-outer">
            <div class="container-inner-full-width overflow">

                        <h2 style="font-size: 4em; font-weight: bold; color: #000;"><?php the_title(); ?></h2>
                        
                        <p style="font-size: 24px; color: #000;">Join a welcoming community of smart entrepreneurs and SaaS leaders. Learn from experts, network with pros, and meet your peers.</p>

                        <p style="font-size: 24px; color: #000;">We run exclusive online conferences, deep-dive masterclasses, and a unique library of over 200 expert talks.</p>

                        <a class="button" href="https://businessofsoftware.org/conferences/spring/#register">Spring Event</a>
                        <a class="button" href="https://businessofsoftware.org/conferences/spring/#register" style="margin-left: 20;x;">Join Community</a>
            </div>

        </div>
    </div>

    <div class="container-outer-full-width hero" style="background: #fff;">
        <div class="container-outer">
            <div class="container-inner-full-width overflow">
                        
                        <?php
                            while(have_posts()) {
                                the_post();
                                the_content();
                            }
                        ?>
                
            </div>

        </div>
    </div>

</div>





 <?php   
    get_footer();
?>