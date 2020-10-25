<div class="user-account d-flex justify-content-end align-items-center">
    <div class="search">
        <button id="search-btn" type="button" class="user-cta__btn user-cta__search btn"><span class="bc-search"></span></button>
        <div class="widget_product_search">
            <?php get_search_form(); ?>
        </div>
    </div>

    <div class="user">
        <?php
            $current_user = wp_get_current_user();
            $username = '';
            $url = '';

            if( is_user_logged_in() ) :
                $username = esc_html( $current_user->user_login );

                if( class_exists( 'WooCommerce' ) ) :
                    $url = esc_url( get_permalink( wc_get_page_id( 'myaccount' ) ) );
                endif;
            else :
                    $username = __('log in', $textdomain);
                    $url = esc_url( wp_login_url() );
            endif;

        ?>
        <a class="user-cta__btn user-cta__signin btn" href="<?php echo $url; ?>">
            <span class="bc-user"></span>
            <span class="username"><?php echo $username; ?></span>
            <span class="sr-only"><?php _e('My Account', $textdomain); ?></span>
        </a>
    </div>

    <?php if( class_exists( 'WooCommerce' ) ) : ?>
        <div class="mini-cart site-header-cart">
            <a href="<?php echo wc_get_cart_url(); ?>" class="user-cta__btn user-cta__cart btn">
                <span class="bc-cart"></span>
                <span class="badge badge-pill item"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                <span class="sr-only">cart items</span>
            </a>
            <div class="header-mini-cart">
                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
            </div>
        </div>
    <?php endif; ?>
</div>