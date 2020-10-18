<?php
/**
 * Template Name: Home Page
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