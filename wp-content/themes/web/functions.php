<?php
//resgister menu_top
    function register_my_menu() {
        register_nav_menu('menu_top',__('menu_top' ));
        register_nav_menu('menu_left',__('menu_left' ));
    }
    add_action('init','register_my_menu');

    function themeslug_theme_customizer( $wp_customize ) {
        $wp_customize->add_section( 'themeslug_logo_section' , array(
            'title'       => __( 'Logo', 'themeslug' ),
            'priority'    => 30,
            'description' => 'Upload a logo to replace the default site name and description in the header',
        ) );
        $wp_customize->add_setting( 'themeslug_logo' );

        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
            'label'    => __( 'Logo', 'themeslug' ),
            'section'  => 'themeslug_logo_section',
            'settings' => 'themeslug_logo',
        ) ) );
    }
    add_action( 'customize_register', 'themeslug_theme_customizer' );

    add_theme_support( 'post-thumbnails' );