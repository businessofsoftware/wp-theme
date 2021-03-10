<?php
	/*
	Template Name: Home 2021
	*/
    get_header();

?>

<style type="text/css">
    
</style>


<section id="join-us">

    <div class="container-full-width house-advert shadow">
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

    <div class="container-outer-full-width hero">
        <div class="container-outer">
            <div class="container-inner-full-width overflow">

                <div class="words">
                    <div class="container-inner">
                        <h2><?php the_title(); ?></h2>
                        <?php echo get_field_excerpt('event_description', $post->ID); ?>
                    </div>
                </div>

            </div>

        </div>
    </div>

</div>



<section id="why-join">

    <div class="title-block">
        <div class="container-outer overflow">
            <div class="container">
                <?php
                    $aside = get_field('home_aside');
                    if($aside) {
                        echo '<div class="container-right bk-4 white">';
                        echo '<div class="container-inner">';
                        echo $aside;
                        echo '</div>';
                        echo '</div>';
                    }
                ?>

                <div class="container-left">
                    <div class="container-inner button-message">
                        <a class="button" href="/join">Sign up today</a>
                        <p class="message fg-0">Membership is free</p>
                        <h4 class="dark">Sign up for event invitations<span>, news and insights</span></h4>
                        <h1 class="dark">Upcoming events</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<section id="events">
    <?php
        global $event;

        $args = array(
            'post_type'     =>'event',
            'post_status'   => 'publish',
            'meta_query'        => array(
                array(
                    'key'       => 'event_end',
                    'compare'   => '>=',
                    'value'     => date('Ymd')
                ),
                array(
                    'key'       => 'event_featured',
                    'compare'   => '=',
                    'type' => 'numeric',
                    'value'     => 1,
                )
            ),
            'meta_key'      => 'event_start',
            'orderby'       => 'meta_value_num',
            'order'         => 'ASC'
        );

        $events = new WP_Query($args);

        if ($events->have_posts())
        {
            $event = 2;
            while($events->have_posts())
            {
                $events->the_post();
                get_template_part('content', 'events');
                $event = ($event==4) ? 1 : ++$event;
            }
        }
        else
        {
            get_template_part('content', 'home-sign-up'); 
        }
    ?>
</section>




<section id="follow-us">

    <div class="container-outer house-advert">
        <div class="container-inner">
            <div class="container logo overflow">

                <ul class="social">    
                    <li><a class="twitter" href="https://twitter.com/The_BLN"></a></li>
                    <li><a class="facebook" href="https://www.facebook.com/TheBLN"></a></li>
                    <li><a class="linkedin" href="http://www.linkedin.com/groups/BLN-86169"></a></li>
                </ul>

            </div>
        </div>
    </div>

</section>


 <?php   
    get_footer();
?>