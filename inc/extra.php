<?php

function cptui_register_my_cpts() {

	/**
	 * Post Type: Business Listings.
	 */

	$labels = [
		"name" => esc_html__( "Business Listings", "immiex" ),
		"singular_name" => esc_html__( "Business Listing", "immiex" ),
	];

	$args = [
		"label" => esc_html__( "Business Listings", "immiex" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "business-listings", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "business-listings", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Industries.
	 */

	$labels = [
		"name" => esc_html__( "Industries", "immiex" ),
		"singular_name" => esc_html__( "Industry", "immiex" ),
	];

	
	$args = [
		"label" => esc_html__( "Industries", "immiex" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => false,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'industries', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "industries",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "industries", [ "business-listings" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );


if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_listing_information',
        'title' => 'Listing Information',
        'fields' => array(
            array(
                'key' => 'field_listing_id',
                'label' => 'Listing ID',
                'name' => 'listing_id',
                'type' => 'text',
                'instructions' => 'Enter the unique listing ID.',
                'required' => 1,
            ),
            array(
                'key' => 'field_contact_phone',
                'label' => 'Contact Phone',
                'name' => 'contact_phone',
                'type' => 'text',
                'instructions' => 'Enter the contact phone number.',
                'required' => 1,
            ),
            array(
                'key' => 'field_for_sale_by',
                'label' => 'For Sale By',
                'name' => 'for_sale_by',
                'type' => 'text',
                'instructions' => 'Specify who is selling the listing.',
            ),
            array(
                'key' => 'field_hours_of_operation',
                'label' => 'Hours of Operation',
                'name' => 'hours_of_operation',
                'type' => 'text',
                'instructions' => 'Enter the hours of operation.',
            ),
            array(
                'key' => 'field_contact_name',
                'label' => 'Contact Name',
                'name' => 'contact_name',
                'type' => 'text',
                'instructions' => 'Enter the name of the contact person.',
                'required' => 1,
            ),
            array(
                'key' => 'field_contact_email',
                'label' => 'Contact Email',
                'name' => 'contact_email',
                'type' => 'email',
                'instructions' => 'Enter the contact email address.',
                'required' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'business-listings', // Change this to your target post type
                ),
            ),
        ),
    ));
    
    endif;
    