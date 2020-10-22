<?php
/**
 * The template override for woocommerce pages
 *
 * @link https://docs.woocommerce.com/document/woocommerce-theme-developer-handbook/#section-3
 *
 * @package Bohochic
 */

if( ! function_exists( 'bohochic_wc_modify' ) ) :
    
    function bohochic_wc_modify() {
        /**
         * Modify woocommerce opening/closing HTML tags
         * Used bootstrap container and row class
         */
        add_action( 'woocommerce_before_main_content', 'bohochic_open_container_row', 5 );
        function bohochic_open_container_row() {
            echo '<div class="container shop-content"><div class="row">';
        }

        add_action( 'woocommerce_after_main_content', 'bohochic_close_container_row', 5 );
        function bohochic_close_container_row() {
            echo '</div></div>';
        }

        /**
         * Removed main WC sidebar from woocommerce_sidebar hook
         */
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

        if( is_shop() ) :

            /**
             * Add opening bootstrap column for WC sidebar
             */
            add_action( 'woocommerce_before_main_content', 'bohochic_open_sidebar_col', 6 );
            function bohochic_open_sidebar_col() {
                echo '<div class="sidebar-shop col col-md-3">';
            }

            /**
             * Call WC sidebar in woocommerce_before_main_content hook
             */
            add_action( 'woocommerce_before_main_content', 'woocommerce_get_sidebar', 7 );

            /**
             * Add closing bootstrap column for WC sidebar
             */
            add_action( 'woocommerce_before_main_content', 'bohochic_close_sidebar_col', 8 );
            function bohochic_close_sidebar_col() {
                echo '</div>';
            }

            add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );

        endif;

        /**
         * Add opening bootstrap column for WC shop product
         */
        add_action( 'woocommerce_before_main_content', 'bohochic_open_shop_product_col', 9 );
        function bohochic_open_shop_product_col() {
            if( is_shop() ) :
                echo '<div class="shop-product col col-md-9">';
            else :
                echo '<div class="shop-product col">';
            endif;
        }

        /**
         * Add opening bootstrap column for WC shop product
         */
        add_action( 'woocommerce_after_main_content', 'bohochic_close_shop_product_col', 4 );
        function bohochic_close_shop_product_col() {
            echo '</div>';
        }
    }

endif;

add_action( 'wp', 'bohochic_wc_modify' );


/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'bohochic_header_add_to_cart_fragment' );

function bohochic_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;

	ob_start();

	?>
    <span class="badge badge-light item"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	<?php
	$fragments['span.item'] = ob_get_clean();
	return $fragments;
}