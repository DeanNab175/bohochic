<?php
/**
 * Theme support
 */
add_action( 'after_setup_theme', 'bohochic_setup', 0 );
if ( ! function_exists( 'bohochic_setup' ) ) :

    function bohochic_setup() {

        // Register menu support
        register_nav_menus( 
            array(
                'bohochic_main_menu'    => 'Bohochic Main Menu',
                'bohochic_footer_menu'    => 'Bohochic Footer Menu'
            )
        );

        // Declaring WooCommerce Support
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 150,
            'single_image_width'    => 300,
    
            'product_grid'          => array(
                'default_rows'    => 3,
                'min_rows'        => 2,
                'max_rows'        => 8,
                'default_columns' => 4,
                'min_columns'     => 2,
                'max_columns'     => 5,
            ),
        ) );

        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        /**
         * Add theme support for custom logo
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'        => 160,
            'width'         => 160,
            'flex_height'   => true,
            'flex_width'   => true,
            'unlink-homepage-logo' => true,
        ) );

        add_image_size( 'bohochic-slider', 1920, 700, array( 'center', 'center' ) );

        // Theme content width
        if ( ! isset( $content_width ) ) {
            $content_width = 600;
        }
    }

endif;


/**
 * Add a sidebar.
 */
function bohochic_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'bohochic' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'bohochic' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'bohochic_widgets_init' );