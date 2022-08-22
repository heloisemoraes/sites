<?php 

$fecharimg = '<img src="'.get_bloginfo('template_url').'/imagens/fechar.png" />';

if ( function_exists('register_sidebar') ){

    register_sidebar(array(
        'name'=>'Quadro de Servi&ccedil;os',
	'before_widget' => '<div id="quadrados" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="none">',
        'after_title' => '</h2>',
    ));
	

    register_sidebar(array(
        'name'=>'Aviso',
	'before_widget' => '<div id="aviso" class="widget %2$s"><div id="aviso2"><a class="fechar" href="#" onClick="javascript:some();return false;">'.$fecharimg.'</a>',
        'after_widget' => '</div></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));	
    
    register_sidebar(array(
        'name'=>'BuscaRapida',
	'before_widget' => '<div id="aviso" class="widget %2$s"><div id="aviso2"><a class="fechar" href="#" onClick="javascript:some();return false;">'.$fecharimg.'</a>',
        'after_widget' => '</div></div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ));	

	



}

function template_image() { // Fun��o que retorna endere�o da pasta de imagens do tema, para shortcode
     return get_bloginfo('template_url').'/imagens';
}
function blogurl() { // Fun��o que retorna endere�o do site, para shortcode
     return get_bloginfo('url').'';
}
add_filter('widget_text', 'do_shortcode'); // habilita shortcode nos widgets de texto
add_shortcode('TemplateImage', 'template_image'); // cria o shortcode TemplateImage que retorna o caminho da pasta de imagens do tema
add_shortcode('BlogURL', 'blogurl'); // cria o shortcode TemplateImage que retorna o endere�o do site

function apelido() { return 'zirtaeb'; }
function codigo_parceiro() { return '18252'; }
?>