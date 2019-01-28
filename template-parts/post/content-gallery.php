<?php

$shopcar_gallery_post = get_post_meta( get_the_ID(),'shopcar_gallery_post', false );

if( !empty( $shopcar_gallery_post ) ) :

    $shopcar_slider_settings =   [
        'loop'  =>  true,
        'nav'   =>  true,
        'dots'  =>  true
    ];

?>

    <div class="site-post-slides owl-carousel owl-theme" data-settings='<?php echo esc_attr( wp_json_encode( $shopcar_slider_settings ) ); ?>'>

        <?php foreach( $shopcar_gallery_post as $item ) : ?>

            <div class="site-post-slides__item">
                <?php echo wp_get_attachment_image( $item, 'full' ); ?>
            </div>

        <?php endforeach; ?>

    </div>

<?php endif; ?>