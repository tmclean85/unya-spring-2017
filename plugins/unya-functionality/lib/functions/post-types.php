<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function register_program_post_type() {

	$labels = array(
		'name'                  => 'Programs',
		'singular_name'         => 'Program',
		'menu_name'             => 'Programs',
		'name_admin_bar'        => 'Program Type',
		'archives'              => 'Program Archives',
		'attributes'            => 'Program Attributes',
		'parent_item_colon'     => 'Program Parent Item:',
		'all_items'             => 'All Programs',
		'add_new_item'          => 'Add New Program',
		'add_new'               => 'Add Program',
		'new_item'              => 'New Program',
		'edit_item'             => 'Edit Program',
		'update_item'           => 'Update Program',
		'view_item'             => 'View Program',
		'view_items'            => 'View Programs',
		'search_items'          => 'Search Program',
		'not_found'             => 'Program Not found',
		'not_found_in_trash'    => 'Program Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into Program',
		'uploaded_to_this_item' => 'Uploaded to this Program',
		'items_list'            => 'Programs list',
		'items_list_navigation' => 'Programs list navigation',
		'filter_items_list'     => 'Filter Programs list',
	);
	$args = array(
		'label'                 => 'Program',
		'description'           => 'Post type for programs available through UNYA',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'register_program_post_type', 0 );

function register_news_post_type() {

	$labels = array(
		'name'                  => 'News',
		'singular_name'         => 'News',
		'menu_name'             => 'News',
		'name_admin_bar'        => 'News Type',
		'archives'              => 'News Archives',
		'attributes'            => 'News Attributes',
		'parent_item_colon'     => 'News Parent Item:',
		'all_items'             => 'All News',
		'add_new_item'          => 'Add New News',
		'add_new'               => 'Add News',
		'new_item'              => 'New News',
		'edit_item'             => 'Edit News',
		'update_item'           => 'Update News',
		'view_item'             => 'View News',
		'view_items'            => 'View News',
		'search_items'          => 'Search News',
		'not_found'             => 'News Not found',
		'not_found_in_trash'    => 'News Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into News',
		'uploaded_to_this_item' => 'Uploaded to this News',
		'items_list'            => 'News list',
		'items_list_navigation' => 'News list navigation',
		'filter_items_list'     => 'Filter News list',
	);
	$args = array(
		'label'                 => 'News',
		'description'           => 'Post type for news articles about UNYA',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'news', $args );

}
add_action( 'init', 'register_news_post_type', 0 );