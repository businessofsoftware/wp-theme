
<section id="home-testimonials">
    <div class="container-outer overflow">

        <?php
            global $post, $bk;
            $posts = get_testimonials();
            
            $map = array(array(3,4),array(1,3),array(2,5));

            $i=0;
            foreach($posts as $post) {
                $bk = $map[$i];
                $i = ($i==2) ? 0 : $i;

                setup_postdata($post);
                get_template_part('content', 'testimonial');

                $i++;
            }

            wp_reset_postdata();
        ?>

    </div>
</section>