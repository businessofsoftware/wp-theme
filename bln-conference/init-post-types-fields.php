<?php


add_action('init', 'custom_post_types');
function custom_post_types()
{
    /*
    register_post_type('event', array(
        'label' => 'Event',
        'description' => 'Event',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'event', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','revisions','thumbnail'),
        'labels' => array (
            'name' => 'Event',
            'singular_name' => 'Event',
            'menu_name' => 'Event',
            'add_new' => 'Add Event',
            'add_new_item' => 'Add New Event',
            'edit' => 'Edit',
            'edit_item' => 'Edit Event',
            'new_item' => 'New Event',
            'view' => 'View Event',
            'view_item' => 'View Event',
            'search_items' => 'Search Event',
            'not_found' => 'No Event Found',
            'not_found_in_trash' => 'No Event Found in Trash',
            'parent' => 'Parent Event'
            )
        )
    );
    */


    /*
    register_post_type('programme', array(
        'label' => 'Programmes',
        'description' => 'Programmes',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'programme', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','revisions','thumbnail'),
        'labels' => array (
            'name' => 'Programmes',
            'singular_name' => 'Programme',
            'menu_name' => 'Programmes',
            'add_new' => 'Add Programme',
            'add_new_item' => 'Add New Programme',
            'edit' => 'Edit',
            'edit_item' => 'Edit Programme',
            'new_item' => 'New Programme',
            'view' => 'View Programme',
            'view_item' => 'View Programme',
            'search_items' => 'Search Programmes',
            'not_found' => 'No Programmes Found',
            'not_found_in_trash' => 'No Programmes Found in Trash',
            'parent' => 'Parent Programme',
            )
        )
    );
    */

    /*
    register_post_type('session', array(
        'label' => 'Sessions',
        'description' => 'Sessions',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'session', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','revisions','thumbnail'),
        'labels' => array(
            'name' => 'Sessions',
            'singular_name' => 'Session',
            'menu_name' => 'Sessions',
            'add_new' => 'Add Session',
            'add_new_item' => 'Add New Session',
            'edit' => 'Edit',
            'edit_item' => 'Edit Session',
            'new_item' => 'New Session',
            'view' => 'View Session',
            'view_item' => 'View Session',
            'search_items' => 'Search Sessions',
            'not_found' => 'No Sessions Found',
            'not_found_in_trash' => 'No Sessions Found in Trash',
            'parent' => 'Parent Session',
            )
        )
    );
    */


    register_post_type('speaker', array(
        'label' => 'Speakers',
        'description' => 'Event speakers',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'speaker', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','revisions','thumbnail'),
        'taxonomies' => array('speaker'),
        'labels' => array(
            'name' => 'Speakers',
            'singular_name' => 'Speaker',
            'menu_name' => 'Speakers',
            'add_new' => 'Add Speaker',
            'add_new_item' => 'Add New Speaker',
            'edit' => 'Edit',
            'edit_item' => 'Edit Speaker',
            'new_item' => 'New Speaker',
            'view' => 'View Speaker',
            'view_item' => 'View Speaker',
            'search_items' => 'Search Speakers',
            'not_found' => 'No Speakers Found',
            'not_found_in_trash' => 'No Speakers Found in Trash',
            'parent' => 'Parent Speaker'
            )
        )
    );



    register_post_type('testimonial', array(
        'label' => 'Testimonials',
        'description' => 'Event testimonials',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'testimonial', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','revisions','thumbnail'),
        'labels' => array(
            'name' => 'Testimonials',
            'singular_name' => 'Testimonial',
            'menu_name' => 'Testimonials',
            'add_new' => 'Add Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit' => 'Edit',
            'edit_item' => 'Edit Testimonial',
            'new_item' => 'New Testimonial',
            'view' => 'View Testimonial',
            'view_item' => 'View Testimonial',
            'search_items' => 'Search Testimonials',
            'not_found' => 'No Testimonials Found',
            'not_found_in_trash' => 'No Testimonials Found in Trash',
            'parent' => 'Parent Testimonial'
            )
        )
    );


    /*
    register_post_type('venue', array(
        'label' => 'Venues',
        'description' => 'Event venues',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'venue', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','revisions','thumbnail'),
        'labels' => array(
            'name' => 'Venues',
            'singular_name' => 'venue',
            'menu_name' => 'Venues',
            'add_new' => 'Add venue',
            'add_new_item' => 'Add New venue',
            'edit' => 'Edit',
            'edit_item' => 'Edit venue',
            'new_item' => 'New venue',
            'view' => 'View venue',
            'view_item' => 'View venue',
            'search_items' => 'Search Venues',
            'not_found' => 'No Venues Found',
            'not_found_in_trash' => 'No Venues Found in Trash',
            'parent' => 'Parent venue'
            )
        )
    );
    */

    register_post_type('company', array(
        'label' => 'Companies',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'company', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','thumbnail'),
        'labels' => array (
            'name' => 'Companies',
            'singular_name' => 'Company',
            'menu_name' => 'Companies',
            'add_new' => 'Add Company',
            'add_new_item' => 'Add New Company',
            'edit' => 'Edit',
            'edit_item' => 'Edit Company',
            'new_item' => 'New Company',
            'view' => 'View Company',
            'view_item' => 'View Company',
            'search_items' => 'Search Companies',
            'not_found' => 'No Companies Found',
            'not_found_in_trash' => 'No Companies Found in Trash',
            'parent' => 'Parent Company',
            )
        )
    );


    register_post_type('talk', array(
        'label' => 'Talks',
        'description' => '',
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => array('slug' => 'talk', 'with_front' => true),
        'query_var' => true,
        'supports' => array('title','editor','thumbnail'),
        'taxonomies' => array('talks'),
        'labels' => array (
            'name' => 'Talks',
            'singular_name' => 'Talk',
            'menu_name' => 'Talks',
            'add_new' => 'Add Talk',
            'add_new_item' => 'Add New Talk',
            'edit' => 'Edit',
            'edit_item' => 'Edit Talk',
            'new_item' => 'New Talk',
            'view' => 'View Talk',
            'view_item' => 'View Talk',
            'search_items' => 'Search Talks',
            'not_found' => 'No Talks Found',
            'not_found_in_trash' => 'No Talks Found in Trash',
            'parent' => 'Parent Talk',
            )
        )
    );

}


?>