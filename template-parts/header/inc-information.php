<?php
global $shopcar_options;

$shopcar_information_address   =   $shopcar_options['shopcar_information_address'];
$shopcar_information_mail      =   $shopcar_options['shopcar_information_mail'];
$shopcar_information_phone     =   $shopcar_options['shopcar_information_phone'];
?>

<div class="information">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-7">
                <?php if ( $shopcar_information_address != '' ) : ?>

                    <span>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <?php echo esc_html( $shopcar_information_address ); ?>
                    </span>

                <?php
                endif;

                if ( $shopcar_information_mail != '' ) :
                ?>

                    <span>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <?php echo esc_html( $shopcar_information_mail ); ?>
                    </span>

                <?php
                endif;

                if ( $shopcar_information_phone != '' ) :
                ?>

                    <span>
                        <i class="fas fa-mobile-alt"></i>
                        <?php echo esc_html( $shopcar_information_phone ); ?>
                    </span>

                <?php endif; ?>
            </div>

            <div class="col-12 col-md-12 col-lg-5 d-none d-lg-block">
                <div class="information__social-network social-network-toTopFromBottom d-lg-flex justify-content-lg-end">
                    <?php shopcar_get_social_url(); ?>
                </div>
            </div>
        </div>
    </div>
</div>