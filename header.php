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
                                <div class="user-account">
                                    <div class="search">Search</div>
                                    <div class="user">User</div>
                                    <div class="cart">Cart</div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>