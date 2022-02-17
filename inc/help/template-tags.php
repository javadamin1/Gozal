<?php

function g_t_p_custom_thumbnail( $post_id , $size = 'featured-thumbnail' , $add_attrib = []){
 
    $custom_thumbnail='';

    if($post_id===null){
        $post_id = get_the_ID();
    }

    if (has_post_thumbnail( $post_id )){
        $default_attributes =[
            'loading'=> 'lazy'
        ];
        $attributes = array_merge( $add_attrib , $default_attributes );
        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id( $post_id ),
            $size,
            false,
            $add_attrib
        );

    }
    return $custom_thumbnail;

}

function t_p_custom_thumbnail( $post_id , $size='featured-thumbnail' , $add_attrib=[] ){
    echo g_t_p_custom_thumbnail($post_id,$size , $add_attrib);
}