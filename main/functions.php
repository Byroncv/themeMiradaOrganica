<?php 
function web_files(){
	//el primer argumento va hacer un alias
	//el segundo la ubicacion del archivo
	wp_enqueue_script('main_js',get_template_directory_uri() . '/js/funcionalidad.js',array(),'1.0.0',true);
	wp_enqueue_style('web_main_styles', get_stylesheet_uri());
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
    wp_enqueue_style('font_awesome_styles',get_template_directory_uri() .'/fontawsome/css/all.min.css');
  
}
add_action('wp_enqueue_scripts', 'web_files');



function configuracion_tema(){
	register_nav_menu('headerMenuLocation', 'Menú principal');
	register_nav_menu('Footer1MenuLocation', 'Footer 1');
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'configuracion_tema');
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 160, 160);
function calendario(){
	// Se debe actualizar los enlaces permanentes que están en ajustes -> enlaces permanentes de WordPress. 
	register_post_type('calendario', 
		array(
			//Visibilidad en la plataforma
			'public' => true,
			'supports' => array('title', 'editor', 'excerpt'),
			// si el contenido se despliega en una plantilla tipo archive
			'has_archive' => true,
			//Empleado reescritura para que WP atienda a la nueva palabra eventos y muestre la información, de todos los eventos
			'rewrite' => array('slug'=>'calendario'),
			'menu_icon' => 'dashicons-admin-multisite',
			//Activar el conjunto de etiquetas que se van a mostrar en la aplicación de WordPress
			'labels' => array(
				'name' => 'calendario',
				'add_new_item' =>'agregar nombre' ,
				'add_new' =>'Agregar Cita' ,
				'edit_item' => 'Editar nombre',
				'all_items' => 'Todas las citas'

				
			),

  		
	));

}
add_action('init', 'calendario');

?>
