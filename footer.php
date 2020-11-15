<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bohochic
 */

?>

    <footer>
        <section class="footer-widgets">
            <div class="container">
                <div class="row">
                    <?php if( is_active_sidebar( 'bohochic-footer-sidebar-1' ) ) : ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'bohochic-footer-sidebar-2' ) ) : ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-2' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'bohochic-footer-sidebar-3' ) ) : ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- .footer-widgets -->

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>© <?php echo date('Y'); ?> Bohochic Boutique. All Rights Reserved.</>
                    </div>
                    <div class="col-md-8">
                        <nav class="footer-nav">
                            <?php
                                $args = array(
                                    'theme_location'    => 'bohochic_footer_menu',
                                );
                                wp_nav_menu( $args );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- .copyright -->
    </footer>
</div><!-- .site -->
<?php wp_footer(); ?>
</body>
</html>