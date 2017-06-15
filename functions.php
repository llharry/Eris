<?php

function register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_menus' );


if (function_exists('register_sidebar')) {

    register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'default_sidebar',
		'description'   => 'These widgets will show up in the side bar.',
		'before_widget' => '<div id="%1$s" class="widget sidebarWidget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
    register_sidebar(array(
		'name' => 'Homepage CTA Widget Area',
		'id'   => 'homepage_cta_widget_area',
		'description'   => 'These widgets will show up in the homepage cta bar.',
		'before_widget' => '<div id="%1$s" class="widget ctaWidget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
	register_sidebar(array(
		'name' => 'Footer Widget Area',
		'id'   => 'footer_widget_area',
		'description'   => 'These widgets will show up in the footer bar.',
		'before_widget' => '<div id="%1$s" class="widget footerWidget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));
    register_sidebar(array(
		'name' => 'Homepage Accolades Area',
		'id'   => 'homepage_accolades_area',
		'description'   => 'These widgets will show up in the accolades bar on the homepage.',
		'before_widget' => '<div id="%1$s" class="widget footerWidget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4>',
		'after_title'   => '</h4>'
	));

}
?>
