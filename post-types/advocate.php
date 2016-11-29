<?php

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
