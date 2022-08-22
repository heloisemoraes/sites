<?php

$sidebar = array(
	array(
		'name'        => 'E-mail',
		'description' => 'Link',
		'hasTitle'    => FALSE
	),
		array(
		'name'        => 'Telefone',
		'description' => 'Imagem',
		'hasTitle'    => TRUE
	),

	array(
		'name'        => 'Endereço',
		'description' => 'Itens da lateral direita',
		'hasTitle'    => TRUE
	),

	array(
		'name'        => 'Pagínas',
		'description' => 'Itens da lateral direita',
		'hasTitle'    => TRUE
	),

	array(
		'name'        => 'Contato',
		'description' => 'Itens da lateral direita',
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



/* --------------------------------------------------------------------
	OUTROS ARQUIVOS EXTERNOS
 -------------------------------------------------------------------- */

//Funções do wordpress
require_once dirname(__FILE__).'/includes/panel.php';

//Mostra os ultimos videos do youtube
require_once dirname(__FILE__).'/includes/youtube.php';

//Cookies de tipo visualização
require_once dirname(__FILE__).'/includes/cookies.php';

