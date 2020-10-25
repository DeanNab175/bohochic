<nav class="navbar navbar-expand-md horizontal-nav-menu" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url( '/' ); ?>">
            <?php
            if( has_custom_logo() ) :
                the_custom_logo();
            else :
            ?>
                <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                <span><?php bloginfo( 'description' ); ?></span>
            <?php endif; ?>
        </a>
        <div class="menu">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler hamburger-btn" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon hamburger-toggler-icon">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </span>
            </button>
            
            <?php
                $args = array(
                    'theme_location'    => 'bohochic_main_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                );
                wp_nav_menu( $args );
            ?>

            <?php require get_template_directory() . '/inc/user-account-nav.php'; ?>
        </div>
    </div>
</nav>
