<?php

/*
Plugin Name: DM Clients
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.0.2
Author URI: http://bradknowlton.com/
GitHub Plugin URI: https://github.com/DesignMissoula/DM-clients
*/

/*

Change Log

1.0.2 Initial version

*/

add_action( 'init', 'register_cpt_client' );
function register_cpt_client() {
	$labels = array(
		'name' => _x( 'Clients', 'client' ),
		'singular_name' => _x( 'Client', 'client' ),
		'add_new' => _x( 'Add New', 'client' ),
		'add_new_item' => _x( 'Add New Client', 'client' ),
		'edit_item' => _x( 'Edit Client', 'client' ),
		'new_item' => _x( 'New Client', 'client' ),
		'view_item' => _x( 'View Client', 'client' ),
		'search_items' => _x( 'Search Clients', 'client' ),
		'not_found' => _x( 'No clients found', 'client' ),
		'not_found_in_trash' => _x( 'No clients found in Trash', 'client' ),
		'parent_item_colon' => _x( 'Parent Client:', 'client' ),
		'menu_name' => _x( 'Clients', 'client' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'supports' => array( 'title',  'thumbnail',  ), // 'author', 'editor', 'excerpt', , 'custom-fields' 'custom-fields' // 'editor', 'excerpt',
		// 'taxonomies' => array( 'client_levels' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => false,
		'publicly_queryable' => false,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => false,
		'can_export' => false,
		'rewrite' => false,
		'menu_icon' => 'dashicons-money',
		'capability_type' => 'post'
	);
	register_post_type( 'client', $args );
		
}

