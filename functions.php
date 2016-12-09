<?php
/**
 * Kids in Tech functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kids_in_Tech
 */

if ( ! function_exists( 'kids_in_tech_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kids_in_tech_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Kids in Tech, use a find and replace
     * to change 'kids-in-tech' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'kids-in-tech', get_template_directory() . '/languages' );

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
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'kids-in-tech' ),
        'footer' => esc_html__( 'Footer', 'kids-in-tech' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'kids_in_tech_custom_background_args', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ) ) );
}
endif;
add_action( 'after_setup_theme', 'kids_in_tech_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kids_in_tech_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'kids_in_tech_content_width', 640 );
}
add_action( 'after_setup_theme', 'kids_in_tech_content_width', 0 );


// Register Sidebars
function kids_custom_sidebars() {

	$args = array(
		'id'            => 'student',
		'class'         => 'student-sidebar',
		'name'          => __( 'Student Stories', 'kids_in_tech' ),
		'description'   => __( 'student success stories', 'kids_in_tech' ),
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'newsletter',
		'class'         => 'newsletter-sidebar',
		'name'          => __( 'Newsletter Sidebar', 'kids_in_tech' ),
		'description'   => __( 'newsletter sidebar', 'kids_in_tech' ),
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'kids_custom_sidebars' );

/**
 * Enqueue scripts and styles.
 */
function kids_in_tech_scripts() {
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/sass/vendors/font-awesome/scss/font-awesome.css');
    wp_enqueue_style( 'kids-in-tech-style', get_stylesheet_uri() );

    wp_enqueue_script( 'kids-in-tech-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'kids-in-tech-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'kids_in_tech_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom Post Types
 */

function advocate_init() {
    register_post_type( 'advocate', array(
        'labels'            => array(
            'name'                => __( 'Advocates', 'kids-in-tech' ),
            'singular_name'       => __( 'Advocate', 'kids-in-tech' ),
            'all_items'           => __( 'All Advocates', 'kids-in-tech' ),
            'new_item'            => __( 'New Advocate', 'kids-in-tech' ),
            'add_new'             => __( 'Add New', 'kids-in-tech' ),
            'add_new_item'        => __( 'Add New Advocate', 'kids-in-tech' ),
            'edit_item'           => __( 'Edit Advocate', 'kids-in-tech' ),
            'view_item'           => __( 'View Advocate', 'kids-in-tech' ),
            'search_items'        => __( 'Search Advocates', 'kids-in-tech' ),
            'not_found'           => __( 'No Advocates found', 'kids-in-tech' ),
            'not_found_in_trash'  => __( 'No Advocates found in trash', 'kids-in-tech' ),
            'parent_item_colon'   => __( 'Parent Advocate', 'kids-in-tech' ),
            'menu_name'           => __( 'Advocates', 'kids-in-tech' ),
        ),
        'public'            => true,
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_in_nav_menus' => true,
        'supports'          => array( 'title', 'editor' ),
        'has_archive'       => true,
        'rewrite'           => true,
        'query_var'         => true,
        'menu_icon'         => 'dashicons-businessman',
        'show_in_rest'      => true,
        'rest_base'         => 'advocate',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ) );

}
add_action( 'init', 'advocate_init' );

function advocate_updated_messages( $messages ) {
    global $post;

    $permalink = get_permalink( $post );

    $messages['advocate'] = array(
        0 => '', // Unused. Messages start at index 1.
        1 => sprintf( __('Advocate updated. <a target="_blank" href="%s">View Advocate</a>', 'kids-in-tech'), esc_url( $permalink ) ),
        2 => __('Custom field updated.', 'kids-in-tech'),
        3 => __('Custom field deleted.', 'kids-in-tech'),
        4 => __('Advocate updated.', 'kids-in-tech'),
        /* translators: %s: date and time of the revision */
        5 => isset($_GET['revision']) ? sprintf( __('Advocate restored to revision from %s', 'kids-in-tech'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6 => sprintf( __('Advocate published. <a href="%s">View Advocate</a>', 'kids-in-tech'), esc_url( $permalink ) ),
        7 => __('Advocate saved.', 'kids-in-tech'),
        8 => sprintf( __('Advocate submitted. <a target="_blank" href="%s">Preview Advocate</a>', 'kids-in-tech'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
        9 => sprintf( __('Advocate scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Advocate</a>', 'kids-in-tech'),
        // translators: Publish box date format, see http://php.net/date
        date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
        10 => sprintf( __('Advocate draft updated. <a target="_blank" href="%s">Preview Advocate</a>', 'kids-in-tech'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
    );

    return $messages;
}
add_filter( 'post_updated_messages', 'advocate_updated_messages' );

function board_member_init() {
    register_post_type( 'board-member', array(
        'labels'            => array(
            'name'                => __( 'Board Members', 'kids-in-tech' ),
            'singular_name'       => __( 'Board Member', 'kids-in-tech' ),
            'all_items'           => __( 'All Board Members', 'kids-in-tech' ),
            'new_item'            => __( 'New Board Member', 'kids-in-tech' ),
            'add_new'             => __( 'Add New', 'kids-in-tech' ),
            'add_new_item'        => __( 'Add New Board Member', 'kids-in-tech' ),
            'edit_item'           => __( 'Edit Board Member', 'kids-in-tech' ),
            'view_item'           => __( 'View Board Member', 'kids-in-tech' ),
            'search_items'        => __( 'Search Board Members', 'kids-in-tech' ),
            'not_found'           => __( 'No Board Members found', 'kids-in-tech' ),
            'not_found_in_trash'  => __( 'No Board Members found in trash', 'kids-in-tech' ),
            'parent_item_colon'   => __( 'Parent Board Member', 'kids-in-tech' ),
            'menu_name'           => __( 'Board Members', 'kids-in-tech' ),
        ),
        'public'            => true,
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_in_nav_menus' => true,
        'supports'          => array( 'title', 'editor' ),
        'has_archive'       => true,
        'rewrite'           => true,
        'query_var'         => true,
        'menu_icon'         => 'dashicons-id-alt',
        'show_in_rest'      => true,
        'rest_base'         => 'board-member',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ) );

}
add_action( 'init', 'board_member_init' );

function board_member_updated_messages( $messages ) {
    global $post;

    $permalink = get_permalink( $post );

    $messages['board-member'] = array(
        0 => '', // Unused. Messages start at index 1.
        1 => sprintf( __('Board Member updated. <a target="_blank" href="%s">View Board Member</a>', 'kids-in-tech'), esc_url( $permalink ) ),
        2 => __('Custom field updated.', 'kids-in-tech'),
        3 => __('Custom field deleted.', 'kids-in-tech'),
        4 => __('Board Member updated.', 'kids-in-tech'),
        /* translators: %s: date and time of the revision */
        5 => isset($_GET['revision']) ? sprintf( __('Board Member restored to revision from %s', 'kids-in-tech'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6 => sprintf( __('Board Member published. <a href="%s">View Board Member</a>', 'kids-in-tech'), esc_url( $permalink ) ),
        7 => __('Board Member saved.', 'kids-in-tech'),
        8 => sprintf( __('Board Member submitted. <a target="_blank" href="%s">Preview Board Member</a>', 'kids-in-tech'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
        9 => sprintf( __('Board Member scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Board Member</a>', 'kids-in-tech'),
        // translators: Publish box date format, see http://php.net/date
        date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
        10 => sprintf( __('Board Member draft updated. <a target="_blank" href="%s">Preview Board Member</a>', 'kids-in-tech'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
    );

    return $messages;
}
add_filter( 'post_updated_messages', 'board_member_updated_messages' );

function program_init() {
    register_post_type( 'program', array(
        'labels'            => array(
            'name'                => __( 'Programs', 'kids-in-tech' ),
            'singular_name'       => __( 'Program', 'kids-in-tech' ),
            'all_items'           => __( 'All Programs', 'kids-in-tech' ),
            'new_item'            => __( 'New Program', 'kids-in-tech' ),
            'add_new'             => __( 'Add New', 'kids-in-tech' ),
            'add_new_item'        => __( 'Add New Program', 'kids-in-tech' ),
            'edit_item'           => __( 'Edit Program', 'kids-in-tech' ),
            'view_item'           => __( 'View Program', 'kids-in-tech' ),
            'search_items'        => __( 'Search Programs', 'kids-in-tech' ),
            'not_found'           => __( 'No Programs found', 'kids-in-tech' ),
            'not_found_in_trash'  => __( 'No Programs found in trash', 'kids-in-tech' ),
            'parent_item_colon'   => __( 'Parent Program', 'kids-in-tech' ),
            'menu_name'           => __( 'Programs', 'kids-in-tech' ),
        ),
        'public'            => true,
        'hierarchical'      => false,
        'show_ui'           => true,
        'show_in_nav_menus' => true,
        'supports'          => array( 'title', 'editor' ),
        'has_archive'       => true,
        'rewrite'           => true,
        'query_var'         => true,
        'menu_icon'         => 'dashicons-welcome-learn-more',
        'show_in_rest'      => true,
        'rest_base'         => 'program',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    ) );

}
add_action( 'init', 'program_init' );

function program_updated_messages( $messages ) {
    global $post;

    $permalink = get_permalink( $post );

    $messages['program'] = array(
        0 => '', // Unused. Messages start at index 1.
        1 => sprintf( __('Program updated. <a target="_blank" href="%s">View Program</a>', 'kids-in-tech'), esc_url( $permalink ) ),
        2 => __('Custom field updated.', 'kids-in-tech'),
        3 => __('Custom field deleted.', 'kids-in-tech'),
        4 => __('Program updated.', 'kids-in-tech'),
        /* translators: %s: date and time of the revision */
        5 => isset($_GET['revision']) ? sprintf( __('Program restored to revision from %s', 'kids-in-tech'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6 => sprintf( __('Program published. <a href="%s">View Program</a>', 'kids-in-tech'), esc_url( $permalink ) ),
        7 => __('Program saved.', 'kids-in-tech'),
        8 => sprintf( __('Program submitted. <a target="_blank" href="%s">Preview Program</a>', 'kids-in-tech'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
        9 => sprintf( __('Program scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Program</a>', 'kids-in-tech'),
        // translators: Publish box date format, see http://php.net/date
        date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
        10 => sprintf( __('Program draft updated. <a target="_blank" href="%s">Preview Program</a>', 'kids-in-tech'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
    );

    return $messages;
}
add_filter( 'post_updated_messages', 'program_updated_messages' );
