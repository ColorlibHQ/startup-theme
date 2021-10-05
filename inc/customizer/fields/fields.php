<?php 
/**
 * @Packge     : Startup
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'startup_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'startup' ),
        'description' => esc_html__( 'Select the theme color.', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_general_section',
        'default'     => '#131313',
    )
);

// Header button label
Epsilon_Customizer::add_field(
    'startup_header_btn_text',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button Text', 'startup' ),
        'section'     => 'startup_header_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => esc_html__( 'Let’s Talk', 'startup' ),
    )
);

// Header button url
Epsilon_Customizer::add_field(
    'startup_header_btn_url',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Top Button URL', 'startup' ),
        'section'     => 'startup_header_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

// Header call button bg color
Epsilon_Customizer::add_field(
    'startup_book_btn_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Color', 'startup' ),
        'description' => esc_html__( 'Select the color.', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#131313',
    )
);

// Header book button hover bg color
Epsilon_Customizer::add_field(
    'startup_book_btn_hvr_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header Button Hover Bg Color', 'startup' ),
        'description' => esc_html__( 'Select the color.', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#131313',
    )
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'startup' ),
        'section'     => 'startup_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'startup_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'startup' ),
        'description' => esc_html__( 'Select the header background color.', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'startup_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#131313',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'startup_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#808080',
    )
);

// Dropdown menu color field
Epsilon_Customizer::add_field(
    'startup_dropdown_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#131313',
    )
);

// Dropdown menu hover color field
Epsilon_Customizer::add_field(
    'startup_dropdown_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_header_section',
        'default'     => '#808080',
    )
);


// Footer menu section
Epsilon_Customizer::add_field(
    'startup_footer_menu_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Menu Section', 'startup' ),
        'section'     => 'startup_footer_menu_options_panel',

    )
);

// Footer menu Show/Hide
Epsilon_Customizer::add_field(
    'startup_footer_menu_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer Menu Show/Hide', 'startup' ),
        'section'     => 'startup_footer_menu_options_panel',
        'default'     => true,
    )
);

// Footer menu links
Epsilon_Customizer::add_field(
	'startup_footer_menus',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'startup_footer_menu_options_panel',
		'label'        => esc_html__( 'Footer Menus', 'startup' ),
        'button_label' => esc_html__( 'Add new item', 'startup' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'single_menu_item',
		),
		'fields'       => array(
			'single_menu_item'      => array(
				'label'             => esc_html__( 'Menu Title', 'startup' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Home',
			),		
			'single_menu_url' => array(
				'label'             => esc_html__( 'Menu URL', 'startup' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),	
		),
	)
);



// Social Profile section
Epsilon_Customizer::add_field(
    'footer_social_profile_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'startup' ),
        'section'     => 'startup_social_section',

    )
);

// Social Profiles Show/Hide
Epsilon_Customizer::add_field(
    'startup_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'startup' ),
        'section'     => 'startup_social_section',
        'default'     => true,
    )
);

// Footer Social Profile links
Epsilon_Customizer::add_field(
	'startup_social_profiles',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'startup_social_section',
		'label'        => esc_html__( 'Social Profile Links', 'startup' ),
        'button_label' => esc_html__( 'Add new social link', 'startup' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'startup' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Google Plus', 'startup' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-google-plus',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'startup' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'startup' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'startup' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Facebook',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'startup' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'startup' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-facebook',
			),
			
		),
	)
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'startup_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'startup' ),
        'description' => esc_html__( 'Set post excerpt length.', 'startup' ),
        'section'     => 'startup_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'startup_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'startup' ),
        'section'     => 'startup_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'startup_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'startup' ),
        'section'     => 'startup_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'startup_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'startup' ),
        'section'     => 'startup_blog_section',
        'default'     => true
    )
);
 

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Section', 'startup' ),
        'section'     => 'startup_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'startup_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'startup' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'startup' ),
        'section'     => 'startup_footer_section',
        'default'     => true,
    )
);

// Footer big title
$lets_talk_url = '';
$footer_big_text = sprintf( __( 'Do you have any Project? %s Let’s Talk %s', 'startup' ), '<a href="' . esc_url( $lets_talk_url ) . '">', '</a>' );
Epsilon_Customizer::add_field(
    'startup_footer_big_text',
    array(
        'type'              => 'epsilon-text-editor',
        'label'             => esc_html__( 'Footer big title', 'startup' ),
        'section'           => 'startup_footer_section',
        'default' => wp_kses_post( $footer_big_text ),
    )
);

// Footer short text field
Epsilon_Customizer::add_field(
    'startup_footer_text',
    array(
        'type'              => 'textarea',
        'label'             => esc_html__( 'Footer short text', 'startup' ),
        'section'           => 'startup_footer_section',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

 
/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'startup_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'startup' ),
        'section'           => 'startup_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'startup_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'startup' ),
        'section'           => 'startup_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'startup_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'startup_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'startup_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_fof_section',
        'default'     => '#fff',
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'startup_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'startup' ),
        'section'     => 'startup_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'startup' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'startup_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'startup' ),
        'section'     => 'startup_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget bg color field
Epsilon_Customizer::add_field(
    'startup_footer_widget_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Bg Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_footer_section',
        'default'     => '#1f1b1b',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'startup_footer_widget_heading_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Heading Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'startup_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_footer_section',
        'default'     => '#a3a3a3',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'startup_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_footer_section',
        'default'     => '#9e9e9e',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'startup_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'startup' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'startup_footer_section',
        'default'     => '#ffffff',
    )
);

