<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bohochic
 */
?>

<?php if( is_active_sidebar( 'bohochic-sidebar-1' ) ) : ?>
    <aside class="col-lg-3 col-md-4 col-12">
        <?php dynamic_sidebar( 'bohochic-sidebar-1' ); ?>
    </aside>
<?php endif; ?>