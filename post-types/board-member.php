<?php

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
