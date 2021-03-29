<?php

get_template_part('init', 'post-types-fields');
get_template_part('init', 'custom-fields');



function get_event() {
    $wp_posts = new WP_Query(array('post_type' => 'event', 'post_status' => 'publish'));
    $event = $wp_posts->get_posts();
    return $event[0];
}

function get_slug($post_id) {
	$post = get_post($post_id);
	return $post->post_name;
}


function get_main_menu($event) {
    $uri = explode('/', $_SERVER["REQUEST_URI"]);
    $req = strtolower($uri[1]);

    if($req == '') {
        $req = "home";
    }
    else if($req == 'speaker') {
        $req = "speakers";
    }
    else if($req == 'talk') {
        $req = "talks";
    }
    else if(is_numeric($req)) {
        $req = "blog";
    }

    $menu_ul = '<ul id="menu" class="main_menu">';

    if($event) {
        $menu_ids = get_field('event_menu', $event->ID);
        if($menu_ids) {
            foreach($menu_ids as $menu_id) {
                $slug = get_slug($menu_id);
                $active = ($slug == $req) ? ' class="active"' : '';
            
                $menu_ul.= '<li><a href="/'.$slug.'"'.$active.'>'.get_the_title($menu_id).'</a></li>';
            }
        }
    }

    $menu_ul.= '</ul>';
    return $menu_ul;
}



function get_speakers($required=999)
{
    $meta_query = array(
        array(
            'relation' => 'AND'
            ),
        array(
            'key'     => 'speaker_featured',
            'compare' => '=',
            'type'    => 'NUMERIC',
            'value'   => 1,
        ),
        array(
            'key'     => 'speaker_lightning',
            'compare' => '=',
            'type'    => 'NUMERIC',
            'value'   => 0,
        )
    );

    $args = array(
        'post_type'      => 'speaker',
        'post_status'    => 'publish',
        'meta_query'     => $meta_query,
        'orderby'        => 'rand',
        'posts_per_page' => $required
        );


    $wp_posts = new WP_Query($args);
    $speakers = $wp_posts->get_posts();

    if($wp_posts->found_posts < $required) {
        $required = $required - $wp_posts->found_posts;

        $post_not_in = array();
        foreach($speakers as $speaker) {
            $post_not_in[] = $speaker->ID;
        }

        $meta_query = array(
            array(
                'key'     => 'speaker_lightning',
                'compare' => '=',
                'type'    => 'NUMERIC',
                'value'   => 0,
            )
        );  

        $args = array(
            'post_type'      => 'speaker',
            'post_status'    => 'publish',
            'meta_query'     => $meta_query,
            'post__not_in'   => $post_not_in,
            'orderby'        => 'rand',
            'posts_per_page' => $required
            );

            $wp_posts = new WP_Query($args);
            $extra_speakers = $wp_posts->get_posts();

            foreach($extra_speakers as $extra_speaker) {
                $speakers[] = $extra_speaker;
            }
    }

    return $speakers;
}


function published_programmes($programme_ids) {
    $num = 0;
    if ($programme_ids) {
        foreach ($programme_ids as $programme_id) {
            $post = get_post($programme_id);
            if ($post->post_status == "publish") {
                $num++;
            }
        }
    }
    return $num;
}


function get_workshops()
{
    $workshops = array();

    $meta_query = array(
        array(
            'key'       => 'programme_type',
            'compare'   => '=',
            'value'     => 'workshop',
        )
    );

    $args = array(
        'post_type'     => 'programme',
        'post_status'   => array('draft', 'publish' ),
        'meta_key'      => 'programme_date',
        'orderby'       => 'meta_value',
        'order'         => 'ASC',
        'meta_query'    => $meta_query,
        );

    $wp_posts = new WP_Query($args);
    $programmes = $wp_posts->get_posts();

    if ($programmes != '') {
        foreach ($programmes as $programme) {
            $sessions = get_field('programme_sessions', $programme->ID);
            
            if ($sessions != '') {
                foreach ($sessions as $session) {
                    $workshops[] = $session;
                }
            }
        }
    }

    return $workshops;
}




function get_speaker_session_role($speaker_id, $session_id) {

    $type = get_field("session_type", $session_id);

    $speakers = get_field("session_speakers", $session_id);
    if ($speakers != '') {
        if (in_array($speaker_id, get_field("session_speakers", $session_id))) {
            if ($type == "panel") {
                return "Panel member";
            }
            else if ($type == "pitch") {
                return "Presenter";
            }
            else if (($type == "talk") || ($type == "lightning")) {
                return "Speaker";
            }
            else if ($type == "sponsor") {
                return "Sponsor";
            }
            else {
                return "Conference organiser";
            }
        }
    }

    $moderators = get_field("session_moderators", $session_id);
    if ($moderators != '') {
        if (in_array($speaker_id, get_field("session_moderators", $session_id))) {
            return "Moderator";
        }
    }

    return "International Man of Mystery";
}


function get_session_speakers($session_id, $speaker_type="speakers") {
    $speakers = array();

    $session_type = get_field ('session_type');
    if(($session_type == "talk") || ($session_type == "lightning") || ($session_type == "panel") || ($session_type == "workshop") || ($session_type == "sponsor") || ($session_type == "welcome") || ($session_type == "close"))
    {
        $speaker_ids = get_field("session_".$speaker_type, $session_id);
        if($speaker_ids) {
            foreach($speaker_ids as $speaker_id){
                $speaker = get_post($speaker_id);

                $slug = $speaker->post_name;
                $name = $speaker->post_title;
                $title = get_field('speaker_title', $speaker->ID);
                $org = get_field('speaker_org', $speaker->ID);

                $title_org = trim($title.", ".$org, ", ");

                $speakers[] = '<a class="fg-0" href="/speaker/'.$slug.'">'.$name.'</a> &ndash; '.$title_org;
            }
        }
    }
    return $speakers;
}



function get_session_date_time($session_id) {
    $date_time = "";

    $programme_ids = get_field("event_programmes", get_event()->ID);

    foreach ($programme_ids as $programme_id) {
        $programme_session_ids = get_field("programme_sessions", $programme_id);
       
        if(in_array($session_id, $programme_session_ids)) {
            $session_start = get_field("session_start", $session_id);
            
            if(count($programme_ids) > 1) {
                $date_time = get_the_title($programme_id)." &ndash; ".date("l jS F Y", strtotime(get_field("programme_date", $programme_id)));
            }
            
            if($session_start != "") {
                $date_time.= "&nbsp;".$session_start;
            }
            
            return '<h4 class="dark">'.trim($date_time, "&nbsp;").'</h4>';
        }
    }

    return $date_time;
}



function get_speaker_sessions($speaker_id) {
    $speaker_sessions = array();
    $programme_ids = get_field("event_programmes", get_event()->ID);

    foreach ($programme_ids as $programme_id) {
        $session_ids = get_field("programme_sessions", $programme_id);

        if ($session_ids != '' ) {
            foreach ($session_ids as $session_id) {
                $session_speakers = get_field("session_speakers", $session_id);
                if (is_array($session_speakers)) {
                    if (in_array($speaker_id, $session_speakers)) {
                        if (get_post($session_id)->post_status == "publish") {
                            $speaker_sessions[] = $session_id;
                        }
                    }
                }

                $session_moderators = get_field("session_moderators", $session_id);
                if (is_array($session_moderators)) {
                    if (in_array($speaker_id, $session_moderators)) {
                        if (get_post($session_id)->post_status == "publish") {
                            $speaker_sessions[] = $session_id;
                        }
                    }
                }
            }
        }
    }

    return $speaker_sessions;
}



function get_session_speakers_list($speakers, $speaker_type) {
    $list = "";

    if($speakers) {  
        if($speaker_type == "speakers") {
            $title = (count($speakers) > 1) ? "Speakers" : "Speaker";
        }
        else {
            $title = (count($speakers) > 1) ? "Moderators" : "Moderator";
        }

        $list.= '<div class="speakers dark">';
        $list.='<h4 class="subtitle">'.$title.'</h4>';
        $list.='<ul>';

        foreach($speakers as $speaker) {
            $list.='<li>'.$speaker.'</li>';
        }

        $list.='</ul>';
        $list.='</div>';
    }

    return $list;
}



function get_session_companies_list($session_id) {
    $list = "";

    $session_type = get_field ('session_type', $session_id);
    if ($session_type == "pitch") {
        $companies = array();

        $company_ids = get_field("session_companies", $session_id);
        if ($company_ids) {
            foreach ($company_ids as $company_id) {
                $company = get_post($company_id);

                $slug = $company->post_name;
                $name = $company->post_title;

                $companies[] = '<a class="fg-0" href="/company/'.$slug.'">'.$name.'</a>';
            }
        }

        if ($companies) {
            $list.= '<div class="speakers dark">';
            $list.='<h4>Companies presenting</h4>';
            $list.='<ul>';

            foreach ($companies as $company) {
                $list.='<li>'.$company.'</li>';
            }

            $list.='</ul>';
            $list.='</div>';
        }
    }

    return $list;
}


function get_sponsor_list($level) {
    $sponsors = get_field("event_".$level."_sponsors", get_event()->ID);

    $list = "";
    if($sponsors) {
        $list.= '<div class="level '.$level.' overflow">';
        $list.= '<h4 class="light">'.ucfirst($level).' sponsors</h4>';

        foreach($sponsors as $sponsor) {
            $company = get_post($sponsor);
            $image = wp_get_attachment_image_src(get_field('company_image', $company->ID), 'thumbnail');

            $list.= '<div class="sponsor">';
            $list.= '<div class="sponsor-inner">';

            $list.= '<a href="/company/'.$company->post_name.'"><img src="'.$image[0].'" alt="" /></a>';
            $list.= '</div>';
            $list.= '</div>';
        }

        $list.= '</div>';
    }
    return $list;
}


function get_supporter_list($level) {
    $sponsors = get_field("event_".$level."_sponsors", get_event()->ID);

    $list = "";
    if($sponsors) {
        $list.= '<div class="level '.$level.' overflow">';
        // $list.= '<h4 class="light">'.ucfirst($level).' sponsors</h4>';

        foreach($sponsors as $sponsor) {
            $company = get_post($sponsor);
            $image = wp_get_attachment_image_src(get_field('company_image', $company->ID), 'thumbnail');

            $list.= '<div class="sponsor">';
            $list.= '<div class="sponsor-inner">';

            $list.= '<a href="/company/'.$company->post_name.'"><img src="'.$image[0].'" alt="" /></a>';
            $list.= '</div>';
            $list.= '</div>';
        }

        $list.= '</div>';
    }
    return $list;
}


?>