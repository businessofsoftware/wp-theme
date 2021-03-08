

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