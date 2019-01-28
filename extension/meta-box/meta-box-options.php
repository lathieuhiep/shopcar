<?php

add_filter( 'rwmb_meta_boxes', 'shopcar_register_meta_boxes' );

function shopcar_register_meta_boxes() {

    /* Start meta box post */
    $shopcar_meta_boxes[] = array(
        'id'         => 'post_format_option',
        'title'      => esc_html__( 'Post Format', 'shopcar' ),
        'post_types' => array( 'post' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(

            array(
                'id'               => 'shopcar_gallery_post',
                'name'             => 'Gallery',
                'type'             => 'image_advanced',
                'force_delete'     => false,
                'max_status'       => false,
                'image_size'       => 'thumbnail',
            ),

            array(
                'id'            => 'shopcar_video_post',
                'name'          => 'Video Or Audio',
                'type'          => 'oembed',
            ),


        )
    );
    /* End meta box post */

    return $shopcar_meta_boxes;

}