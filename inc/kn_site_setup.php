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
    wp_register_style('dflip_css', get_template_directory_uri().'/assets/css/dflip.min.css', false, $theme->Version, 'screen');
    wp_register_style('themify_icons', get_template_directory_uri().'/assets/css/themify-icons.min.css', false, $theme->Version, 'screen');
    wp_register_style('site_styles', get_template_directory_uri().'/assets/css/styles.css', false, $theme->Version, 'screen');
    wp_register_style('site_responsive', get_template_directory_uri().'/assets/css/responsive.css', false, $theme->Version, 'screen');
    wp_register_style('site_videos', get_template_directory_uri().'/assets/css/videos.css', false, $theme->Version, 'screen');
    

    wp_enqueue_style('main_styles');
    wp_enqueue_style('dflip_css');
    wp_enqueue_style('themify_icons');
    wp_enqueue_style('site_styles');
    wp_enqueue_style('site_responsive');
    wp_enqueue_style('site_videos');
    
    wp_register_script('font_awesome', 'https://kit.fontawesome.com/d91bab4633.js', false);
    wp_register_script('fit_vids', get_template_directory_uri().'/assets/js/jquery.fitvids.js', false);
    wp_register_script('dflip', get_template_directory_uri().'/assets/js/dflip.min.js', false);
    wp_register_script('main_js', get_template_directory_uri().'/assets/js/main.js', false);
    wp_register_script('videos_js', get_template_directory_uri().'/assets/js/videos.js', false);
    wp_register_script('audio_js', get_template_directory_uri().'/assets/js/audio.js', false);
    wp_register_script('custom_js', get_template_directory_uri().'/assets/js/custom.js', false);


    wp_enqueue_script('jquery');
    wp_enqueue_script('font_awesome');
    wp_enqueue_script('fit_vids');
    wp_enqueue_script('dflip');
    wp_enqueue_script('main_js');
    wp_enqueue_script('videos_js');
    wp_enqueue_script('audio_js');
    wp_enqueue_script('custom_js');

        
    wp_enqueue_script( 'ajax_custom_script',  get_template_directory_uri() . '/assets/js/ajax.js', array('jquery') );
    wp_localize_script( 'ajax_custom_script', 'frontendajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
}


add_action('wp_enqueue_scripts', 'init_styles_scripts');
