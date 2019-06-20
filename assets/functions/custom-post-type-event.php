<?php
/* 
Custom post type for Events
*/


// let's create the function for the custom type
function custom_post_event() { 
	// creating (registering) the custom type 
	register_post_type( 'event', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Events', 'jointswp'), /* This is the Title of the Group */
			'singular_name' => __('Event', 'jointswp'), /* This is the individual type */
			'all_items' => __('All Events', 'jointswp'), /* the all items menu item */
			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
			'add_new_item' => __('Add New Event', 'jointswp'), /* Add New Display Title */
			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
			'edit_item' => __('Edit Event', 'jointswp'), /* Edit Display Title */
			'new_item' => __('New Event', 'jointswp'), /* New Display Title */
			'view_item' => __('View Event', 'jointswp'), /* View Display Title */
			'search_items' => __('Search Events', 'jointswp'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the Events custom post type', 'jointswp' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'menu_position' => 5, /* this is what order you want it to appear in on the left hand side menu */ 
			'menu_icon' => 'dashicons-calendar', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			'rewrite'	=> array( 'slug' => 'events', 'with_front' => false ), /* you can specify its url slug */
			'has_archive' => 'events', /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			/* the next one is important, it tells what's enabled in the post editor */
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
	 	) /* end of options */
	); /* end of register post type */
	
	/* this adds your post categories to your custom post type */
	//register_taxonomy_for_object_type('category', 'event');
	/* this adds your post tags to your custom post type */
	//register_taxonomy_for_object_type('post_tag', 'event');
	
} 

	// adding the function to the Wordpress init
	add_action( 'init', 'custom_post_event');
	
	/*
	for more information on taxonomies, go here:
	http://codex.wordpress.org/Function_Reference/register_taxonomy
	*/
	
	// now let's add custom categories (these act like categories)
    register_taxonomy( 'event_cat', 
    	array('event'), /* if you change the name of register_post_type( 'event', then you have to change this */
    	array('hierarchical' => true,     /* if this is true, it acts like categories */             
    		'labels' => array(
    			'name' => __( 'Event Categories', 'jointswp' ), /* name of the Event taxonomy */
    			'singular_name' => __( 'Event Category', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Event Categories', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Event Categories', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Event Category', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Event Category:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Event Category', 'jointswp' ), /* edit Event taxonomy title */
    			'update_item' => __( 'Update Event Category', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Event Category', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Event Category Name', 'jointswp' ) /* name title for taxonomy */
    		),
    		'show_admin_column' => true, 
    		'show_ui' => true,
    		//'query_var' => true,
    		'query_var' => 'event-category',
    		'rewrite' => array( 'slug' => 'event-category' ),
    	)
    );   
    
	// now let's add Event tags (these act like categories)
    register_taxonomy( 'event_tag', 
    	array('event'), /* if you change the name of register_post_type( 'event', then you have to change this */
    	array('hierarchical' => false,    /* if this is false, it acts like tags */                
    		'labels' => array(
    			'name' => __( 'Event Tags', 'jointswp' ), /* name of the Event taxonomy */
    			'singular_name' => __( 'Event Tag', 'jointswp' ), /* single taxonomy name */
    			'search_items' =>  __( 'Search Event Tags', 'jointswp' ), /* search title for taxomony */
    			'all_items' => __( 'All Event Tags', 'jointswp' ), /* all title for taxonomies */
    			'parent_item' => __( 'Parent Event Tag', 'jointswp' ), /* parent title for taxonomy */
    			'parent_item_colon' => __( 'Parent Event Tag:', 'jointswp' ), /* parent taxonomy title */
    			'edit_item' => __( 'Edit Event Tag', 'jointswp' ), /* edit Event taxonomy title */
    			'update_item' => __( 'Update Event Tag', 'jointswp' ), /* update title for taxonomy */
    			'add_new_item' => __( 'Add New Event Tag', 'jointswp' ), /* add new title for taxonomy */
    			'new_item_name' => __( 'New Event Tag Name', 'jointswp' ) /* name title for taxonomy */
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