
<div id="event-testimonials">
	
    <div class="container-outer overflow">
        <div class="container">

            <?php
                global $bk_maps;
                $bk_maps = array(
                    "bln" => array(array(3,4),array(1,3),array(2,5)),
                    "bos" => array(array(5,3),array(4,5),array(3,4)),
                    "boseu" => array(array(5,3),array(4,5),array(3,4)),
                    "bosuk" => array(array(5,3),array(4,5),array(3,4)),
                    "ceo" => array(array(4,5),array(3,4),array(5,3)),
                    "iot" => array(array(5,2),array(4,5),array(2,4))
                    );

                $type = get_field("event_type", get_event()->ID);
                $map = $bk_maps[$type];

                $posts = get_testimonials();

                $i=0;
                foreach($posts as $post) {
                    $bk = $map[$i];
                    $i = ($i==2) ? 0 : ++$i;

                    setup_postdata($post);
                    
                    echo '<div class="testimonial">';
                    echo '  <div class=" <?php echo $bio_bk; ?>">';
                    echo '      <div class="quote-outer">';
                    echo '          <div class="quote-inner beak beak-'.$bk[0].' bk-'.$bk[0].'">';
                    echo '              <p>'.get_field('testimonial_text').'</p>';
                    echo '          </div>';
                    echo '          <div class="attribution bk-'.$bk[1].'">';
                    echo '              <h4>'.get_the_title().'</h4>';
                    echo '          </div>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                }

                wp_reset_postdata();
            ?>

	   </div>
    </div>

</div>