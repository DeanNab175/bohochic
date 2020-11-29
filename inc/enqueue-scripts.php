<?php
/**
 * =============================================================
 *  Front Enqueue Functions
 * =============================================================
 */
add_action( 'wp_enqueue_scripts', 'bohochic_scripts' );
if( ! function_exists( 'bohochic_scripts' ) ) :

	function bohochic_scripts() {
		# --- enqueue styles ---
		//Vendors
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.5.2', 'all' );
		wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/assets/css/vendor/animate.css', array(), '4.0.0', 'all' );
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/vendor/owlcarousel/owl.carousel.css', array(), '2.3.4', 'all' );
		wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/assets/css/vendor/owlcarousel/owl.theme.default.css', array(), '2.3.4', 'all' );
		
		// Fonts
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/vendor/fontawesome/all.css', array(), '5.14.0', 'all' );
	
		// App & fonts
		wp_enqueue_style( 'googlefonts', '//fonts.googleapis.com/css2?family=Gaegu:wght@300;400;700&display=swap&family=Mansalva&display=swap&family=Merienda+One&display=swap', array(), null, 'all' );
		wp_enqueue_style( 'bohochic-css', get_template_directory_uri() . '/assets/css/main.min.css', array(), '1.0.0', 'all' );
	
		# --- enqueue scripts ---
		// custom script
		wp_enqueue_script( 'popperjs', get_template_directory_uri() . '/assets/js/vendor/popper.js', array('jquery'), '1.16.0', true );
		wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/assets/js/vendor/bootstrap.js', array('jquery'), '4.5.2', true );
		wp_enqueue_script( 'owlcarouseljs', get_template_directory_uri() . '/assets/js/vendor/owlcarousel/owl.carousel.js', array('jquery'), '2.3.4', true );
		wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
	
	}
endif;