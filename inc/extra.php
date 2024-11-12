<?php
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
		"hierarchical" => true,
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

	/**
	 * Taxonomy: Province.
	 */

	$labels = [
		"name" => esc_html__( "Province", "immiex" ),
		"singular_name" => esc_html__( "Province", "immiex" ),
	];

	
	$args = [
		"label" => esc_html__( "Province", "immiex" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'province', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "province",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "province", [ "business-listings" ], $args );

	/**
	 * Taxonomy: Types.
	 */

	$labels = [
		"name" => esc_html__( "Types", "immiex" ),
		"singular_name" => esc_html__( "Type", "immiex" ),
	];

	
	$args = [
		"label" => esc_html__( "Types", "immiex" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'business_type', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"show_tagcloud" => false,
		"rest_base" => "business_type",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"rest_namespace" => "wp/v2",
		"show_in_quick_edit" => false,
		"sort" => false,
		"show_in_graphql" => false,
	];
	register_taxonomy( "business_type", [ "business-listings" ], $args );
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
                'default_value' => 'LST-0001', // Default value for Listing ID
            ),
            array(
                'key' => 'field_contact_phone',
                'label' => 'Contact Phone',
                'name' => 'contact_phone',
                'type' => 'text',
                'instructions' => 'Enter the contact phone number.',
                'required' => 1,
                'default_value' => '123-456-7890', // Default value for Contact Phone
            ),
            array(
                'key' => 'field_for_sale_by',
                'label' => 'For Sale By',
                'name' => 'for_sale_by',
                'type' => 'text',
                'instructions' => 'Specify who is selling the listing.',
                'default_value' => 'Owner', // Default value for For Sale By
            ),
            array(
                'key' => 'field_hours_of_operation',
                'label' => 'Hours of Operation',
                'name' => 'hours_of_operation',
                'type' => 'text',
                'instructions' => 'Enter the hours of operation.',
                'default_value' => 'Mon-Fri: 9 AM - 5 PM', // Default value for Hours of Operation
            ),
            array(
                'key' => 'field_contact_name',
                'label' => 'Contact Name',
                'name' => 'contact_name',
                'type' => 'text',
                'instructions' => 'Enter the name of the contact person.',
                'required' => 1,
                'default_value' => 'John Doe', // Default value for Contact Name
            ),
            array(
                'key' => 'field_contact_email',
                'label' => 'Contact Email',
                'name' => 'contact_email',
                'type' => 'email',
                'instructions' => 'Enter the contact email address.',
                'required' => 1,
                'default_value' => 'contact@example.com', // Default value for Contact Email
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'your_custom_post_type', // Change this to your target post type
                ),
            ),
        ),
    ));
    
    endif;
    