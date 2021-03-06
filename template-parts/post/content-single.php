<?php

global $shopcar_options;

$shopcar_on_off_share_single = $shopcar_options['shopcar_on_off_share_single'];

?>

<div id="post-<?php the_ID() ?>" <?php post_class( 'site-post-single-item' ); ?>>
    <?php shopcar_post_formats(); ?>

    <div class="site-post-content">
        <h2 class="site-post-title">
            <?php the_title(); ?>
        </h2>

        <?php shopcar_post_meta(); ?>

        <div class="site-post-excerpt">
            <?php
            the_content();

            shopcar_link_page()
            ?>
        </div>

        <div class="site-post-cat-tag">

            <?php if( get_the_category() != false ): ?>

                <p class="site-post-category">
                    <?php
                    esc_html_e('Category: ','shopcar');
                    the_category( ' ' );;
                    ?>
                </p>

            <?php

            endif;

            if( get_the_tags() != false ):

            ?>

                <p class="site-post-tag">
                    <?php
                    esc_html_e('Tag: ','shopcar');
                    the_tags('',' ');
                    ?>
                </p>

            <?php endif; ?>

        </div>
    </div>

    <?php if ( $shopcar_on_off_share_single == 1 || $shopcar_on_off_share_single == null ) : ?>
        <div class="site-post-share">
            <span>
                <?php  esc_html_e('Share this post:', 'shopcar') ; ?>
            </span>

            <!-- Facebook Button -->
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
                <i class="fa fa-facebook"></i>
            </a>

            <a target="_blank" href="https://twitter.com/home?status=Check%20out%20this%20article:%20<?php print shopcar_social_title( get_the_title() ); ?>%20-%20<?php the_permalink(); ?>">
                <i class="fa fa-twitter"></i>
            </a>

            <?php $shopcar_pin_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() )); ?>

            <a data-pin-do="skipLink" target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php echo esc_url( $shopcar_pin_image ); ?>&description=<?php the_title(); ?>">
                <i class="fa fa-pinterest"></i>
            </a>

            <a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
                <i class="fa fa-google-plus"></i>
            </a>
        </div>
    <?php endif; ?>
</div>

<?php
shopcar_comment_form();

get_template_part( 'template-parts/post/inc','related-post' );
?>




