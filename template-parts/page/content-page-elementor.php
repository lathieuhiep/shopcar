<?php
/**
 * Displays content for front page elementor
 *
 */

while ( have_posts() ) : the_post() ;
?>

    <div class="site-page-content">

        <?php
        the_content();

        shopcar_link_page();
        ?>

    </div>

<?php endwhile; ?>