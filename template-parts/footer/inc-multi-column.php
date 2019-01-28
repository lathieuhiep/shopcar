<?php
//Global variable redux
global $shopcar_options;

$shopcar_footer_multi_column     =   $shopcar_options ["shopcar_footer_multi_column"];
$shopcar_footer_multi_column_l   =   $shopcar_options ["shopcar_footer_multi_column_1"];
$shopcar_footer_multi_column_2   =   $shopcar_options ["shopcar_footer_multi_column_2"];
$shopcar_footer_multi_column_3   =   $shopcar_options ["shopcar_footer_multi_column_3"];
$shopcar_footer_multi_column_4   =   $shopcar_options ["shopcar_footer_multi_column_4"];

if( is_active_sidebar( 'shopcar-sidebar-footer-multi-column-1' ) || is_active_sidebar( 'shopcar-sidebar-footer-multi-column-2' ) || is_active_sidebar( 'shopcar-sidebar-footer-multi-column-3' ) || is_active_sidebar( 'shopcar-sidebar-footer-multi-column-4' ) ) :

?>

    <div class="site-footer__multi--column">
        <div class="container">
            <div class="row">
                <?php
                for( $i = 0; $i < $shopcar_footer_multi_column; $i++ ):

                    $j = $i +1;

                    if ( $i == 0 ) :
                        $shopcar_col = $shopcar_footer_multi_column_l;
                    elseif ( $i == 1 ) :
                        $shopcar_col = $shopcar_footer_multi_column_2;
                    elseif ( $i == 2 ) :
                        $shopcar_col = $shopcar_footer_multi_column_3;
                    else :
                        $shopcar_col = $shopcar_footer_multi_column_4;
                    endif;

                    if( is_active_sidebar( 'shopcar-sidebar-footer-multi-column-'.$j ) ):
                ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-<?php echo esc_attr( $shopcar_col ); ?>">

                        <?php dynamic_sidebar( 'shopcar-sidebar-footer-multi-column-'.$j ); ?>

                    </div>

                <?php
                    endif;

                endfor;
                ?>
            </div>
        </div>
    </div>

<?php endif; ?>