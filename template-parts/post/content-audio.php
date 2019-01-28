<?php

    $shopcar_audio = get_post_meta(  get_the_ID() , '_format_audio_embed', true );
    if( $shopcar_audio != '' ):

?>
        <div class="site-post-audio">

            <?php if( wp_oembed_get( $shopcar_audio ) ) : ?>

                <?php echo wp_oembed_get( $shopcar_audio ); ?>

            <?php else : ?>

                <?php echo balanceTags( $shopcar_audio ); ?>

            <?php endif; ?>

        </div>

<?php endif;?>