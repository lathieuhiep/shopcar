
<?php if( is_active_sidebar( 'shopcar-sidebar-main' ) ): ?>

    <aside class="<?php echo esc_attr( shopcar_col_sidebar() ); ?> site-sidebar">
        <?php dynamic_sidebar( 'shopcar-sidebar-main' ); ?>
    </aside>

<?php endif; ?>