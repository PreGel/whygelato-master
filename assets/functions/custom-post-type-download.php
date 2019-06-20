<?php
/* 
Custom post type for Downloadable Resource
*/


// let's create the function for the custom type
function custom_post_download() { 
	// creating (registering) the custom type 
	register_post_type( 'download_resource', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Downloads', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Download', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Downloads', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Download', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Download', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Download', 'jointswp'), /* New Display Title */
			'view_item' => __('View Download', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Downloads', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Download custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 4, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-download', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'download-item', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'downloads', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'download_resource');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'download_resource');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_download');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'download_cat', 
    	array('download_resource'), /* if you change the name of register_post_type( 'download_resource', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Download Categories', 'jointswp' ), /* name of the custom taxonomy */
    			'singular_name' => __( 'Download Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Download Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Download Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Download Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Download Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Download Category', 'jointswp' ), /* edit Download taxonomy title */
    			'update_item' => __( 'Update Download Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Download Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Download Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		'query_var' => true,
    		'rewrite' => array( 'slug' => 'download-cat' ),
    	)
    );   
    
	// now let's add Download tags (these act like categories)
    register_taxonomy( 'download_tag', 
    	array('download_resource'), /* if you change the name of register_post_type( 'download_resource', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Download Tags', 'jointswp' ), /* name of the Download taxonomy */
    			'singular_name' => __( 'Download Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Download Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Download Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Download Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Download Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Download Tag', 'jointswp' ), /* edit Download taxonomy title */
    			'update_item' => __( 'Update Download Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Download Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Download Tag Name', 'jointswp' ) /* name title for taxonomy */
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