<?php

//error_reporting(E_ALL);
error_reporting(0);


add_action('admin_init', 'admin_init');
function admin_init()
{
	if(current_user_can('delete_posts'))
		add_action('trash_post', 'sync_trash');
		
	if(current_user_can('edit_posts')) {
		add_action('wp_insert_post', 'sync_save');
	}
}




add_action('init', 'corporate_custom_fields');
function corporate_custom_fields() {

    register_field_group(array (
        'id' => 'acf_blog',
        'title' => 'Blog',
        'fields' => array (
            array (
                'key' => 'field_537e8fd3fed00',
                'label' => 'Excerpt image',
                'name' => 'blog_excerpt_image',
                'type' => 'image',
                'save_format' => 'id',
                'preview_size' => 'thumbnail',
                'library' => 'all',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'side',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));


    register_field_group(array (
        'id' => 'acf_page',
        'title' => 'Page',
        'fields' => array (
            array (
                'key' => 'field_5343e22f72f86',
                'label' => 'Subtitle',
                'name' => 'page_subtitle',
                'type' => 'text',
                'instructions' => 'Subtitles should be no more than 140 characters',
                'required' => 0,
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_533f17c6b74b8',
                'label' => 'Title aside',
                'name' => 'page_aside',
                'type' => 'wysiwyg',
                'instructions' => 'Block of text displayed to the right of the page title (240 characters or less)',
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/events.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/talks.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/speakers.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/programme.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'index.php',
                    'order_no' => 0,
                    'group_no' => 1,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/speakers.php',
                    'order_no' => 0,
                    'group_no' => 2,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/venue.php',
                    'order_no' => 0,
                    'group_no' => 3,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/workshops.php',
                    'order_no' => 0,
                    'group_no' => 3,
                ),
            ),
            array (
                array (
                    'param' => 'post',
                    'operator' => '==',
                    'value' => '1086',
                    'order_no' => 0,
                    'group_no' => 4,
                ),
            ),
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'default',
                    'order_no' => 0,
                    'group_no' => 5,
                ),
            ),
        ),
        'options' => array (
            'position' => 'acf_after_title',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'excerpt',
                1 => 'custom_fields',
                2 => 'discussion',
                3 => 'comments',
                4 => 'revisions',
                5 => 'slug',
                6 => 'author',
                7 => 'format',
                8 => 'featured_image',
                9 => 'categories',
                10 => 'tags',
                11 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

    register_field_group(array (
        'id' => 'acf_home',
        'title' => 'Home',
        'fields' => array (
            array (
                'key' => 'field_535d7d562f6da',
                'label' => 'Hero box',
                'name' => 'home_hero',
                'type' => 'wysiwyg',
                'instructions' => 'Hero box text must contain no more than 400 characters. The first line should be an H2',
                'required' => 1,
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),
            array (
                'key' => 'field_535d7d9e88559',
                'label' => 'Upcoming aside',
                'name' => 'home_aside',
                'type' => 'wysiwyg',
                'instructions' => 'Block of text displayed to the right of the Upcoming events panel. Text should be 240 characters or less. First line should be an H3',
                'required' => 1,
                'default_value' => '',
                'toolbar' => 'full',
                'media_upload' => 'no',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/home.php',
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'no_box',
            'hide_on_screen' => array (
                0 => 'permalink',
                1 => 'the_content',
                2 => 'excerpt',
                3 => 'discussion',
                4 => 'comments',
                5 => 'revisions',
                6 => 'slug',
                7 => 'author',
                8 => 'format',
                9 => 'featured_image',
                10 => 'categories',
                11 => 'tags',
                12 => 'send-trackbacks',
            ),
        ),
        'menu_order' => 0,
    ));

}


add_action('init', 'add_talk_topics');
function add_talk_topics() {
    
    $labels = array(
        'name'              => _x('Talk Topics', 'taxonomy general name'),
        'singular_name'     => _x('Topic', 'taxonomy singular name'),
        'search_items'      => __('Search Topic'),
        'all_items'         => __('All Topics'),
        'parent_item'       => __('Parent Topic'),
        'parent_item_colon' => __('Parent Topic:'),
        'edit_item'         => __('Edit Topic'),
        'update_item'       => __('Update Topic'),
        'add_new_item'      => __('Add New Topic'),
        'new_item_name'     => __('New Topic Name'),
        'menu_name'         => __('Topics'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'talk'),
    );

    register_taxonomy('talks', array('talk'), $args);

}




add_action('init', 'add_speaker_topics');
function add_speaker_topics()
{    
    $labels = array(
        'name'              => _x('Speaker Topics', 'taxonomy general name'),
        'singular_name'     => _x('Topic', 'taxonomy singular name'),
        'search_items'      => __('Search Topic'),
        'all_items'         => __('All Topics'),
        'parent_item'       => __('Parent Topic'),
        'parent_item_colon' => __('Parent Topic:'),
        'edit_item'         => __('Edit Topic'),
        'update_item'       => __('Update Topic'),
        'add_new_item'      => __('Add New Topic'),
        'new_item_name'     => __('New Topic Name'),
        'menu_name'         => __('Topics'),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'speaker'),
    );

    register_taxonomy('speakers', array('speaker'), $args);
}




function get_events()
{
    $titles = array(
        'bosus' => 'Business of Software US',
        'bosuk' => 'Business of Software UK',
        'ceo' => 'CEO Tales',
        'iot' => 'Internet of Things Forum',
        'dd' => 'Discussion Dinner'
        );

    $args = array(
        'post_type' => 'talk',
        'post_status' => 'publish',
        'posts_per_page' => -1
        );

    $wp_query = new WP_Query($args);

    $events = array();
    while ($wp_query->have_posts())
    {
        $post = $wp_query->next_post();
        $id = get_field("talk_event_type", $post->ID);
        $events[$id] = $titles[$id];
    }

    $name_key = array();
    foreach ($events as $name) {
        $name_key[]  = $name;
    }

    array_multisort($name_key, SORT_ASC, $events);

    return $events;
}



function get_talk_years($event_id)
{
    $params = array();

    if ($event_id != "all") {
        $params["event"] = $event_id;
    }

    $talks = get_talks($params);

    while ($talks->have_posts()) {
        $post = $talks->next_post();

        $talk_year = date("Y", strtotime(get_field("talk_event_date", $post->ID)));
        $years[] = $talk_year;
    }
 
    $years = array_unique($years);
    arsort($years);
    return $years;
}


function get_talk_speakers($event, $year)
{
    $params = array(
        "event" => $event,
        "year" => $year,
        );

    $talks = get_talks($params);

    $speakers = array();
    while ($talks->have_posts())
    {
        $post = $talks->next_post();

        $talk_speaker = get_field("talk_speaker", $post->ID);

        $speaker_id = $talk_speaker[0];

        $speakers[$speaker_id] = array(
            "id" => $speaker_id,
            "name" => get_the_title($speaker_id)
            );
    }

    $last_name_key = array();
    foreach ($speakers as $speaker) {
        $parts = explode(" ", $speaker["name"]);
        $last_name = array_pop($parts);
        $last_name_key[] = $last_name;
    }

    array_multisort($last_name_key, SORT_ASC, $speakers);
    return $speakers;
}




function get_talk_topics($event, $year, $speaker)
{
    $params = array(
        "event" => $event,
        "year" => $year,
        "speaker" => $speaker
        );

    $talks = get_talks($params);

    $topics = array();
    while ($talks->have_posts())
    {
        $post = $talks->next_post();
        $terms = wp_get_post_terms($post->ID, 'talks');

        foreach ($terms as $term)
        {
            if (!array_key_exists($term->term_id, $topics))
            {
                $topics[$term->term_id] = array(
                    "id" => $term->term_id,
                    "name" => $term->name,
                    "count" => 1
                    );
            }
            else {
                $topics[$term->term_id]["count"]++;
            }
        }
    }

    $topic_name = array();
    foreach ($topics as $key => $topic) {
        $topic_name[$key]  = $topic['name'];
    }

    array_multisort($topic_name, SORT_ASC, $topics);
    return $topics;
}

function talks_orderby_recommended($orderby)
{
    global $wpdb;
    return $wpdb->prefix.'postmeta.meta_value DESC, '.$wpdb->prefix.'posts.post_date DESC';
}

function get_talks($params)
{
    $event = isset($params["event"]) ? $params["event"] : "all";
    $year = isset($params["year"]) ? $params["year"] : "all";
    $speaker = isset($params["speaker"]) ? $params["speaker"] : "all";
    $topics = isset($params["topics"]) ? $params["topics"] : "";
    $sort = isset($params["sort"]) ? $params["sort"] : "talkdate";
    $paged = isset($params["paged"]);
    $page = isset($params["page"]) ? $params["page"] : 0;

    $args = array(
        'post_type' => 'talk',
        'post_status' => 'publish',
        'meta_query' => array()
        );

    if ($paged) {
        $args["paged"] = $params["page"];
    } else {
        $args["posts_per_page"] = -1;
    }
    
    if ($event != "all") {
        $talk_meta_query = array('key' => 'talk_event_type', 'value' => $event);
        array_push($args['meta_query'], $talk_meta_query);
    }

    if ($year != "all") {
        $year_start = substr($year, 2)."0101";
        $year_end = substr($year, 2)."1231";

        $talk_meta_query = array(
            'key' => 'talk_event_date',
            'value' => array($year_start, $year_end),
            'type' => 'date',
            'compare' => 'between'
            );
        array_push($args['meta_query'], $talk_meta_query);
    }

    if ($speaker != "all") {
        $speaker_meta_query = array('key' => 'talk_speaker', 'value' => $speaker, 'compare' => 'LIKE');   
        array_push($args['meta_query'], $speaker_meta_query);
    }

    if ($topics != "") {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'talks',
                'field' => 'term_id',
                'terms' => $topics,
                'operator' => 'IN',
                'include_children'=>true
                )
            );
    }

    if ($sort == "talkdate") {
        $args['meta_key'] = 'talk_event_date';
        $args['orderby'] = 'meta_value';
        $args['order'] = 'DESC';
    } elseif ($sort == "newest") {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    } elseif ($sort == "viewed") {
        $args['meta_key'] = 'talk_vimeo_plays';
        $args['orderby'] = 'meta_value_num';
        $args['order'] = 'DESC';
    }

    $talks = new WP_Query($args);

    if (has_filter('posts_orderby','talks_orderby_recommended')) {
        remove_filter('posts_orderby','talks_orderby_recommended');
    }

    return $talks;
}






function speakers_orderby_lastname ($orderby_sql)
{
    return "RIGHT(post_title, LOCATE(' ', REVERSE(post_title)) - 1) ASC";
}

function get_the_speakers($params = array())
{
    $topic_ids = isset($params["topics"]) ? $params["topics"] : "";
    $sort = isset($params["sort"]) ? strtolower($params["sort"]) : "name";
    $paged = isset($params["paged"]);
    $page = isset($params["page"]) ? $params["page"] : 0;

    $args = array(
        'post_type' => 'speaker',
        'post_status' => 'publish',
        'meta_query' => array()
        );

    if ($paged) {
        $args["paged"] = $params["page"];
    } else {
        $args["posts_per_page"] = -1;
    }

    if ($topic_ids != "")
    {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'speakers',
                'field' => 'term_id',
                'terms' => $topic_ids,
                'operator' => 'IN',
                'include_children'=>true
                )
            );
    }

    if ($sort == "name") {
        add_filter('posts_orderby','speakers_orderby_lastname');
    } else {
        $args['orderby'] = 'date';
        $args['order'] = 'DESC';
    }

    $speakers = new WP_Query($args);

    if(has_filter('posts_orderby','speakers_orderby_lastname')) {
        remove_filter('posts_orderby','speakers_orderby_lastname');
    }

    return $speakers;
}


function get_speaker_topics()
{
    $speakers = get_the_speakers();

    $topics = array();
    while ($speakers->have_posts())
    {
        $post = $speakers->next_post();
        $terms = wp_get_post_terms($post->ID, 'speakers');

        foreach ($terms as $term)
        {
            if (!array_key_exists($term->term_id, $topics))
            {
                $topics[$term->term_id] = array(
                    "id" => $term->term_id,
                    "name" => $term->name,
                    "count" => 1
                    );
            }
            else {
                $topics[$term->term_id]["count"]++;
            }
        }
    }

    $topic_name = array();
    foreach ($topics as $key => $topic) {
        $topic_name[$key]  = $topic['name'];
    }

    array_multisort($topic_name, SORT_ASC, $topics);
    return $topics;
}






function get_talk_event_title()
{
    $event_obj = get_field_object('talk_event_type');
    if ($event_obj !== "")
    {
        $event_title = $event_obj["choices"][$event_obj["value"]];

        if ($event_title != "") {
            $event_title = '<p class="dark"><strong>'.$event_title." ".date("Y", strtotime(get_field('talk_event_date'))).'</strong></p>';
        }
    }
    
    return $event_title;
}




function get_corporate_site() {
    return "http://thebln.com";
}



add_action('template_redirect','redirect_action');
function redirect_action() {
    if(preg_match("/^\/event\/(.+)\/speaker/", $_SERVER['REQUEST_URI'])) {
        header('HTTP/1.1 200 OK');
        include(get_template_directory().'/page-templates/event-speaker.php');
        exit;
    }
}



function have_sponsors($event_id) {
    $premier = get_field('event_premier_sponsors', $event_id);
    $regular = get_field('event_sponsors', $event_id);
    return ($premier || $regular);
}



function get_testimonials($event_type="", $required=3) {
    $testimonials = array();
   
    $meta_query = array();
    if($event_type != "") {
        $meta_query[] = array(
            'key'     => 'testimonial_event',
            'compare' => '=',
            'type'    => 'CHAR',
            'value'   => $event_type
            );
        
    }
    
    $meta_query[] = array(
        'key'     => 'testimonial_featured',
        'compare' => '=',
        'type'    => 'NUMERIC',
        'value'   => 1,
        );
    
    $args = array(
        'post_type'      => 'testimonial',
        'post_status'    => 'publish',
        'meta_query'     => $meta_query,
        'orderby'        => 'rand',
        'posts_per_page' => $required
        );

    $wp_posts = new WP_Query($args);

    $found = $wp_posts->found_posts;
    $posts = $wp_posts->get_posts();

    foreach($posts as $post)
        $testimonials[] = $post;

    if($found < $required) {
        $required = ($required - $found);

        $post_not_in = array();
        foreach($posts as $post)
            $post_not_in[] = $post->ID;

        $args = array(
            'post_type'      => 'testimonial',
            'post_status'    => 'publish',
            'post__not_in'   => $post_not_in,
            'orderby'        => 'rand',
            'posts_per_page' => $required
            );

        $wp_posts = new WP_Query($args);
        $posts = $wp_posts->get_posts();

        foreach($posts as $post) {
            $testimonials[] = $post;
        }
    }

    return $testimonials;
}



function get_featured_event()
{
    $args = array(
        'post_type'         => 'event',
        'post_status'       => 'publish',
        'meta_query'        => array(
            array(
                'key'       => 'event_start',
                'compare'   => '>=',
                'value'     => date('Ymd')
            ),
            array(
                'key'       => 'event_featured',
                'compare'   => '=',
                'type'      => 'numeric',
                'value'     => 1,
            )
        ),
        'orderby'           => 'rand',
        'posts_per_page'    => '1'
    );

    return new WP_Query($args);
}



add_action('init', 'bln_image_sizes');
function bln_image_sizes() {
    update_option('thumbnail_size_w', 256);
    update_option('thumbnail_size_h', 256);
    update_option('medium_size_w', 320);
    update_option('medium_size_h', 180);
    update_option('large_size_w', 640);
    update_option('large_size_h', 360);
}


add_action( 'wp_enqueue_scripts', 'enqueue_styles_scripts' );
function enqueue_styles_scripts() {

    $template_dir = get_template_directory_uri();

    wp_deregister_script('jquery');
    wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js", false);
    wp_enqueue_script('jquery');

    wp_enqueue_script('application', $template_dir .'/js/application.js', false);

    if(is_page('Talks')) {
        wp_enqueue_script('talks.js', $template_dir .'/js/talks.js', false);
    }

    if(is_page('Speakers')) {
        wp_enqueue_script('speakers.js', $template_dir.'/js/speakers.js', false);
    }

    //wp_enqueue_script('century-gothic', 'http://fast.fonts.net/jsapi/03836efa-1688-432e-ab07-4a34af07d0c3.js', false); 
    //wp_enqueue_script('century-gothic', 'http://fast.fonts.net/jsapi/9f91324b-7276-4bec-a731-4cd849e6b09e.js', false); 

    //wp_enqueue_script('webfont-loader', '//ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js', false);
    //wp_enqueue_script('webfont-loader-config', $template_dir.'/js/webfont-loader-config.js', false);

    wp_enqueue_script('slicknav', $template_dir .'/js/jquery.slicknav.min.js', false);
    wp_enqueue_style( 'slicknav-styles', $template_dir.'/css/slicknav.css', false);

    wp_enqueue_style( 'styles', get_bloginfo('stylesheet_url'), false);
}


if(function_exists('add_theme_support')) {
	add_theme_support('post_thumbnails');
    add_image_size('large', 640, 360, true);
    add_image_size('medium', 320, 240, true);
    add_image_size('thumbnail', 256, 256, true);
    add_image_size('small-thumbnail', 212, 114, true);
    add_image_size('tiny-thumbnail', 148, 80, true);
}



add_action('save_post', 'auto_featured_image');
function auto_featured_image() {
    global $post;

    if($post != null) {
        if (!has_post_thumbnail($post->ID)) {
            $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );

            if($attached_image) {
                foreach ($attached_image as $attachment_id => $attachment) {
                    set_post_thumbnail($post->ID, $attachment_id);
                }
            }
        }
    }
}


function get_field_excerpt($field_name, $post_id=null) {
    $text = get_field($field_name, $post_id);
    if(!empty($text)) {
        $end = strpos($text, '<!--more-->', 0);
        
        if($end == true) {
            $text = substr($text, 0, $end-3);
            $text = strip_shortcodes($text);
        }        
    }
    return $text;
}



function approved_comments($post_id) {
    $comments = wp_count_comments($post_id);
    if($comments->approved == 0) {
        $approved = "No comments";
    } else if($comments->approved == 1) {
        $approved = "1 comment";
    } else {
        $approved = "$comments->approved comments";
    }
    return $approved;
}







/*
our very own paging control
*/

function paging_control($args) {

    if($args["total"] <= 1)
        return;
    
    $curpage = ($args["current"] == 0) ? 1 : $args["current"];

    $items = array();
    $dots = false;
    for($page = 1; $page <= $args["total"]; $page++) {

        $lp = $curpage - $args["width"];
        $hp = $curpage + $args["width"];

        if(($page == 1) || ($page == $args["total"])) {
            $items[] = $page;
            $dots = false;
        } else if($page == $curpage) {
            $items[] = $page;
            $dots = false;
        } else if(($page >= $lp) && ($page <= $hp)) {
            $items[] = $page;
            $dots = false;
        } else {
            if(!$dots) {
                $items[] ="...";
                $dots = true;
            }
        }
    }

    $bits = parse_url($args["base"]);
    $url = $bits["scheme"]."://".$bits["host"]."/".$args["type"]."/";
    $query = isset($bits["query"]) ? "/?".$bits["query"] : '';

    ob_start();

    echo '<div id="paging-control">';
    echo '<div class="container-outer">';
    echo '<div class="container-inner">';
    echo '<ul>';

    if(isset($args["prefix"])) {
        echo '<li><span class="prefix">'.$args["prefix"].'</span></li>';
    }


    foreach($items as $item) {
        echo '<li>';

        if($item == "...") {
            echo '<span class="dots">'.$item.'</span>';
        } else if($item == $curpage) {
            echo '<span class="current">'.$item.'</span>';
        } else {
            if($item == 1) {
                echo '<a class="fg-0" href="'.$url.$query.'">'.$item.'</a>';
            } else {
                echo '<a class="fg-0" href="'.$url.'page/'.$item.$query.'">'.$item.'</a>';
            }
        }           
        echo '</li>';
    }

    if(isset($args["suffix"])) {
        echo '<li><span class="suffix">'.$args["suffix"].'</span></li>';
    }

    echo '</ul>';
    echo '</div>';
    echo '</div>';
    echo '</div>';

    $control = ob_get_contents();
    ob_end_clean();

    return $control;
}


add_shortcode("slideshare", "slideshare_shortcode");
function slideshare_shortcode($atts, $content = null) {
   return wpautop(trim('<iframe src="'.$atts[0].'&output=embed" width="640" height="360" frameborder="0"></iframe>'));
}


add_shortcode("googledocs", "googledocs_shortcode");
function googledocs_shortcode($atts, $content = null) {
    $height = isset($atts["height"]) ? $atts["height"] : 360;
    return wpautop(trim('<iframe src="'.$atts[0].'" width="640" height="'.$height.'" frameborder="0" allowfullscreen="allowfullscreen"></iframe>'));
}


add_shortcode("youtube", "youtube_shortcode");
function youtube_shortcode($atts, $content = null) {
   return wpautop(trim('<iframe src="'.$atts[0].'" width="640" height="360" frameborder="0"></iframe>'));
}


add_shortcode("vimeo", "vimeo_shortcode");
function vimeo_shortcode($atts, $content = null) {
   return wpautop(trim('<iframe src="'.$atts[0].'" width="640" height="360" frameborder="0"></iframe>'));
}


add_shortcode("bliptv", "bliptv_shortcode");
function bliptv_shortcode($atts, $content = null) {
   return wpautop(trim('<iframe src="'.$atts[0].'" width="640" height="360" frameborder="0"></iframe>'));
}


add_shortcode("icontact", "icontact_shortcode");
function icontact_shortcode($atts, $content = null) {
    return wpautop('<script type="text/javascript" src="'.$atts[0].'"></script>');
}


add_shortcode("mailchimp", "mailchimp_shortcode");
function mailchimp_shortcode($atts, $content = null) {
    preg_match("/http:\/\/(.*)\?u=(\w*).+id=(\w*)/", $atts[0], $matches);
    
    return '<form id="mc-embedded-subscribe-form" class="validate" action="http://'.$matches[1].'?u='.$matches[2].'&amp;id='.$matches[3].'" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank"><input id="mce-EMAIL" class="email" name="EMAIL" required="" type="email" value="" placeholder="Your email address" /><input id="mc-embedded-subscribe" class="button" name="subscribe" type="submit" value="Subscribe" /><div style="position: absolute; left: -5000px;"><input name="b_'.$matches[2].'_'.$matches[3].'" type="text" value="" /></div></form>';
}


add_shortcode("drip", "drip_shortcode");
function drip_shortcode($atts, $content = null) {
    return '<form id="mc-embedded-subscribe-form" action="https://www.getdrip.com/forms/'.$atts[0].'/submissions" method="post" data-drip-embedded-form="'.$atts[0].'"><input type="email" name="fields[email]" value="" placeholder="Your email address" /><input type="submit" name="submit" value="Sign up" data-drip-attribute="sign-up-button" /></form>';
}


add_shortcode('title', 'title_shortcode');
function title_shortcode($atts, $content = null) {
    return '<h3>'.$atts[0].'</h3>';
}


add_shortcode('button', 'button_shortcode');
function button_shortcode($atts, $content = null) {
    return '<a class="button" href="'.$atts[0].'">'.$atts[1].'</a>';
}


add_shortcode('boilerplate', 'boilerplate_1_shortcode');
function boilerplate_1_shortcode($atts, $content = null) {
    $html = "";
    $i = isset($atts[0]) ? $atts[0] : 1;
    if(($i == 1) || ($i == 2) || ($i == 3)) {
        $bp = get_option('boilerplate_'.$i);
        if($bp != "") {
            $html = '<div class="boilerplate">';
            $html.= do_shortcode($bp);
            $html.= '</div>';
        }
    }
    return wpautop($html);
}


add_shortcode("eventbrite", "eventbrite_shortcode");
function eventbrite_shortcode($atts, $content = null) {
    $html = "";
    if($atts["eid"] != "") {
        $hght = isset($atts["height"]) ? $atts["height"] : 700;
        $html = wpautop('<iframe src="https://www.eventbrite.com/tickets-external?eid='.$atts["eid"].'&ref=etckt" frameborder="0" height="'.$hght.'" width="100%" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>');
    }
   return $html;
}


 
add_shortcode("wistia", "wistia_shortcode");
function wistia_shortcode($atts, $content = null) {
	return '<iframe src="//fast.wistia.net/embed/iframe/'.$atts[0].'?playerColor=81b7db&version=v1&videoHeight=304&videoWidth=540&videoFoam=true" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" width="540" height="304"></iframe>
	<script src="//fast.wistia.com/static/iframe-api-v1.js"></script>';
}


?>