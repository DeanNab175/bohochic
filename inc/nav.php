<nav id="horizontal-nav-menu" class="horizontal-nav-menu">
    <!-- <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
        </li>
    </ul> -->
    <?php
        $args = array(
            'theme_location'    => 'bohochic_main_menu',
            'menu'              => 'Primary menu',
            'menu_class'        => 'navbar-nav',
            'menu_id'           => 'primary-menu',
            'container'         => false,
            'depth'             => 2,
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        );
        wp_nav_menu( $args );
    ?>
</nav><!-- .main-menu-nav -->