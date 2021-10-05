<?php 
/**
 * @Packge     : Startup
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'startup_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'startup' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'startup_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Footer Menu Section
     */
    array(
        'id'   => 'startup_footer_menu_options_panel',
        'args' => array(
            'title'    => esc_html__( 'Footer Menus', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'startup_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 3,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'startup_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'startup_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'startup_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'startup_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 7,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'startup_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 8,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'startup_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'startup' ),
            'panel'    => 'startup_theme_options_panel',
            'priority' => 9,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>