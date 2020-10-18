<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bohochic
 */

 get_header();
?>

<div class="content-area">
    <main class="site-main">
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