<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bohochic
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset=<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="site">
    <header class="main-header">
        <section class="navigation-bar">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="brand">Brand</div>
                    </div>
                    <div class="col-9">
                        <div class="menu">
                        <div class="row">
                            <div class="col-8">
                                <?php require "inc/nav.php"; ?>
                            </div>
                            <div class="col-4">
                                <div class="user-account d-flex">
                                    <div class="search">
                                        <button id="search-btn" type="button" class="user-cta__btn user-cta__search btn"><span class="bc-search"></span></button>
                                        <div class="widget_product_search">
                                            <?php get_search_form(); ?>
                                        </div>
                                    </div>
                                    <?php if( class_exists( 'WooCommerce' ) ) : ?>
                                        <div class="user">
                                            <a class="user-cta__btn user-cta__signin btn" href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>">
                                                <span class="bc-user"></span>
                                                <span class="sr-only"><?php _e('My Account', $textdomain); ?></span>
                                            </a>
                                        </div>
                                        <div class="mini-cart site-header-cart">
                                            <a href="<?php echo wc_get_cart_url(); ?>" class="user-cta__btn user-cta__cart btn">
                                                <span class="bc-cart"></span>
                                                <span class="badge badge-light item"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
                                                <span class="sr-only">cart items</span>
                                            </a>
                                            <div class="header-mini-cart">
                                                <?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>