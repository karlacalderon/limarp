<?php
//IMAGENES SOPORTE
add_theme_support('post-thumbnails');

//SOPORTE MULTI THUMBNAILS
if (class_exists('MultiPostThumbnails')) {
 
new MultiPostThumbnails(array(
'label' => 'horizontal',
'id' => 'horizontal',
'post_type' => 'post'
 ) );
 
new MultiPostThumbnails(array(
'label' => 'social',
'id' => 'social',
'post_type' => 'post'
 ) );
   
 }

// Test by category
function wpsites_display_one_category( $query ) {
if ( $query->is_home() && $query->is_main_query() ) {
    $query->set( 'cat', '3' );
    }
}
add_action( 'pre_get_posts', 'wpsites_display_one_category' );


//Avoid showing duplicated post
add_filter('the_title', 'track_displayed_posts');
add_action('pre_get_posts','remove_already_displayed_posts');
$displayed_posts = [];
function track_displayed_posts($title) {
 global $displayed_posts;
 $displayed_posts[] = get_the_ID();
 return $title; // don't mess with the title
}
function remove_already_displayed_posts($query) {
 global $displayed_posts;
 $query->set('post__not_in', $displayed_posts);
}

//SUPPORT PAGE NAVI REDIRECT
add_filter( 'redirect_canonical', 'custom_disable_redirect_canonical' );
function custom_disable_redirect_canonical( $redirect_url ) {
    if ( is_paged() && is_singular() ) $redirect_url = false; 
    return $redirect_url; 
}

//FULL AMP
add_theme_support( 'amp', array(
   'paired'       => false, // Force native mode
) );

add_theme_support( 'amp', array(
      'templates_supported' => 'all',
) );




//ADD POST FROM VIEWS 
function wpb_get_post_views($postID){
    $count_key = 'wpb_post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0 View";
    }
    return $count.' Views';
}

//REGRITRAR MENUS
register_nav_menus(array(
				  'primary' => __('Primary menu'),
				  ));

//EXCLUDE PAGES FOR SEARCH
function exclude_pages_from_search($query) {
    if ( $query->is_main_query() && is_search() ) {
        $query->set( 'post_type', 'post' );
    }
    return $query;
}
add_filter( 'pre_get_posts','exclude_pages_from_search' );

?>
