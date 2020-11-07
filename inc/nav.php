<nav class="navbar navbar-expand-md horizontal-nav-menu" role="navigation">
    <div class="container">
        <div class="brand-logo">
            <?php
            if( has_custom_logo() ) :
                the_custom_logo();
                //echo get_custom_logo();
            else :
            ?>
                <a class="navbar-brand navbar-brand-text" href="<?php echo home_url( '/' ); ?>">
                    <p class="site-title"><?php bloginfo( 'title' ); ?></p>
                    <span class="site-tagline"><?php bloginfo( 'description' ); ?></span>
                </a>
            <?php endif; ?>
        </div>
        <div class="menu">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler hamburger-btn collapsed" type="button" data-toggle="collapse" data-target="#bohochic-navbar-collapse" aria-controls="bohochic-navbar-collapse" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
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
                    'container_class'   => 'collapse navbar-collapse bohochic-navbar-collapse',
                    'container_id'      => 'bohochic-navbar-collapse',
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
