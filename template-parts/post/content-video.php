<?php

$shopcar_video_post = get_post_meta(  get_the_ID() , 'shopcar_video_post', true );

if ( !empty( $shopcar_video_post ) ):

?>

    <div class="site-post-video">
        <?php echo wp_oembed_get( $shopcar_video_post ); ?>
    </div>

<?php endif;?>