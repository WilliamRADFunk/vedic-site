<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
						'categories-submenu' => __( 'Categories Sub-Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
	 'name'   => 'Sidebar 1',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));
	
function vedic_customize_register( $wp_customize ) {
	// add "Content Options" section
	$wp_customize->add_section( 'vedic_content_options_section' , array(
		'title'      => __( 'N-Somnium Options', 'vedic' ),
		'priority'   => 1,
	) );
	
	// add setting for page comment toggle checkbox
	$wp_customize->add_setting( 'vedic_page_comment_toggle', array( 
		'default' => 1 
	) );
	
	// add control for page comment toggle checkbox
	$wp_customize->add_control( 'vedic_page_comment_toggle', array(
		'label'     => __( 'Show comments on pages?', 'vedic' ),
		'section'   => 'vedic_content_options_section',
		'priority'  => 10,
		'type'      => 'checkbox'
	) );	
}
add_action( 'customize_register', 'vedic_customize_register' );

//Change header image background
$args = array(
	'default-image' => get_template_directory_uri() . '/images/bgd-header.gif',
	'uploads'       => true,
);
add_theme_support( 'custom-header', array(
		'header-text' => false
	) );

//Change page background
$args = array(
	'default-color' => 'ffffff',
);
add_theme_support( 'custom-background', $args );

/**
 * Widgetizing
 * Register our sidebars and widgetized areas.
 *
 */
function vedic_widgets_init() {
	
	register_sidebar( array(
			'name'          => 'Footer Copyright',
			'id'            => 'footer_copyright',
		) );		
}
add_action( 'widgets_init', 'vedic_widgets_init' );

	add_theme_support( 'post-thumbnails' ); 
?>
