<?php
/**
 * The sidebar containing the shop widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bohochic
 */
?>

<?php if( is_active_sidebar( 'bohochic-sidebar-shop' ) ) : ?>
    <?php dynamic_sidebar( 'bohochic-sidebar-shop' ); ?>
<?php endif; ?>