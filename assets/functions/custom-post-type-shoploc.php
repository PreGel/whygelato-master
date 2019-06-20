<?php
/* 
Custom post type for Gelato Shop Locator
*/


// let's create the function for the custom type
function custom_post_shoploc() { 
	// creating (registering) the custom type 
	register_post_type( 'shop_location', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Gelato Shops', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Gelato Shop', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Gelato Shops', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Gelato Shop', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Gelato Shop', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Gelato Shop', 'jointswp'), /* New Display Title */
			'view_item' => __('View Gelato Shop', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Gelato Shops', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the gelato shop locator custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-store', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'gelaterias', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'gelateria', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'shop_location');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'shop_location');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_shoploc');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'shop_cat', 
    	array('shop_location'), /* if you change the name of register_post_type( 'shop_location', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Gelato Shop Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Gelato Shop Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Gelato Shop Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Gelato Shop Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Gelato Shop Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Gelato Shop Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Gelato Shop Category', 'jointswp' ), /* edit Gelato Shop taxonomy title */
    			'update_item' => __( 'Update Gelato Shop Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Gelato Shop Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Gelato Shop Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'Gelato Shop-slug' ),
    	)
    );   
    
	// now let's add Gelato Shop tags (these act like categories)
    register_taxonomy( 'shop_tag', 
    	array('shop_location'), /* if you change the name of register_post_type( 'shop_location', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Gelato Shop Tags', 'jointswp' ), /* name of the Gelato Shop taxonomy */
    			'singular_name' => __( 'Gelato Shop Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Gelato Shop Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Gelato Shop Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Gelato Shop Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Gelato Shop Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Gelato Shop Tag', 'jointswp' ), /* edit Gelato Shop taxonomy title */
    			'update_item' => __( 'Update Gelato Shop Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Gelato Shop Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Gelato Shop Tag Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true,
    		'show_ui' => true,
    		'query_var' => true,
    	)
    ); 
    
    /*
    	looking for custom meta boxes?
    	check out this fantastic tool:
    	https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
    */