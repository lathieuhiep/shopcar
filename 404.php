<?php
get_header();

global $shopcar_options;

$shopcar_title = $shopcar_options['shopcar_404_title'];
$shopcar_content = $shopcar_options['shopcar_404_editor'];
$shopcar_background = $shopcar_options['shopcar_404_background']['id'];

?>

<div class="site-error text-center">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6">
                <figure class="site-error__image404">
                    <?php
                    if( !empty( $shopcar_background ) ):
                        echo wp_get_attachment_image( $shopcar_background, 'full' );
                    else:
                        echo'<img src="'.esc_url( get_theme_file_uri( '/images/404.jpg' ) ).'" alt="'.get_bloginfo('title').'" />';
                    endif;
                    ?>
                </figure>
            </div>

            <div class="col-md-6">
                <h1 class="site-title-404">
                    <?php
                    if ( $shopcar_title != '' ):
                        echo esc_html( $shopcar_title );
                    else:
                        esc_html_e( 'Awww...Do Not Cry', 'shopcar' );
                    endif;
                    ?>
                </h1>

                <div id="site-error-content">
                    <?php
                    if ( $shopcar_content != '' ) :
                        echo wp_kses_post( $shopcar_content );
                    else:
                    ?>
                        <p>
                            <?php esc_html_e( 'It is just a 404 Error!', 'shopcar' ); ?>
                            <br />
                            <?php esc_html_e( 'What you are looking for may have been misplaced', 'shopcar' ); ?>
                            <br />
                            <?php esc_html_e( 'in Long Term Memory.', 'shopcar' ); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <div id="site-error-back-home">
                    <a href="<?php echo esc_url( get_home_url('/') ); ?>" title="<?php echo esc_html__('Go to the Home Page', 'shopcar'); ?>">
                        <?php esc_html_e('Go to the Home Page', 'shopcar'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>