<?php
/**
 * Template for displaying search forms
 *
 * @package Bohochic
 */

?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" id="search-form" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'bohochic' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit" class="search-submit"><span class="bc-search"></span><span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'bohochic' ); ?></span></button>
    
    <?php if( class_exists( 'WooCommerce' ) ) : ?>
        <input type="hidden" value="product" name="post_type" id="post_type" />
    <?php endif; ?>
</form>
