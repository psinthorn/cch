<?php
    function content_post_types() {

        //  // Campus post type
        // register_post_type('destination', array(
        //     'show_in_rest' => true,
        //     'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        //     'rewrite' => array('slug' => 'destinations'),
        //     'has_archive' => true,
        //     'public' => true,
        //     'labels' => array(
        //         'name' => 'Destinations',
        //         'add_new_item' => 'Add New Destination',
        //         'edit_item' => 'Edit Campus',
        //         'all_items' => 'All Destinations',
        //         'singular_name' => 'Destination'
        //     ),
        //     'menu_icon' => 'dashicons-location-alt'
        // ));


        // Events post type
        register_post_type('event', array(
            "capability_type" => 'event',
            "map_meta_cap" => true,
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'events'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // // Program post type
        // register_post_type('program', array(
        //     'show_in_rest' => true,
        //     'supports' => array('title', 'editor'),
        //     'rewrite' => array('slug' => 'programs'),
        //     'has_archive' => true,
        //     'public' => true,
        //     'labels' => array(
        //         'name' => 'Programs',
        //         'add_new_item' => 'Add New Proram',
        //         'edit_item' => 'Edit Program',
        //         'all_items' => 'All Programs',
        //         'singular_name' => 'Program'

        //     ),
        //     'menu_icon' => 'dashicons-awards'
        // ));

        // Member post type
        register_post_type('member', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'members'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Members',
                'add_new_item' => 'Add New Member',
                'edit_item' => 'Edit member',
                'all_items' => 'All members',
                'singular_name' => 'member'

            ),
            'menu_icon' => 'dashicons-groups'
        ));

        // Partner post type
        register_post_type('partner', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'partners'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Partners',
                'add_new_item' => 'Add New Partner',
                'edit_item' => 'Edit Partner',
                'all_items' => 'All Partners',
                'singular_name' => 'Partner'

            ),
            'menu_icon' => 'dashicons-groups'
        ));


        // // Things To Do post type
        // register_post_type('thingtodo', array(
        //     'show_in_rest' => true,
        //     'supports' => array('title', 'editor','thumbnail'),
        //     'rewrite' => array('slug' => 'thingstodo'),
        //     'has_archive' => true,
        //     'public' => true,
        //     'labels' => array(
        //         'name' => 'Things To Do',
        //         'add_new_item' => 'Add New Thing To Do',
        //         'edit_item' => 'Edit Thing To Do',
        //         'all_items' => 'All Things To Dos',
        //         'singular_name' => 'thingstodo'

        //     ),
        //     'menu_icon' => 'dashicons-megaphone'
        // ));
    

    // // Slide post type
    //     register_post_type('slide', array(
    //         'show_in_rest' => true,
    //         'supports' => array('title', 'editor','thumbnail'),
    //         'rewrite' => array('slug' => 'slide'),
    //         'has_archive' => true,
    //         'public' => true,
    //         'labels' => array(
    //             'name' => 'Slide',
    //             'add_new_item' => 'Add New Slide',
    //             'edit_item' => 'Edit Slide',
    //             'all_items' => 'All Slides',
    //             'singular_name' => 'slide'

    //         ),
    //         'menu_icon' => 'dashicons-images-alt'
    //     ));
    

    // Slide post type
        register_post_type('spotlight', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'spotlight'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Spotlight Slide',
                'add_new_item' => 'Add New Slide',
                'edit_item' => 'Edit Slide',
                'all_items' => 'All Slides',
                'singular_name' => 'spotlight'

            ),
            'menu_icon' => 'dashicons-images-alt'
        ));
    }

    add_action('init', 'content_post_types'); 