<?php

/**
 * Ajax load more file.
 * @package Gozal
 */

add_action('wp_ajax_nopriv_load_more',  'ajax_load_more');
 add_action('wp_ajax_load_more',  'ajax_load_more');
 

 function ajax_load_more()
    {

$page_no = get_query_var('paged' ) ? get_query_var('paged' ) : 1;
$page_no = ! empty( $_POST['page'] ) ? filter_var( $_POST['page'], FILTER_VALIDATE_INT ) + 1 : $page_no;

// Default Argument.
$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 3, // Number of posts per page - default
    'paged'          => $page_no,
];

$query = new WP_Query( $args );;

if ( $query->have_posts() ):
    // Loop Posts.
    while ( $query->have_posts() ): $query->the_post();
    if (has_post_thumbnail()) :
        get_template_part('/template-parts/content');
    endif;
    endwhile;
else:
    // Return response as zero, when no post found.
    wp_die( );
endif;

wp_reset_postdata();
wp_die( );
}