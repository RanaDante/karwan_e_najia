<?php 

if(!function_exists('theme_setup')):
    function theme_setup(){
        add_theme_support('automatic-feed-links');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_theme_support('widgets');
        add_theme_support( 'custom-logo' );
        add_theme_support( 'woocommerce' );
    }

    
    function register_menu_locations() {
        register_nav_menu( 'main-menu', __( 'Main Menu', 'karwanenajia' ) );
    }

endif;

add_action('after_setup_theme', 'theme_setup');
add_action( 'after_setup_theme', 'register_menu_locations' );


function init_styles_scripts(){
    $theme = wp_get_theme();
    wp_register_style('main_styles', get_template_directory_uri().'/style.css', false, $theme->Version, 'screen');
    wp_register_style('site_styles', get_template_directory_uri().'/assets/css/styles.css', false, $theme->Version, 'screen');
    wp_register_style('site_responsive', get_template_directory_uri().'/assets/css/responsive.css', false, $theme->Version, 'screen');
    wp_register_style('site_videos', get_template_directory_uri().'/assets/css/videos.css', false, $theme->Version, 'screen');
    

    wp_enqueue_style('main_styles');
    wp_enqueue_style('site_styles');
    wp_enqueue_style('site_responsive');
    wp_enqueue_style('site_videos');
    
    wp_register_script('font_awesome', 'https://kit.fontawesome.com/d91bab4633.js', false);
    wp_register_script('audio_js', get_template_directory_uri().'/assets/js/audio.js', false);
    wp_register_script('fit_vids', get_template_directory_uri().'/assets/js/jquery.fitvids.js', false);
    wp_register_script('main_js', get_template_directory_uri().'/assets/js/main.js', false);
    wp_register_script('videos_js', get_template_directory_uri().'/assets/js/videos.js', false);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('font_awesome');
    wp_enqueue_script('audio_js');
    wp_enqueue_script('fit_vids');
    wp_enqueue_script('main_js');
    wp_enqueue_script('videos_js');
    
}


add_action('wp_enqueue_scripts', 'init_styles_scripts');


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


function custom_post_type() {
 
    $announcements_labels = array(
        'name'                => _x( 'Announcements', 'Announcement Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Announcement', 'Announcement Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Announcements', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Announcement', 'karwanenajia' ),
        'all_items'           => __( 'All Announcements', 'karwanenajia' ),
        'view_item'           => __( 'View Announcement', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Announcement', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Announcement', 'karwanenajia' ),
        'update_item'         => __( 'Update Announcement', 'karwanenajia' ),
        'search_items'        => __( 'Search Announcement', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $args = array(
        'label'               => __( 'announcements', 'karwanenajia' ),
        'description'         => __( 'Announcement Custom Post Type.', 'karwanenajia' ),
        'labels'              => $announcements_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-controls-volumeon'
    
    );
    register_post_type( 'cpt_announcements', $args );
     
}

add_action( 'init', 'custom_post_type');


add_action( 'init', 'karwan_add_taxonomies_to_courses' );
function karwan_add_taxonomies_to_courses() {
	register_taxonomy_for_object_type( 'category', 'cpt_announcements' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_announcements' );
}