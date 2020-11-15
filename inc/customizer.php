<?php
/**
 * Bohochic Theme Customizer
 *
 * @package bohochic
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function bohochic_customize_register( $wp_customize ) {

    // Bohochic setting panel
    $wp_customize->add_panel(
        'panel_bohochic_settings',
        array(
            'title'         => __('Bohochic settings', 'bohochic'),
            'description'   => __('This is the Bohochic theme customizer settings.', 'bohochic'),
            'priority'      => 10,
        )
    );

    // Slider section
    $wp_customize->add_section(
        'sec_slider',
        array(
            'title'             => __('Slider settings', 'bohochic'),
            'description'       => __('Change slider settings', 'bohochic'),
            'panel'             => 'panel_bohochic_settings'
        )
    );
        $num_silde = 3;
        for ( $i = 1; $i < ($num_silde + 1); $i++ ) :
            // Field 1 - Slider page number 1
            $wp_customize->add_setting(
                'set_slider_page' . $i,
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'absint'
                )
            );

            $wp_customize->add_control(
                'set_slider_page' . $i,
                array(
                    'label'             => __('Set slide ' . $i, 'bohochic'),
                    'description'       => __('Select your page for the slide ' . $i, 'bohochic'),
                    'section'           => 'sec_slider',
                    'type'              => 'dropdown-pages'
                )
            );

            // Field 2 - Slider button text number 1
            $wp_customize->add_setting(
                'set_slider_button_text' . $i,
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_text' . $i,
                array(
                    'label'             => __('Button text for slide ' . $i, 'bohochic'),
                    'description'       => __('Add your button text for the slide ' . $i, 'bohochic'),
                    'section'           => 'sec_slider',
                    'type'              => 'text'
                )
            );

            // Field 3 - Slider button url number 1
            $wp_customize->add_setting(
                'set_slider_button_url' . $i,
                array(
                    'type'                  => 'theme_mod',
                    'default'               => '',
                    'sanitize_callback'     => 'esc_url_raw'
                )
            );

            $wp_customize->add_control(
                'set_slider_button_url' . $i,
                array(
                    'label'             => __('Button url for slide ' . $i, 'bohochic'),
                    'description'       => __('Add your button url for the slide ' . $i, 'bohochic'),
                    'section'           => 'sec_slider',
                    'type'              => 'url'
                )
            );

        endfor;

    /**
     * ------------------------------------------------------------------------
     */
    // Homepage settings section
    $wp_customize->add_section(
        'sec_homepage',
        array(
            'title'             => __('Homepage products settings', 'bohochic'),
            'description'       => __('Homepage products and blog settings', 'bohochic'),
            'panel'             => 'panel_bohochic_settings'
        )
    );

        // Popular product max number and max column
        $wp_customize->add_setting(
            'set_popular_max_num',
            array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_popular_max_num',
            array(
                'label'             => __('Popular products max number', 'bohochic'),
                'description'       => __('Set popular products max number', 'bohochic'),
                'section'           => 'sec_homepage',
                'type'              => 'number'
            )
        );

        $wp_customize->add_setting(
            'set_popular_max_col',
            array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_popular_max_col',
            array(
                'label'             => __('Popular products max columns', 'bohochic'),
                'description'       => __('Set popular products max columns', 'bohochic'),
                'section'           => 'sec_homepage',
                'type'              => 'number'
            )
        );

        // New arrivals max number and max column
        $wp_customize->add_setting(
            'set_new_arrivals_max_num',
            array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_new_arrivals_max_num',
            array(
                'label'             => __('New arrivals max number', 'bohochic'),
                'description'       => __('Set new arrivals max number', 'bohochic'),
                'section'           => 'sec_homepage',
                'type'              => 'number'
            )
        );

        $wp_customize->add_setting(
            'set_new_arrivals_max_col',
            array(
                'type'                  => 'theme_mod',
                'default'               => '',
                'sanitize_callback'     => 'absint'
            )
        );

        $wp_customize->add_control(
            'set_new_arrivals_max_col',
            array(
                'label'             => __('New arrivals max columns', 'bohochic'),
                'description'       => __('Set new arrivals max columns', 'bohochic'),
                'section'           => 'sec_homepage',
                'type'              => 'number'
            )
        );


    /**
     * ------------------------------------------------------------------------
     */
    // Custom control dropdown category
    require get_template_directory() . '/inc/customizer-controls/dropdown-category.php';

    // Homepage product categories settings
    $wp_customize->add_section(
        'sec_homepage_product_categories',
        array(
            'title'             => __('Homepage product categories settings', 'bohochic'),
            'description'       => __('Homepage product categories settings', 'bohochic'),
            'panel'             => 'panel_bohochic_settings'
        )
    );

        $num_category = 3;
        for ( $i = 1; $i < ($num_category + 1); $i++ ) :
            // Category 1
            $wp_customize->add_setting(
                'set_category_' . $i,
                array(
                    'default'           => 0,
                    'sanitize_callback' => 'absint',
                )
            );

            $wp_customize->add_control(
                new Bohochic_Dropdown_Category_Control( $wp_customize,
                    'set_category_' . $i,
                    array(
                        'section'       => 'sec_homepage_product_categories',
                        'label'         => esc_html__( 'Category ' . $i, 'bohochic' ),
                        'description'   => esc_html__( 'Select the category ' . $i, 'bohochic' ),
                        'dropdown_args' => array(
                            'taxonomy' => 'product_cat',
                            //'show_count' => 0,
                        ),
                    )
                )
            );
        endfor;
          
          

}
add_action( 'customize_register', 'bohochic_customize_register' );