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
                'bohochic_main_menu'    => 'Bohochic Main Menu'
            )
        );
    }

endif;