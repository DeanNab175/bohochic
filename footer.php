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
                        <div class="col-md-3 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'bohochic-footer-sidebar-2' ) ) : ?>
                        <div class="col-md-3 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-2' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'bohochic-footer-sidebar-3' ) ) : ?>
                        <div class="col-md-3 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-3' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'bohochic-footer-sidebar-4' ) ) : ?>
                        <div class="col-md-3 col-12">
                            <?php dynamic_sidebar( 'bohochic-footer-sidebar-4' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section><!-- .footer-widgets -->

        <section class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p>Copyright © <?php echo date('Y'); ?> <a href="<?php echo home_url( '/' ); ?>">Bohochic Boutique</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <nav class="footer-social-links">
                            <a href="#"><span class="bc-facebook"></span></a>
                            <a href="#"><span class="bc-instagram"></span></a>
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