<?php

/* Option Metabox Post */
add_action( 'cmb2_admin_init', 'shopcar_option_metaboxes' );

function shopcar_option_metaboxes() {

    /**
     * Initiate the metabox
     */
    $shopcar_metabox_post = new_cmb2_box( array(
        'id'            => 'shopcar_metabox_post',
        'title'         => __( 'Test Metabox', 'shopcar' ),
        'object_types'  => array( 'post', ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true,
    ) );

    // Regular text field
    $shopcar_metabox_post->add_field( array(
        'name'       => __( 'Test Text', 'shopcar' ),
        'desc'       => __( 'field description (optional)', 'shopcar' ),
        'id'         => 'shopcar_metabox_post_text',
        'type'       => 'text',
        'show_on_cb' => 'cmb2_hide_if_no_cats',
    ) );

    // URL text field
    $shopcar_metabox_post->add_field( array(
        'name' => __( 'Website URL', 'shopcar' ),
        'desc' => __( 'field description (optional)', 'shopcar' ),
        'id'   => 'shopcar_metabox_post_url',
        'type' => 'text_url',
    ) );

    // Email text field
    $shopcar_metabox_post->add_field( array(
        'name' => __( 'Test Text Email', 'shopcar' ),
        'desc' => __( 'field description (optional)', 'shopcar' ),
        'id'   => 'shopcar_metabox_post_email',
        'type' => 'text_email',
    ) );

    // Group
    $shopcar_metabox_post_group_id = $shopcar_metabox_post->add_field( array(
        'id'          => 'wiki_test_repeat_group',
        'type'        => 'group',
        'description' => __( 'Generates reusable form entries', 'shopcar' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'shopcar' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'shopcar' ),
            'remove_button' => __( 'Remove Entry', 'shopcar' ),
            'sortable'      => true, // beta
            'closed'        => true
        ),
    ) );

    $shopcar_metabox_post->add_group_field( $shopcar_metabox_post_group_id, array(
        'name' => 'Entry Title',
        'id'   => 'title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $shopcar_metabox_post->add_group_field( $shopcar_metabox_post_group_id, array(
        'name' => 'Description',
        'description' => 'Write a short description for this entry',
        'id'   => 'description',
        'type' => 'textarea_small',
    ) );

    $shopcar_metabox_post->add_group_field( $shopcar_metabox_post_group_id, array(
        'name' => 'Entry Image',
        'id'   => 'image',
        'type' => 'file',
    ) );

    $shopcar_metabox_post->add_group_field( $shopcar_metabox_post_group_id, array(
        'name' => 'Image Caption',
        'id'   => 'image_caption',
        'type' => 'text',
    ) );

}