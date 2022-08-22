<?php

$sidebar = array(
	array(
		'name'        => 'Frase',
		'description' => 'Link',
		'hasTitle'    => FALSE
	),
		array(
		'name'        => 'Telefone',
		'description' => 'Imagem',
		'hasTitle'    => TRUE
	),

	array(
		'name'        => 'Youtube',
		'description' => 'Itens da lateral direita',
		'hasTitle'    => TRUE
	),

	array(
		'name'        => 'Endereco',
		'description' => 'Final',
		'hasTitle'    => TRUE
	),
	array(
		'name'        => 'Calendario',
		'description' => 'Final',
		'hasTitle'    => TRUE
	),
	
);


//Funções extras para o tema
require_once dirname(__FILE__).'/includes/functions.php';

//CROP de imagens
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'news-thumb', 401, 301, array( 'center', 'top' ) );
	add_image_size( 'look-thumb', 235, 355, array( 'center', 'top' ) );
}



// menu principal
function menu_navegacao() { 
	register_nav_menu('header-menu', 'main_menu');
}
add_action('init', 'menu_navegacao');

// submenu
function submenu(){
	add_submenu_page(
		'main_menu',
		'submenu_options',
		'submenu_options',
		'manage_options',
		'submenu_veiculos'
	);
}
add_action('menu_navegacao', 'submenu');

/* --------------------------------------------------------------------
	OUTROS ARQUIVOS EXTERNOS
 -------------------------------------------------------------------- */

//Funções do wordpress
require_once dirname(__FILE__).'/includes/panel.php';

//Mostra os ultimos videos do youtube
require_once dirname(__FILE__).'/includes/youtube.php';

//Cookies de tipo visualização
require_once dirname(__FILE__).'/includes/cookies.php';

