<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bohochic
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-head">
        <h1><?php the_title(); ?></h1>
    </header>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
