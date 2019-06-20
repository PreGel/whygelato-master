<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 


// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// load custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type-shoploc.php');
require_once(get_template_directory().'/assets/functions/custom-post-type-event.php');
require_once(get_template_directory().'/assets/functions/custom-post-type-interview.php');
//downloads custom post type if needed
require_once(get_template_directory().'/assets/functions/custom-post-type-download.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Hide Admin Bar for All Users Except Adminministrators // should move this to a plugin or admin functions file
function bs_hide_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'bs_hide_admin_bar');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 
/*add_filter('wpgmp_geotags_content','wpgmp_geotags_content',1,3);
function wpgmp_geotags_content($content,$post_id,$map_id) {
 
    $content = ""; //reset the $content
         //retrieve post title
         $content = "Post Title : ".get_the_title($post_id);
        //retrieve featured image of the post
         if (has_post_thumbnail( $post_id ) ) {
  
         $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' ); 
  
         $content .= "<br>Featured Image : <img width='100' height='100' src='".$image[0]."' />";
  
         }
         //retrieve the_excerpt of the post
         $content.="<br>Post Excerpt : ".get_the_excerpt($post_id);
         //retrieve custom fields value of the post. 
         $content .="<br>Custom Field : ".get_post_meta($post_id, "first_name", true);
         //return your modified infowindow message. 
         return $content;
}*/
// add_filter("wpgmp_listing_html","my_wpgmp_listing_html",1,4);

// function my_wpgmp_listing_html($output,$variables,$post_id,$map_id)
// {
     
//     $custom_fields=get_post_meta($post_id);
//     $output =$output."<div> Nearest Spot".$custom_fields['first_name']."</div>";
 
//     return $output;    
// }
/*function wp_default_featured_img( $html ) {
    // If there is no post thumbnail, return a default image
    if ( '' == $html ) {
        return '<img src="' . get_template_directory_uri() . '/assets/images/WG_Homepage_Main.jpg" />';
    }
    // Else, return the post thumbnail
    return $html;
}
add_filter( 'post_thumbnail_html', 'wp_default_featured_img' );*/
    
// Auto login after register and redirect to downloads
/*function auto_login_new_user( $user_id ) {
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id);
        wp_redirect( '/pm_registration' );
        exit;
    }
    add_action( 'user_register', 'auto_login_new_user' );*/
// function auto_login_new_user( $user_id ) {        
//             wp_set_current_user($user_id);
//             wp_set_auth_cookie($user_id, false, is_ssl());
//             wp_redirect( '/pm_registration' );
//             exit;
//      }
//     add_action( 'user_register', 'auto_login_new_user',10,1 ); 