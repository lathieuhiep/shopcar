<?php

global $shopcar_options;

$shopcar_blog_sidebar_archive = !empty( $shopcar_options['shopcar_blog_sidebar_archive'] ) ? $shopcar_options['shopcar_blog_sidebar_archive'] : 'right';

$shopcar_class_col_content = shopcar_col_use_sidebar( $shopcar_blog_sidebar_archive, 'shopcar-sidebar-main' );

?>

<div class="site-container site-blog">
    <div class="container">
        <div class="row">
            <?php
            if ( $shopcar_blog_sidebar_archive == 'left' ) :
                get_sidebar();
            endif;
            ?>

            <div class="<?php echo esc_attr( $shopcar_class_col_content ); ?>">
                <div class="site-post-content">

                    <?php if ( have_posts() ) : ?>

                        <div class="row">

                            <?php while ( have_posts() ) : the_post(); ?>

                                <div id="post-<?php the_ID(); ?>" <?php post_class( 'site-post-item col-12 col-md-6' ); ?>>
                                    <?php
                                        if ( ! is_search() ):
                                            get_template_part( 'template-parts/archive/content', 'archive-info' );
                                        else:
                                            get_template_part( 'template-parts/search/content', 'search-post' );
                                        endif;
                                    ?>
                                </div>

                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>

                    <?php

                    else:

                        if ( is_search() ) :
                            get_template_part( 'template-parts/search/content', 'search-no-data' );
                        endif;

                    endif; // end if ( have_posts )
                    ?>
                </div>

                <?php shopcar_pagination(); ?>
            </div>

            <?php if ( $shopcar_blog_sidebar_archive == 'right' ) :
                get_sidebar();
            endif;
            ?>

        </div>
    </div>
</div>