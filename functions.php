<?php

//registrar los codigos css y bootstrap
function agregar_css_js(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), '5.2', true);
    
}
add_action('wp_enqueue_scripts','agregar_css_js');

//quitar el titulo de la pagina principal
function remove_home_page_title( $title, $id ) {
	if ( is_front_page() ){
		$home_id = get_option('page_on_front');
		if ( $home_id == $id ) return '';	
	}
	return $title;	
}

add_filter( 'the_title', 'remove_home_page_title', 10, 2 );

//añadir analiticas
function plz_analytics(){
	?>
		
	<?php
}

add_action( "wp_body_open","plz_analytics");

//Creacion de logo e imagenes destacadas dinamicas 

function plz_theme_supports(){
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo',
	array(
		"width" => 107,
		"height" => 50,
		"flex-width" => true,
		"flex-height" => true,
		"header-text" => 'site-title'
	) );
}

add_action( 'after_setup_theme','plz_theme_supports' );

//Creacion de menus
if (function_exists('register_nav_menus')){
	register_nav_menus (array('menu-principal' => 'Menú principal - cabecero y pie de página'));
}

//Creacion de clase para las anclas

function clase_menu_enlace ($atts,$item,$args){
	$class = 'nav-link text-muted px-3 ps-0';
	$atts['class'] = $class;
	return $atts;
}

add_filter( 'nav_menu_link_attributes','clase_menu_enlace',10,3 );

//Edición del footer

function plz_widget_footer() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'contacto',
			'name'          => __( 'Contacto' ),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
	register_sidebar(
		array(
			'id'            => 'form-footer',
			'name'          => __( 'Encabezado formulario' ),
			'before_widget' => '',
			'after_widget'  => '',
		)
	);
}

add_action( 'widgets_init', 'plz_widget_footer' );