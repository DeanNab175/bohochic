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
            'thumbnail_image_width' => 300,
            'single_image_width'    => 600,
    
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
add_action( 'widgets_init', 'bohochic_widgets_init' );
function bohochic_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Bohochic Main Sidebar', 'bohochic' ),
        'id'            => 'bohochic-sidebar-1',
        'description'   => __( 'Drag and drop widgets here.', 'bohochic' ),
        'before_widget' => '<section id="%1$s" class="widget widget-wrapper %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Shop Sidebar', 'bohochic' ),
        'id'            => 'bohochic-sidebar-shop',
        'description'   => __( 'Drag and drop Woocommerce widgets here.', 'bohochic' ),
        'before_widget' => '<section id="%1$s" class="widget widget-wrapper %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 1', 'bohochic' ),
        'id'            => 'bohochic-footer-sidebar-1',
        'description'   => __( 'Drag and drop widgets here.', 'bohochic' ),
        'before_widget' => '<section id="%1$s" class="widget widget-wrapper %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 2', 'bohochic' ),
        'id'            => 'bohochic-footer-sidebar-2',
        'description'   => __( 'Drag and drop widgets here.', 'bohochic' ),
        'before_widget' => '<section id="%1$s" class="widget widget-wrapper %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 3', 'bohochic' ),
        'id'            => 'bohochic-footer-sidebar-3',
        'description'   => __( 'Drag and drop widgets here.', 'bohochic' ),
        'before_widget' => '<section id="%1$s" class="widget widget-wrapper %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Sidebar 4', 'bohochic' ),
        'id'            => 'bohochic-footer-sidebar-4',
        'description'   => __( 'Drag and drop widgets here.', 'bohochic' ),
        'before_widget' => '<section id="%1$s" class="widget widget-wrapper %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
    ) );
}