<?php
    /*
     * Method process option
     * # option 1: config font
     * # option 2: process config theme
    */
    if( !is_admin() ):

        add_action('wp_head','shopcar_config_theme');

        function shopcar_config_theme() {

            if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) :

                    global $shopcar_options;
                    $shopcar_favicon = $shopcar_options['shopcar_favicon_upload']['url'];

                    if( $shopcar_favicon != '' ) :

                        echo '<link rel="shortcut icon" href="' . esc_url($shopcar_favicon) . '" type="image/x-icon" />';

                    endif;

            endif;
        }

        // Method add custom css, Css custom add here
        // Inline css add here
        /**
         * Enqueues front-end CSS for the custom css.
         *
         * @see wp_add_inline_style()
         */

        add_action( 'wp_enqueue_scripts', 'shopcar_custom_css', 99 );

        function shopcar_custom_css() {

            global $shopcar_options;

            $shopcar_typo_selecter_1   =   $shopcar_options['shopcar_custom_typography_1_selector'];

            $shopcar_typo1_font_family   =   $shopcar_options['shopcar_custom_typography_1']['font-family'] == '' ? '' : $shopcar_options['shopcar_custom_typography_1']['font-family'];

            $shopcar_css_style = '';

            if ( $shopcar_typo1_font_family != '' ) :
                $shopcar_css_style .= ' '.esc_attr( $shopcar_typo_selecter_1 ).' { font-family: '.balanceTags( $shopcar_typo1_font_family, true ).' }';
            endif;

            if ( $shopcar_css_style != '' ) :
                wp_add_inline_style( 'shopcar-style', $shopcar_css_style );
            endif;

        }

    endif;
