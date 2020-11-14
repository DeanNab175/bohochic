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
        <section class="slider">
            <!-- Owl carousel -->
            <div class="owl-carousel">
                <?php
                    for ( $i = 1; $i < 4; $i++ ) : 
                        $slider_page[$i] = get_theme_mod( 'set_slider_page' . $i );
                        $slider_button_text[$i] = get_theme_mod( 'set_slider_button_text' . $i );
                        $slider_button_url[$i] = get_theme_mod( 'set_slider_button_url' . $i );
                    endfor;

                    $args = array(
                        'post_type'         => 'page',
                        'posts_per_page'    => 3,
                        'post__in'          => $slider_page,
                        'order_by'          => 'post__in'
                    );

                    $slider_loop = new WP_Query( $args );
                    $j = 1;
                    if( $slider_loop->have_posts() ) :
                        while( $slider_loop->have_posts() ) :
                            $slider_loop->the_post();
                ?>
                            <div class="slide">
                                <div class="slide__image-box">
                                    <?php
                                        the_post_thumbnail( 'bohochic-slider', array( 'class' => 'slide__img d-block w-100' ) );
                                    ?>
                                    <!-- <img class="slide__img d-block w-100" src="dist/images/bohoslider/boho1.jpg" alt="First slide"> -->
                                </div>
                                <div class="slide__details">
                                    <div class="container">
                                        <div class="slide__details-wrap">
                                            <h2 class="slide__title"><?php the_title(); ?></h2>
                                            <div class="slide__desc"><?php the_content(); ?></div>
                                            <a href="<?php echo $slider_button_url[$j]; ?>" class="slide__btn btn btn-primary btn--reg">
                                                <?php echo $slider_button_text[$j]; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                            $j++;
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
        </section><!-- .slider -->

        <section class="product-categories new-release">
            <div class="product-categories-wrap new-release__wrap">
                <?php
                    for ( $i = 1; $i < 4; $i++ ) :

                        // get category id from customizer setting
                        $id = get_theme_mod( 'set_category_' . $i );

                        // get the thumbnail id using the queried category term_id
                        $thumbnail_id = get_term_meta( $id, 'thumbnail_id', true ); 
                        // get the image URL
                        $image = wp_get_attachment_url( $thumbnail_id );
                        // get the category name
                        $cat_name = get_the_category_by_ID( $id );
                        // get the category URL
                        $cat_url = get_category_link( $id );

                        /* $term = get_term( $id, 'product_cat' );
                        echo $term->count; */
                ?>
            
                    <div class="product-category new-release__item">
                        <img src="<?php echo $image; ?>" alt="<?php echo $cat_name; ?>">
                        <div class="new-release__detail">
                            <h1 class="cat-name"><a href="<?php echo $cat_url; ?>"><?php echo $cat_name; ?></a></h1>
                        </div>
                    </div>

                <?php
                   endfor;
                ?>
            </div>
        </section><!-- .product-categories -->

        <section class="popular-products">
            <div class="container">
                <?php
                    $popular_limit      = get_theme_mod( 'set_popular_max_num', 4 );
                    $popular_col        = get_theme_mod( 'set_popular_max_col', 4 );
                    $new_arrivals_limit = get_theme_mod( 'set_new_arrivals_max_num', 4 );
                    $new_arrivals_col   = get_theme_mod( 'set_new_arrivals_max_col', 4 );
                ?>
                <h2 class="section-title"><?php _e('Popular products', 'bohochic'); ?></h2>
                <?php echo do_shortcode( '[products limit="'. $popular_limit .'" columns="'. $popular_col .'" orderby="popularity"]' ); ?>
            </div>
        </section><!-- .popular-products -->

        <section class="new-arrivals">
            <div class="container">
                <h2 class="section-title"><?php _e('New arrivals', 'bohochic'); ?></h2>
                <?php echo do_shortcode( '[products limit="'. $new_arrivals_limit .'" columns="'. $new_arrivals_col .'" orderby="date"]' ); ?>
            </div>
        </section><!-- .new-arrivals -->

        <section class="deal-of-the-week">Deal of the week</section><!-- .deal-of-the-week -->

        <section class="our-blog">Our blog</section><!-- .our-blog -->

        <!-- <div class="container">
            <?php
            /* if( have_posts() ) :
                while( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content/content' );
                endwhile;
            endif; */
            ?>
        </div> -->
    </main>
</div><!-- .content-area -->

<?php
    get_footer();
?>