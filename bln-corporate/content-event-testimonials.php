


<div id="event-testimonials">
	
    <div class="container-outer overflow">
        <div class="container">

            <?php
                global $post, $bk;

                $bk_maps = array(
                    "bln" => array(array(3,4),array(1,3),array(2,5)),
                    "bos" => array(array(5,3),array(4,5),array(3,4)),
                    "bosuk" => array(array(5,3),array(4,5),array(3,4)),
                    "ceo" => array(array(4,5),array(3,4),array(5,3)),
                    "iot" => array(array(5,2),array(4,5),array(2,4))
                    );

                $type = get_field("event_type");
                $map = $bk_maps[$type];

                $posts = get_testimonials($type);

                $i=0;
                foreach($posts as $post) {
                    $bk = $map[$i];
                    $i = ($i==2) ? 0 : ++$i;

                    setup_postdata($post);
                    get_template_part('content', 'testimonial');
                }

                wp_reset_postdata();
            ?>

	   </div>
    </div>

</div>