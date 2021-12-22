<?php 


function custom_post_type() {
 
    // ANNOUNCEMENTS POST TYPE REGISTER
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
    
    // EVENTS POST TYPE REGISTER
    $events_labels = array(
        'name'                => _x( 'Events', 'Event Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Event', 'Event Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Events', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Event', 'karwanenajia' ),
        'all_items'           => __( 'All Events', 'karwanenajia' ),
        'view_item'           => __( 'View Event', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Event', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Event', 'karwanenajia' ),
        'update_item'         => __( 'Update Event', 'karwanenajia' ),
        'search_items'        => __( 'Search Event', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $event_args = array(
        'label'               => __( 'events', 'karwanenajia' ),
        'description'         => __( 'event Custom Post Type.', 'karwanenajia' ),
        'labels'              => $events_labels,
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
        'menu_icon' => 'dashicons-admin-multisite'
    
    );
    register_post_type( 'cpt_events', $event_args );
    
    //  GALLERIES POST TYPE REGISTER
    $galleries_labels = array(
        'name'                => _x( 'Galleries', 'Gallery Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Gallery', 'Gallery Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Galleries', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Gallery', 'karwanenajia' ),
        'all_items'           => __( 'All Galleries', 'karwanenajia' ),
        'view_item'           => __( 'View Gallery', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Gallery', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Gallery', 'karwanenajia' ),
        'update_item'         => __( 'Update Gallery', 'karwanenajia' ),
        'search_items'        => __( 'Search Gallery', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );

    $gallery_args = array(
        'label'               => __( 'galleries', 'karwanenajia' ),
        'description'         => __( 'gallery Custom Post Type.', 'karwanenajia' ),
        'labels'              => $galleries_labels,
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
        'menu_icon' => 'dashicons-format-gallery'
    
    );
    register_post_type( 'cpt_galleries', $gallery_args );

    //  VIDEOS POST TYPE REGISTER
    $videos_labels = array(
        'name'                => _x( 'Videos', 'Video Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Video', 'Video Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Videos', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Video', 'karwanenajia' ),
        'all_items'           => __( 'All Videos', 'karwanenajia' ),
        'view_item'           => __( 'View Video', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Video', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Video', 'karwanenajia' ),
        'update_item'         => __( 'Update Video', 'karwanenajia' ),
        'search_items'        => __( 'Search Video', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );

    $video_args = array(
        'label'               => __( 'Videos', 'karwanenajia' ),
        'description'         => __( 'Video Custom Post Type.', 'karwanenajia' ),
        'labels'              => $videos_labels,
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
        'menu_icon' => 'dashicons-format-video'
    
    );
    register_post_type( 'cpt_videos', $video_args );

    //Daily Content Post Register
    $daily_content_labels = array(
        'name'                => _x( 'Daily Content', 'Daily Content Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Daily Content', 'Daily Content Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Daily Content', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Daily Content', 'karwanenajia' ),
        'all_items'           => __( 'All Daily Content', 'karwanenajia' ),
        'view_item'           => __( 'View Daily Content', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Daily Content', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Daily Content', 'karwanenajia' ),
        'update_item'         => __( 'Update Daily Content', 'karwanenajia' ),
        'search_items'        => __( 'Search Daily Content', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $daily_content_args = array(
        'label'               => __( 'Daily Content', 'karwanenajia' ),
        'description'         => __( 'Daily Content Custom Post Type.', 'karwanenajia' ),
        'labels'              => $daily_content_labels,
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
        'menu_icon' => 'dashicons-clipboard'
    
    );
    register_post_type( 'cpt_daily_content', $daily_content_args );

    //Kalaam Content
    $kalaam_labels = array(
        'name'                => _x( 'Kalaams', 'Kalaam Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Kalaam', 'Kalaam Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Kalaams', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Kalaam', 'karwanenajia' ),
        'all_items'           => __( 'All Kalaams', 'karwanenajia' ),
        'view_item'           => __( 'View Kalaam', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Kalaam', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Kalaam', 'karwanenajia' ),
        'update_item'         => __( 'Update Kalaam', 'karwanenajia' ),
        'search_items'        => __( 'Search Kalaam', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $kalaam_args = array(
        'label'               => __( 'Kalaams', 'karwanenajia' ),
        'description'         => __( 'Kalaam Custom Post Type.', 'karwanenajia' ),
        'labels'              => $kalaam_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
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
        'menu_icon' => 'dashicons-welcome-write-blog'
    
    );
    register_post_type( 'cpt_kalaam', $kalaam_args );

    //Audio CPT Register
    $audio_labels = array(
        'name'                => _x( 'Audios', 'Audio Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Audio', 'Audio Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Audios', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Audio', 'karwanenajia' ),
        'all_items'           => __( 'All Audios', 'karwanenajia' ),
        'view_item'           => __( 'View Audio', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Audio', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Audio', 'karwanenajia' ),
        'update_item'         => __( 'Update Audio', 'karwanenajia' ),
        'search_items'        => __( 'Search Audio', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $audio_args = array(
        'label'               => __( 'Audios', 'karwanenajia' ),
        'description'         => __( 'Audio Custom Post Type.', 'karwanenajia' ),
        'labels'              => $audio_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
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
        'menu_icon' => 'dashicons-format-audio'
    
    );
    register_post_type( 'cpt_audios', $audio_args );

    //Books CPT Register
    $book_labels = array(
        'name'                => _x( 'Books', 'Book Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Book', 'Book Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Books', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Book', 'karwanenajia' ),
        'all_items'           => __( 'All Books', 'karwanenajia' ),
        'view_item'           => __( 'View Book', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Book', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Book', 'karwanenajia' ),
        'update_item'         => __( 'Update Book', 'karwanenajia' ),
        'search_items'        => __( 'Search Book', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $book_args = array(
        'label'               => __( 'Books', 'karwanenajia' ),
        'description'         => __( 'Book Custom Post Type.', 'karwanenajia' ),
        'labels'              => $book_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
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
        'menu_icon' => 'dashicons-book'
    
    );
    register_post_type( 'cpt_books', $book_args );

    //Books CPT Register
    $kaalam_labels = array(
        'name'                => _x( 'Kaalams', 'Kaalam Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Kaalam', 'Kaalam Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Kaalams', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Kaalam', 'karwanenajia' ),
        'all_items'           => __( 'All Kaalams', 'karwanenajia' ),
        'view_item'           => __( 'View Kaalam', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Kaalam', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Kaalam', 'karwanenajia' ),
        'update_item'         => __( 'Update Kaalam', 'karwanenajia' ),
        'search_items'        => __( 'Search Kaalam', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $kaalam_args = array(
        'label'               => __( 'Kaalams', 'karwanenajia' ),
        'description'         => __( 'Kaalam Custom Post Type.', 'karwanenajia' ),
        'labels'              => $kaalam_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
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
        'menu_icon' => 'dashicons-admin-customizer'
    
    );
    register_post_type( 'cpt_kaalams', $kaalam_args );

    //TODAY'S QUESTION CPT Register
     $question_labels = array(
        'name'                => _x( 'Questions', 'Question Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Question', 'Question Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Questions', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Question', 'karwanenajia' ),
        'all_items'           => __( 'All Questions', 'karwanenajia' ),
        'view_item'           => __( 'View Question', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Question', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Question', 'karwanenajia' ),
        'update_item'         => __( 'Update Question', 'karwanenajia' ),
        'search_items'        => __( 'Search Question', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $question_args = array(
        'label'               => __( 'Questions', 'karwanenajia' ),
        'description'         => __( 'Question Custom Post Type.', 'karwanenajia' ),
        'labels'              => $question_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
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
        'menu_icon' => 'dashicons-pressthis'
    );
    register_post_type( 'cpt_questions', $question_args );

    //ADVERTISEMENT CPT Register
    $advertisement_labels = array(
        'name'                => _x( 'Advertisements', 'Advertisement Post Type General Name', 'karwanenajia' ),
        'singular_name'       => _x( 'Advertisement', 'Advertisement Post Type Singular Name', 'karwanenajia' ),
        'menu_name'           => __( 'Advertisements', 'karwanenajia' ),
        'parent_item_colon'   => __( 'Parent Advertisement', 'karwanenajia' ),
        'all_items'           => __( 'All Advertisements', 'karwanenajia' ),
        'view_item'           => __( 'View Advertisement', 'karwanenajia' ),
        'add_new_item'        => __( 'Add New Advertisement', 'karwanenajia' ),
        'add_new'             => __( 'Add New', 'karwanenajia' ),
        'edit_item'           => __( 'Edit Advertisement', 'karwanenajia' ),
        'update_item'         => __( 'Update Advertisement', 'karwanenajia' ),
        'search_items'        => __( 'Search Advertisement', 'karwanenajia' ),
        'not_found'           => __( 'Not Found', 'karwanenajia' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'karwanenajia' ),
    );
    $advertisement_args = array(
        'label'               => __( 'Advertisements', 'karwanenajia' ),
        'description'         => __( 'Advertisement Custom Post Type.', 'karwanenajia' ),
        'labels'              => $advertisement_labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'category'),
        
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
        'menu_icon' => 'dashicons-cover-image'
    );
    register_post_type( 'cpt_advertisements', $advertisement_args );
}

add_action( 'init', 'custom_post_type');

function karwan_add_taxonomies() {
	register_taxonomy_for_object_type( 'category', 'cpt_announcements' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_announcements' );

    register_taxonomy_for_object_type( 'category', 'cpt_events' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_events' );

    register_taxonomy_for_object_type( 'category', 'cpt_galleries' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_galleries' );

    register_taxonomy_for_object_type( 'category', 'cpt_kalaam' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_kalaam' );

    register_taxonomy_for_object_type( 'category', 'cpt_audios' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_audios' );


    register_taxonomy_for_object_type( 'category', 'cpt_videos' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_videos' );

    register_taxonomy_for_object_type( 'category', 'cpt_books' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_books' );

    register_taxonomy_for_object_type( 'category', 'cpt_kaalams' );
	register_taxonomy_for_object_type( 'post_tag', 'cpt_kaalams' );
    
}

add_action( 'init', 'karwan_add_taxonomies' );