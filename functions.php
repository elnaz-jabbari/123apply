<?php
/**
 * apply functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package apply
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function apply_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on apply, use a find and replace
        * to change 'apply' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'apply', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'menu-1' => esc_html__( 'Primary', 'apply' ),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'apply_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'apply_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function apply_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'apply_content_width', 640 );
}
add_action( 'after_setup_theme', 'apply_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function apply_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'apply' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'apply' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'apply_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function apply_scripts() {
    wp_enqueue_style( 'apply-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri().'/assets/css/bootstrap.rtl.min.css', array() );
    wp_enqueue_style( 'icon', get_stylesheet_directory_uri().'/assets/css/font/style.css', array() );
    wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/assets/css/style.css', array() );


    wp_style_add_data( 'apply-style', 'rtl', 'replace' );

    wp_enqueue_script( 'apply-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true );

    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/assets/js/custom.js', array('jquery'), null, true );



    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'apply_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}


/*start lawyers post type*/
function apply_posttype() {
    register_post_type( 'lawyers',
        array(
            'labels' => array(
                'name' => __( 'lawyers' ),
                'singular_name' => __( 'lawyers' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'lawyers'),
        )
    );
}
add_action( 'init', 'apply_posttype' );
/*
* Creating a function to create our CPT
*/
function custom_post_type() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'lawyers', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'lawyers', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'lawyers', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent lawyers', 'twentythirteen' ),
        'all_items'           => __( 'All lawyers', 'twentythirteen' ),
        'view_item'           => __( 'View lawyers', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New lawyers', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit lawyers', 'twentythirteen' ),
        'update_item'         => __( 'Update lawyers', 'twentythirteen' ),
        'search_items'        => __( 'Search lawyers', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'lawyers', 'twentythirteen' ),
        'description'         => __( 'lawyers news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'lawyers', $args );

}
add_action( 'init', 'custom_post_type', 0 );
/*end lawyers post type*/


/*start education post type*/
function iranelementor_posttype() {
    register_post_type( 'education',
        array(
            'labels' => array(
                'name' => __( 'education' ),
                'singular_name' => __( 'education' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'education'),
        )
    );
}
add_action( 'init', 'iranelementor_posttype' );
/*
* Creating a function to create our CPT
*/
function custom_post_type1() {
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'education', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'education', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'education', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent education', 'twentythirteen' ),
        'all_items'           => __( 'All education', 'twentythirteen' ),
        'view_item'           => __( 'View education', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New education', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit education', 'twentythirteen' ),
        'update_item'         => __( 'Update education', 'twentythirteen' ),
        'search_items'        => __( 'Search education', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
// Set other options for Custom Post Type
    $args = array(
        'label'               => __( 'education', 'twentythirteen' ),
        'description'         => __( 'education news and reviews', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 3,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
    // Registering your Custom Post Type
    register_post_type( 'education', $args );

}
add_action( 'init', 'custom_post_type1', 0 );
/*end education post type*/



function apply_footer_Widgets() {
    register_sidebar( array(
        'name'          => __( 'عنوان ابزارک فوتر یک' ),
        'id'            => 'widget-one-footer-title',
        'before_widget' => ' <div class="our-solutions-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'ابزارک فوتر یک  ' ),
        'id'            => 'widget-one-footer',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'عنوان ابزارک فوتر دو' ),
        'id'            => 'widget-two-footer-title',
        'before_widget' => ' <div class="our-solutions-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'ابزارک فوتر دو  ' ),
        'id'            => 'widget-two-footer',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'عنوان ابزارک فوتر سه' ),
        'id'            => 'widget-three-footer-title',
        'before_widget' => ' <div class="our-solutions-title">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'ابزارک فوتر سه  ' ),
        'id'            => 'widget-three-footer',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );


    register_sidebar( array(
        'name'          => __( 'آیکون اول فوتر سه  ' ),
        'id'            => 'widget-three-footer-icon1',
        'before_widget' => ' <div class="our-solutions-icon">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'محتوی اول فوتر سه  ' ),
        'id'            => 'widget-three-footer-content1',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'آیکون دوم فوتر سه  ' ),
        'id'            => 'widget-three-footer-icon2',
        'before_widget' => ' <div class="our-solutions-icon">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'محتوی دوم فوتر سه  ' ),
        'id'            => 'widget-three-footer-content2',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'آیکون سوم فوتر سه  ' ),
        'id'            => 'widget-three-footer-icon3',
        'before_widget' => ' <div class="our-solutions-icon">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'محتوی سوم فوتر سه  ' ),
        'id'            => 'widget-three-footer-content3',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'لوگو' ),
        'id'            => 'widget-foure-footer-logo',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );

    register_sidebar( array(
        'name'          => __( 'شبکه های اجتماعی فوتر 4' ),
        'id'            => 'widget-foure-footer-socials',
        'before_widget' => ' <div class="our-solutions">',
        'after_widget'  => '</div>',
        'before_title'  => '<strong> ',
        'after_title'   => '</strong>',
    ) );
}
add_action( 'widgets_init', 'apply_footer_Widgets' );






