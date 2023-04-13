<?php

function cvd_custom_post(){

    $servicesPost_label = array(
        'name'          => __('Services Post', 'textdomain'),
        'singular_name' => __('Services Post', 'textdomain'),
        'add_new'       => __('Add Services Post', 'textdomain'),
        'add_new_item'  => __('Add New Services', 'textdomain'),
        'edit_item'     => __('Edit Services Post', 'textdomain'),
        'all_items'     => __('Services Post', 'textdomain')
    ) ;

    $servicesPost_args = array(
        'labels'            => $servicesPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('servicesPost', $servicesPost_args);

    $trendsPost_label = array(
        'name'          => __('Trends Post', 'textdomain'),
        'singular_name' => __('Trends Post', 'textdomain'),
        'add_new'       => __('Add Trends Post', 'textdomain'),
        'add_new_item'  => __('Add New Trends', 'textdomain'),
        'edit_item'     => __('Edit Trends Post', 'textdomain'),
        'all_items'     => __('Trends Post', 'textdomain')
    ) ;

    $trendsPost_args = array(
        'labels'            => $trendsPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('trendsPost', $trendsPost_args);

    $projectsPost_label = array(
        'name'          => __('Projects Post', 'textdomain'),
        'singular_name' => __('Projects Post', 'textdomain'),
        'add_new'       => __('Add Projects Post', 'textdomain'),
        'add_new_item'  => __('Add New Projects', 'textdomain'),
        'edit_item'     => __('Edit Projects Post', 'textdomain'),
        'all_items'     => __('Projects Post', 'textdomain')
    ) ;

    $projectsPost_args = array(
        'labels'            => $projectsPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('projectsPost', $projectsPost_args);

    $recentPost_label = array(
        'name'          => __('Recent Post', 'textdomain'),
        'singular_name' => __('Recent Post', 'textdomain'),
        'add_new'       => __('Add Recent Post', 'textdomain'),
        'add_new_item'  => __('Add New Recent', 'textdomain'),
        'edit_item'     => __('Edit Recent Post', 'textdomain'),
        'all_items'     => __('Recent Post', 'textdomain')
    ) ;

    $recentPost_args = array(
        'labels'            => $recentPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('recentPost', $recentPost_args);

    $LTrendsPost_label = array(
        'name'          => __('Latest Trends Post', 'textdomain'),
        'singular_name' => __('Latest Trends Post', 'textdomain'),
        'add_new'       => __('Add Latest Trends Post', 'textdomain'),
        'add_new_item'  => __('Add New Latest Trends', 'textdomain'),
        'edit_item'     => __('Edit Latest Trends Post', 'textdomain'),
        'all_items'     => __('Latest Trends Post', 'textdomain')
    ) ;

    $LTrendsPost_args = array(
        'labels'            => $LTrendsPost_label,
        'public'            => true,
        'capability_type'   => 'post',
        'show_ui'           => true,
        'taxonomies'        => array('post_tag', 'category'),
        'supports'          => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('LTrendsPost', $LTrendsPost_args);

}


add_action('init', 'cvd_custom_post');