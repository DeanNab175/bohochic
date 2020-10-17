<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bohochic
 */

 get_header();
?>

    <div class="content-area">
        <main>
            <section class="slider">Slider</section><!-- .slider -->
            <section class="product-categories">Product categories</section><!-- .product-categories -->
            <section class="popular-products">Popular products</section><!-- .popular-products -->
            <section class="new-arrivals">New arrivals</section><!-- .new-arrivals -->
            <section class="deal-of-the-week">Deal of the week</section><!-- .deal-of-the-week -->
            <section class="our-blog">Our blog</section><!-- .our-blog -->

            <div class="container">
                <?php
                if( have_posts() ) :
                    while( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content/content' );
                    endwhile;
                endif;
                ?>
            </div>
        </main>
    </div><!-- .content-area -->

<?php
    get_footer();
?>