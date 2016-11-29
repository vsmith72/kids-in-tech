<?php

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
