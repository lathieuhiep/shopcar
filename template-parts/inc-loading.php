<?php

global $shopcar_options;

$shopcar_show_loading = $shopcar_options['shopcar_general_show_loading'] == '' ? '0' : $shopcar_options['shopcar_general_show_loading'];

if(  $shopcar_show_loading == 1 ) :

    $shopcar_loading_url  = $shopcar_options['shopcar_general_image_loading']['url'];
?>

    <div id="site-loadding" class="d-flex align-items-center justify-content-center">

        <?php  if( $shopcar_loading_url !='' ): ?>

            <img class="loading_img" src="<?php echo esc_url( $shopcar_loading_url ); ?>" alt="<?php esc_attr_e('loading...','shopcar') ?>"  >

        <?php else: ?>

            <img class="loading_img" src="<?php echo esc_url(get_theme_file_uri( '/images/loading.gif' )); ?>" alt="<?php esc_attr_e('loading...','shopcar') ?>">

        <?php endif; ?>

    </div>

<?php endif; ?>