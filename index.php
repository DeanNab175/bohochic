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
    <main class="site-main">
        <div class="container">
            <div class="row">
                <section class="col-lg-9 col-md-8 col-12">
                    <?php
                    if( have_posts() ) :
                        while( have_posts() ) :
                            the_post();

                            get_template_part( 'template-parts/content/content' );
                        endwhile;
                    else :
                        get_template_part( 'template-parts/content/content', 'none' );
                    endif;
                    ?>
                </section>
                <?php get_sidebar(); ?>
            </div><!-- .row -->
        </div>
    </main>
</div><!-- .content-area -->

<?php
    get_footer();
?>