<?php
get_header();

global $shopcar_options;

$shopcar_blog_sidebar_single = !empty( $shopcar_options['shopcar_blog_sidebar_single'] ) ? $shopcar_options['shopcar_blog_sidebar_single'] : 'right';

$shopcar_class_col_content = shopcar_col_use_sidebar( $shopcar_blog_sidebar_single, 'shopcar-sidebar-main' );

?>

<div class="site-container site-single">
    <div class="container">
        <div class="row">

            <?php

            if( $shopcar_blog_sidebar_single == 'left' ):
                get_sidebar();
            endif;

            ?>

            <div class="<?php echo esc_attr( $shopcar_class_col_content ); ?>">

                <?php
                if ( have_posts() ) : while (have_posts()) : the_post();

                    get_template_part( 'template-parts/post/content','single' );

                    endwhile;
                endif;
                ?>

            </div>

            <?php

            if( $shopcar_blog_sidebar_single == 'right' ):
                get_sidebar();
            endif;

            ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>

