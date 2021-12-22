<?php 

if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
        'name' => __( 'Social Links', 'karwanenajia' ),
        'id' => 'social-1',
        'description' => __( 'Site Social Links.', 'karwanenajia' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Footer Site Introduction', 'karwanenajia' ),
        'id' => 'footer-1',
        'description' => __( 'Footer Site Introduction Area.', 'karwanenajia' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Site Copyright Information', 'karwanenajia' ),
        'id' => 'footer-2',
        'description' => __( 'Footer Site Copyright Information Area.', 'karwanenajia' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

}