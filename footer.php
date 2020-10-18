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
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <section class="footer-widgets">Footer widgets</section><!-- .footer-widgets -->
                    <section class="copyright">Copyright</section><!-- .copyright -->
                </div>
                <div class="col-md-6">
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
    </footer>
</div><!-- .site -->
<?php wp_footer(); ?>
</body>
</html>