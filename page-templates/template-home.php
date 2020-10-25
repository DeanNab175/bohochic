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
            <div class="slide">
                <div class="slide__image-box">
                <img class="slide__img d-block w-100" src="dist/images/bohoslider/boho1.jpg" alt="First slide">
                </div>
                <div class="slide__details">
                <div class="slide__details-wrap">
                    <h2 class="slide__title">Title 1</h2>
                    <h3 class="slide__subtitle">Subtitle 1</h3>
                    <p class="slide__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deleniti cupiditate quis quia a. Ut, perferendis numquam consequuntur dolore molestiae ab illum sit vel natus, asperiores mollitia praesentium voluptas reprehenderit.</p>
                    <button type="button" class="slide__btn btn btn-primary btn--reg">Our story</button>
                </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__image-box">
                <img class="slide__img d-block w-100" src="dist/images/bohoslider/boho2.jpg" alt="Second slide">                
                </div>
                <div class="slide__details">
                <div class="slide__details-wrap">
                    <h2 class="slide__title">Title 2</h2>
                    <h3 class="slide__subtitle">Subtitle 2</h3>
                    <p class="slide__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deleniti cupiditate quis quia a. Ut, perferendis numquam consequuntur dolore molestiae ab illum sit vel natus, asperiores mollitia praesentium voluptas reprehenderit.</p>
                    <button type="button" class="slide__btn btn btn-primary btn--reg">Primary</button>
                </div>
                </div>
            </div>
            <div class="slide">
                <div class="slide__image-box">
                <img class="slide__img d-block w-100" src="dist/images/bohoslider/boho3.jpg" alt="Third slide">                
                </div>
                <div class="slide__details">
                <div class="slide__details-wrap">
                    <h2 class="slide__title">Title 3</h2>
                    <h3 class="slide__subtitle">Subtitle 3</h3>
                    <p class="slide__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deleniti cupiditate quis quia a. Ut, perferendis numquam consequuntur dolore molestiae ab illum sit vel natus, asperiores mollitia praesentium voluptas reprehenderit.</p>
                    <button type="button" class="slide__btn btn btn-primary btn--reg">Primary</button>
                </div>
                </div>
            </div>
            </div>
        </section><!-- .slider -->
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