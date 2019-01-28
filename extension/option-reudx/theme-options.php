<?php
/**
 * ReduxFramework Config File
 */
if ( ! class_exists( 'Redux' ) ) {
    return;
}


// This is your option name where all the Redux data is stored.
$shopcar_opt_name = "shopcar_options";

/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * */

$shopcar_theme = wp_get_theme(); // For use with some settings. Not necessary.

$shopcar_opt_args = array(

    'opt_name'             => $shopcar_opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'display_name'         => $shopcar_theme->get( 'Name' ),
    // Name that appears at the top of your panel
    'display_version'      => $shopcar_theme->get( 'Version' ),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => false,
    // Show the sections below the admin menu item or not
    'menu_title'           => $shopcar_theme->get( 'Name' ) . esc_html__(' Options', 'shopcar'),
    'page_title'           => $shopcar_theme->get( 'Name' ) . esc_html__(' Options', 'shopcar'),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,
    'admin_bar'            => true,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => false,
    // Show the time the page took to load, etc
    'update_notice'        => false,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,

    // OPTIONAL -> Give you extra features
    'page_priority'        => 2,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => true,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
    // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'             =>  array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     =>  array(
            'color'     => 'red',
            'shadow'    =>  true,
            'rounded'   =>  false,
            'style'     =>  '',
        ),
        'tip_position'  =>  array(
            'my'        =>  'top left',
            'at'        =>  'bottom right',
        ),
        'tip_effect'    =>  array(
            'show'      =>  array(
                'effect'    =>  'slide',
                'duration'  =>  '500',
                'event'     =>  'mouseover',
            ),
            'hide'  =>  array(
                'effect'    =>  'slide',
                'duration'  =>  '500',
                'event'     =>  'click mouseleave',
            ),
        ),
    )
);
Redux::setArgs( $shopcar_opt_name, $shopcar_opt_args );
/*
 * ---> END ARGUMENTS
 */

/*
 * ---> START HELP TABS
 */

$shopcar_opt_tabs = array(
    array(
        'id'        =>  'redux-help-tab-1',
        'title'     =>  esc_html__( 'Theme Information 1', 'shopcar' ),
        'content'   =>  esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'shopcar' )
    ),
    array(
        'id'        =>  'redux-help-tab-2',
        'title'     =>  esc_html__( 'Theme Information 2', 'shopcar' ),
        'content'   =>  esc_html__( '<p>This is the tab content, HTML is allowed.</p>', 'shopcar' )
    )
);
Redux::setHelpTab( $shopcar_opt_name, $shopcar_opt_tabs );

// Set the help sidebar
$shopcar_opt_content = esc_html__( '<p>This is the sidebar content, HTML is allowed.</p>', 'shopcar' );
Redux::setHelpSidebar( $shopcar_opt_name, $shopcar_opt_content );


/*
 * <--- END HELP TABS
 */

/*
 *
 * ---> START SECTIONS
 *
 */

// -> START option background

Redux::setSection( $shopcar_opt_name, array(
    'id'                =>   'shopcar_theme_option',
    'title'             =>   $shopcar_theme->get( 'Name' ).' '.$shopcar_theme->get( 'Version' ),
    'customizer_width'  =>   '400px',
    'icon'              =>   '',
));

// -> END option background

/* Start General Options */

Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'General Options', 'shopcar' ),
    'id'                =>  'shopcar_general',
    'desc'              =>  esc_html__( 'General all config', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-th-large',
));

// Favicon Config
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Favicon', 'shopcar' ),
    'id'            =>  'shopcar_favicon_config',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(
        array(
            'id'        =>  'shopcar_favicon_upload',
            'type'      =>  'media',
            'url'       =>  true,
            'title'     =>  esc_html__( 'Upload Favicon Image', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'Favicon image for your website', 'shopcar' ),
            'desc'      =>  esc_html__( '', 'shopcar' ),
            'default'   =>  false,
        ),
    )
));

//Loading config
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Loading config', 'shopcar' ),
    'id'            =>  'shopcar_general_loading',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(
        array(
            'id'        =>  'shopcar_general_show_loading',
            'type'      =>  'switch',
            'title'     =>  esc_html__( 'Loading On/Off', 'shopcar' ),
            'default'   =>  false,
        ),
        array(
            'id'        =>  'shopcar_general_image_loading',
            'type'      =>  'media',
            'url'       =>  true,
            'title'     =>  esc_html__( 'Upload image loading', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'Upload image .gif', 'shopcar' ),
            'default'   =>  '',
            'required'  =>  array( 'shopcar_general_show_loading', '=', true ),
        ),
    )
));

//Background Options
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Background', 'shopcar' ),
    'id'                =>  'shopcar_background',
    'desc'              =>  esc_html__( 'Background all config', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'subsection'        => true,
    'fields'            => array(
        array(
            'id'        =>  'shopcar_background_body',
            'output'    =>  'body',
            'type'      =>  'background',
            'clone'     =>  'true',
            'title'     =>  esc_html__( 'Body background', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'Body background with image, color, etc.', 'shopcar' ),
            'hint'      =>  array(
                'content'   =>  'This is a <b>hint</b> tool-tip for the text field.<br/><br/>Add any HTML based text you like here.',
            )
        ),
    ),
));

/* End General Options */

/* Start Header Options */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Header Options', 'shopcar' ),
    'id'                =>  'shopcar_header',
    'desc'              =>  esc_html__( 'Header all config', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-arrow-up',
));

//Logo Config
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Logo', 'shopcar' ),
    'id'            =>  'shopcar_logo_config',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(

        array(
            'id'        =>  'shopcar_logo_image',
            'type'      =>  'media',
            'url'       =>  true,
            'title'     =>  esc_html__( 'Upload logo', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'logo image for your website', 'shopcar' ),
            'desc'      =>  esc_html__( '', 'shopcar' ),
            'default'   =>  false,
        ),

        array(
            'id'                => 'shopcar_logo_images_size',
            'type'              => 'dimensions',
            'units'             => array( 'em', 'px', '%' ),
            'title'             => esc_html__( 'Set width/height for logo', 'shopcar' ),
            'subtitle'          => esc_html__( '', 'shopcar' ),
            'units_extended'    => 'true',
            'default'           => array(
                'width'     =>  '',
                'height'    =>  '',
            ),
            'output'         => array('.site-logo img'),
        ),
    )
));

// information
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Information', 'shopcar' ),
    'id'            =>  'shopcar_information_config',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(

        array(
            'id'        =>  'shopcar_information_show_hide',
            'type'      =>  'select',
            'title'     =>  esc_html__( 'Show Or Hide Information', 'shopcar' ),
            'default'   =>  1,
            'options'   =>  array(
                1   =>  esc_html__( 'Show', 'shopcar' ),
                0   =>  esc_html__( 'Hide', 'shopcar' )
            )
        ),

        array(
            'id'        =>  'shopcar_information_address',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Address', 'shopcar' ),
            'default'   =>  '988782, Our Street, S State.',
        ),

        array(
            'id'        =>  'shopcar_information_mail',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Mail', 'shopcar' ),
            'default'   =>  'info@domain.com',
        ),

        array(
            'id'        =>  'shopcar_information_phone',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Phone', 'shopcar' ),
            'default'   =>  '+1 234 567 186',
        ),

    )
));

/* End Header Options */

/* Start Blog Option */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Blog Options', 'shopcar' ),
    'id'                =>  'shopcar_blog_option',
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-blogger',
    'fields'            =>  array(

        array(
            'id'        =>  'shopcar_blog_sidebar_archive',
            'type'      =>  'image_select',
            'title'     =>  esc_html__( 'Sidebar Archive', 'shopcar' ),
            'desc'      =>  esc_html__( 'Use for archive, index, page search', 'shopcar' ),
            'default'   =>  'right',
            'options'   =>  array(
                'hide' =>  array(
                    'alt'   =>  'None Sidebar',
                    'img'   =>  ReduxFramework::$_url . 'assets/img/1col.png'
                ),

                'left' =>  array(
                    'alt'   =>  'Sidebar Left',
                    'img'   =>  ReduxFramework::$_url . 'assets/img/2cl.png'
                ),

                'right' =>  array(
                    'alt'   =>  'Sidebar Right',
                    'img'   =>  ReduxFramework::$_url . 'assets/img/2cr.png'
                ),

            ),
        ),

        array(
            'id'        =>  'shopcar_blog_sidebar_single',
            'type'      =>  'image_select',
            'title'     =>  esc_html__( 'Sidebar Single', 'shopcar' ),
            'default'   =>  'right',
            'options'   =>  array(
                'hide' =>  array(
                    'alt'   =>  'None Sidebar',
                    'img'   =>  ReduxFramework::$_url . 'assets/img/1col.png'
                ),

                'left' =>  array(
                    'alt'   =>  'Sidebar Left',
                    'img'   =>  ReduxFramework::$_url . 'assets/img/2cl.png'
                ),

                'right' =>  array(
                    'alt'   =>  'Sidebar Right',
                    'img'   =>  ReduxFramework::$_url . 'assets/img/2cr.png'
                ),

            ),
        ),

        array(
            'id'        =>  'shopcar_on_off_share_single',
            'type'      =>  'switch',
            'title'     =>  esc_html__( 'On/Off Share Post Single', 'shopcar' ),
            'default'   =>  true,
        ),

    )
));
/* End Blog Option */

/* Start Social Network */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Social Network', 'shopcar' ),
    'id'                =>  'shopcar_social_network',
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-globe-alt',
    'fields'            =>  array(
        array(
            'id'        =>  'shopcar_social_network_facebook',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Facebook', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_twitter',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Twitter', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_google-plus',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Google Plus', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_linkedin',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Linkedin', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_pinterest',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Pinterest', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_youtube',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Youtube', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_instagram',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Instagram', 'shopcar' ),
            'default'   =>  '#',
        ),

        array(
            'id'        =>  'shopcar_social_network_vimeo',
            'type'      =>  'text',
            'title'     =>  esc_html__( 'Vimeo', 'shopcar' ),
            'default'   =>  '#',
        ),

    )
));
/* End Social Network */

/* Start Shop */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Shop', 'shopcar' ),
    'id'                =>  'shopcar_shop_woo',
    'desc'              =>  esc_html__( 'Settings WooCommerce', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-shopping-cart',
    'fields'            =>  array(
        array(
            'id'            =>  'shopcar_product_limit',
            'type'          =>  'slider',
            'title'         =>  esc_html__( 'Product Limit Page Shop', 'shopcar' ),
            'min'           =>  1,
            'step'          =>  1,
            'max'           =>  250,
            'default'       =>  12,
            'display_value' => 'text'
        ),

        array(
            'id'        =>  'shopcar_products_per_row',
            'type'      =>  'select',
            'title'     =>  esc_html__( 'Products Per Row', 'shopcar' ),
            'default'   =>  4,
            'options'   =>  array(
                3   =>  '3 Column',
                4   =>  '4 Column',
                5   =>  '5 Column',
            )
        ),

        array(
            'id'        =>  'shopcar_sidebar_woo',
            'type'      =>  'select',
            'title'     =>  esc_html__( 'Position Sidebar Woocommerce', 'shopcar' ),
            'desc'          =>  esc_html__( 'Position Sidebar Woocommerce', 'shopcar' ),
            'default'   =>  'left',
            'options'   =>  array(
                'left'  =>  'Left',
                'right' =>  'Right',
                'hide'  =>  'Hide',
            )
        ),
    )
));
/* End Shop */

/* Start Typography Options */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Typography', 'shopcar' ),
    'id'                =>  'shopcar_typography',
    'desc'              =>  esc_html__( 'Typography all config', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-fontsize'
));

// Body font
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Body Typography', 'shopcar' ),
    'id'            =>  'shopcar_body_typography',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(

        array(
            'id'        =>  'shopcar_body_typography_font',
            'type'      =>  'typography',
            'output'    =>  array( 'body' ),
            'title'     =>  esc_html__( 'Body Font', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'Specify the body font properties.', 'shopcar' ),
            'google'    =>  true,
            'default'   =>  array(
                'color'         =>  '',
                'font-size'     =>  '',
                'font-family'   =>  '',
                'font-weight'   =>  '',
            ),
        ),

        array(
            'id'        =>  'shopcar_link_color',
            'type'      =>  'link_color',
            'output'    =>  array( 'a' ),
            'title'     =>  esc_html__( 'Link Color', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'Controls the color of all text links.', 'shopcar' ),
            'default'   =>  ''
        ),
    )
));

// Header font
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Custom Typography', 'shopcar' ),
    'id'            =>  'shopcar_custom_typography',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(

        array(
            'id'        =>  'shopcar_custom_typography_1',
            'type'      =>  'typography',
            'title'     =>  esc_html__( 'Custom 1 Typography', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'These settings control the typography for all Custom 1.', 'shopcar' ),
            'google'    =>  true,
            'default'   =>  array(
                'font-size'     =>  '',
                'font-family'   =>  '',
                'font-weight'   =>  '',
                'color'         =>  '',
            ),
        ),

        //selector custom typo 1
        array(
            'id'        =>  'shopcar_custom_typography_1_selector',
            'type'      =>  'textarea',
            'title'     =>  esc_html__( 'Selectors 1', 'shopcar' ),
            'desc'      =>  esc_html__( 'Import selectors. You can import one or multi selector.Example: #selector1,#selector2,.selector3', 'shopcar' ),
            'default'   =>  ''
        ),

        array(
            'id'        =>  'shopcar_custom_typography_2',
            'type'      =>  'typography',
            'title'     =>  esc_html__( 'Custom 2 Typography', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'These settings control the typography for all Custom 2.', 'shopcar' ),
            'google'    =>  true,
            'default'   =>  array(
                'font-size'     =>  '',
                'font-family'   =>  '',
                'font-weight'   =>  '',
                'color'         =>  '',
            ),
        ),

        //selector custom typo 2
        array(
            'id'        => 'shopcar_custom_typography_2_selector',
            'type'      => 'textarea',
            'title'     => esc_html__( 'Selectors 2', 'shopcar' ),
            'desc'      => esc_html__( 'Import selectors. You can import one or multi selector.Example: #selector1,#selector2,.selector3', 'shopcar' ),
            'default'   => ''
        ),

        array(
            'id'        =>  'shopcar_custom_typography_3',
            'type'      =>  'typography',
            'title'     =>  esc_html__( 'Custom 3 Typography', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'These settings control the typography for all Custom 3.', 'shopcar' ),
            'google'    =>  true,
            'default'   =>  array(
                'font-size'     =>  '',
                'font-family'   =>  '',
                'font-weight'   =>  '',
                'color'         =>  '',
            ),
            'output'    =>  '',
        ),

        //selector custom typo 3
        array(
            'id'        =>  'shopcar_custom_typography_3_selector',
            'type'      =>  'textarea',
            'title'     =>  esc_html__( 'Selectors 3', 'shopcar' ),
            'desc'      =>  esc_html__( 'Import selectors. You can import one or multi selector.Example: #selector1,#selector2,.selector3', 'shopcar' ),
            'default'   =>  ''
        ),

    )
));

/* End Typography Options */

/* Start 404 Options */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( '404 Options', 'shopcar' ),
    'id'                =>  'shopcar_404',
    'desc'              =>  esc_html__( '404 page all config', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-warning-sign',
    'fields'            =>  array(

        array(
            'id'        =>  'shopcar_404_background',
            'type'      =>  'media',
            'url'       =>  true,
            'title'     =>  esc_html__( '404 Background', 'shopcar' ),
            'default'   =>  false,
        ),

        array(
            'id'        =>  'shopcar_404_title',
            'type'      =>  'text',
            'title'     =>  esc_html__( '404 Title', 'shopcar' ),
            'default'   =>  'Awww...Do Not Cry',
        ),

        array(
            'id'        =>  'shopcar_404_editor',
            'type'      =>  'editor',
            'title'     =>  esc_html__( '404 Content', 'shopcar' ),
            'default'   =>  esc_html__( 'It is just a 404 Error! What you are looking for may have been misplaced in Long Term Memory.', 'shopcar' ),
            'args'          =>  array(
                'wpautop'       => false,
                'media_buttons' => false,
                'textarea_rows' => 5,
                'teeny'         => false,
                'quicktags'     => true,
            )
        ),

    )
));
/* End 404 Options */

/* Start Footer Options */
Redux::setSection( $shopcar_opt_name, array(
    'title'             =>  esc_html__( 'Footer Options', 'shopcar' ),
    'id'                =>  'shopcar_footer',
    'desc'              =>  esc_html__( 'Footer all config', 'shopcar' ),
    'customizer_width'  =>  '400px',
    'icon'              =>  'el el-arrow-down'
));

// Footer Sidebar Multi Column
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Sidebar Footer Multi Column', 'shopcar' ),
    'id'            =>  'shopcar_footer_sidebar_multi_column',
    'subsection'    =>  true,
    'fields'        =>  array(
        array(
            'id'        =>  'shopcar_footer_multi_column',
            'type'      =>  'image_select',
            'title'     =>  esc_html__( 'Number of Footer Columns', 'shopcar' ),
            'subtitle'  =>  esc_html__( 'Controls the number of columns in the footer', 'shopcar' ),
            'default'   =>  0,
            'options'   =>  array(
                '0' =>  array(
                    'alt'   =>  'No Footer',
                    'img'   =>  get_theme_file_uri( '/extension/assets/images/no-footer.png' )
                ),

                '1' =>  array(
                    'alt'   =>  '1 Columnn',
                    'img'   =>  get_theme_file_uri(  '/extension/assets/images/1column.png' )
                ),

                '2' =>  array(
                    'alt'   =>  '2 Columnn',
                    'img'   =>  get_theme_file_uri( '/extension/assets/images/2column.png' )
                ),
                '3' =>  array(
                    'alt'   =>  '3 Columnn',
                    'img'   =>  get_theme_file_uri(   '/extension/assets/images/3column.png' )
                ),
                '4' =>  array(
                    'alt'   =>  '4 Columnn',
                    'img'   =>  get_theme_file_uri( '/extension/assets/images/4column.png' )
                ),
            ),
        ),

        array(
            'id'            =>  'shopcar_footer_multi_column_1',
            'type'          =>  'slider',
            'title'         =>  esc_html__( 'Column width 1', 'shopcar' ),
            'subtitle'      =>  esc_html__( 'Select the number of columns to display in the footer', 'shopcar' ),
            'desc'          =>  esc_html__( 'Min: 1, max: 12, default value: 1', 'shopcar' ),
            'default'       =>  1,
            'min'           =>  1,
            'step'          =>  1,
            'max'           =>  12,
            'display_value' =>  'label',
            'required'      =>  array(
                array( 'shopcar_footer_multi_column', 'equals','1', '2', '3', '4' ),
                array( 'shopcar_footer_multi_column', '!=', '0' ),
            )
        ),

        array(
            'id'            =>  'shopcar_footer_multi_column_2',
            'type'          =>  'slider',
            'title'         =>  esc_html__( 'Column width 2', 'shopcar' ),
            'subtitle'      =>  esc_html__( 'Select the number of columns to display in the footer', 'shopcar' ),
            'desc'          =>  esc_html__( 'Min: 1, max: 12, default value: 1', 'shopcar' ),
            'default'       =>  1,
            'min'           =>  1,
            'step'          =>  1,
            'max'           =>  12,
            'display_value' =>  'label',
            'required'      =>  array(
                array( 'shopcar_footer_multi_column', 'equals', '2', '3', '4' ),
                array( 'shopcar_footer_multi_column', '!=', '1' ),
                array( 'shopcar_footer_multi_column', '!=', '0' ),
            )
        ),

        array(
            'id'            =>  'shopcar_footer_multi_column_3',
            'type'          =>  'slider',
            'title'         =>  esc_html__( 'Column width 3', 'shopcar' ),
            'subtitle'      =>  esc_html__( 'Select the number of columns to display in the footer', 'shopcar' ),
            'desc'          =>  esc_html__( 'Min: 1, max: 12, default value: 1', 'shopcar' ),
            'default'       =>  1,
            'min'           =>  1,
            'step'          =>  1,
            'max'           =>  12,
            'display_value' =>  'label',
            'required'      =>  array(
                array( 'shopcar_footer_multi_column', 'equals', '3', '4' ),
                array( 'shopcar_footer_multi_column', '!=', '1' ),
                array( 'shopcar_footer_multi_column', '!=', '2' ),
                array( 'shopcar_footer_multi_column', '!=', '0' ),
            )
        ),

        array(
            'id'            =>  'shopcar_footer_multi_column_4',
            'type'          =>  'slider',
            'title'         =>  esc_html__( 'Column width 4', 'shopcar' ),
            'subtitle'      =>  esc_html__( 'Select the number of columns to display in the footer', 'shopcar' ),
            'desc'          =>  esc_html__( 'Min: 1, max: 12, default value: 1', 'shopcar' ),
            'default'       =>  1,
            'min'           =>  1,
            'step'          =>  1,
            'max'           =>  12,
            'display_value' =>  'label',
            'required'      =>  array(
                array( 'shopcar_footer_multi_column',  'equals', '4' ),
                array( 'shopcar_footer_multi_column', '!=', '1' ),
                array( 'shopcar_footer_multi_column', '!=', '2' ),
                array( 'shopcar_footer_multi_column', '!=', '3' ),
                array( 'shopcar_footer_multi_column', '!=', '0' ),
            )
        ),
    )

));

//Copyright
Redux::setSection( $shopcar_opt_name, array(
    'title'         =>  esc_html__( 'Copyright', 'shopcar' ),
    'id'            =>  'shopcar_footer_copyright',
    'desc'          =>  esc_html__( '', 'shopcar' ),
    'subsection'    =>  true,
    'fields'        =>  array(
        array(
            'id'            =>  'shopcar_footer_copyright_editor',
            'type'          =>  'editor',
            'title'         =>  esc_html__( 'Enter content copyright', 'shopcar' ),
            'full_width'    =>  true,
            'default'       =>  'Copyright &amp; DiepLK',
            'args'          =>  array(
                'wpautop'       => false,
                'media_buttons' => false,
                'textarea_rows' => 5,
                'teeny'         => false,
                'quicktags'     => true,
            )
        ),
    )
));

/* End Footer Options */


/*
 * <--- END SECTIONS
 */

// Function to test the compiler hook and demo CSS output.
add_filter('redux/options/' . $shopcar_opt_name . '/compiler', 'compiler_action', 10, 3);

/**
 * This is a test function that will let you see when the compiler hook occurs.
 * It only runs if a field    set with compiler=>true is changed.
 * */
if ( ! function_exists( 'compiler_action' ) ) {
    function compiler_action( $options, $css, $changed_values ) {
        echo '<h1>The compiler hook has run!</h1>';
        echo "<pre>";
        print_r( $changed_values ); // Values that have changed since the last save
        echo "</pre>";
        print_r($options); //Option values
        print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
    }
}
