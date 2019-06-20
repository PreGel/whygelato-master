<?php
/* 
Custom post type for Business Interview
*/


// let's create the function for the custom type
function custom_post_interview() { 
	// creating (registering) the custom type 
	register_post_type( 'business_interview', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Business Interviews', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Business Interview', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Business Interviews', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Business Interview', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Business Interview', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Business Interview', 'jointswp'), /* New Display Title */
			'view_item' => __('View Business Interview', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Business Interviews', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Business Interview locator custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 6, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-testimonial', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'shops', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'shops', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'business_interview');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'business_interview');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_interview');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'interview_cat', 
    	array('business_interview'), /* if you change the name of register_post_type( 'business_interview', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Business Interview Categories', 'jointswp' ), /* name of the Business Interview taxonomy */
    			'singular_name' => __( 'Business Interview Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Business Interview Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Business Interview Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Business Interview Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Business Interview Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Business Interview Category', 'jointswp' ), /* edit Business Interview taxonomy title */
    			'update_item' => __( 'Update Business Interview Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Business Interview Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Business Interview Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'interview' ),
    	)
    );   
    
	// now let's add Business Interview tags (these act like categories)
    register_taxonomy( 'interview_tag', 
    	array('business_interview'), /* if you change the name of register_post_type( 'business_interview', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Business Interview Tags', 'jointswp' ), /* name of the Business Interview taxonomy */
    			'singular_name' => __( 'Business Interview Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Business Interview Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Business Interview Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Business Interview Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Business Interview Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Business Interview Tag', 'jointswp' ), /* edit Business Interview taxonomy title */
    			'update_item' => __( 'Update Business Interview Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Business Interview Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Business Interview Tag Name', 'jointswp' ) /* name title for taxonomy */
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