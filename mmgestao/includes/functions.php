<?php
/*
	Version: 1.4
	Author: Juliana Macêdo
	Author URI: http://www.julianamacedo.com.br
*/


/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	FUNCIONALIDADES
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */
# Habilita shortcode nos widgets de texto
add_filter('widget_text', 'do_shortcode'); 

# Suporte a featured image
add_theme_support( 'post-thumbnails' ); 

# Registrar sidebar
if ( isset($sidebar) && is_array($sidebar) && !empty($sidebar) && function_exists('register_sidebar') ){
	foreach ($sidebar as $v) {
	    register_sidebar(array(
			'name'          => $v['name'],
			'description'   => $v['description'],
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="'.( $v['hasTitle'] ? 'title' : 'none' ).'"><span class="lbl">',
			'after_title'   => '</span></h2>'
	    ));
	}
}

# Adiciona DIV como container do vídeo
add_filter( 'embed_oembed_html', 'custom_oembed_filter', 10, 4 ) ;
function custom_oembed_filter($html, $url, $attr, $post_ID) {
    $return = '<div class="video-container">'.$html.'</div>';
    return $return;
}



/* - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	FUNÇÕES AUXILIARES
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - */

/**
 * Função para centralizar a informação do AppID do facebook
 * @return string Facebook AppID
 */
function get_facebookAppid($id='543724305718452'){ return $id; }

/**
 * Função responsável por trazer a URL da imagem da página. 
 * @param  string $size Tamanho da imagem: "thumbnail" ou "medium"
 * @return string       URL da imagem
 */
function get_thumb($size = "medium"){
	global $wpdb, $post;
	$thumb = $wpdb->get_row("SELECT ID, post_title FROM {$wpdb->posts} WHERE post_parent = {$post->ID} AND post_mime_type LIKE 'image%' ORDER BY menu_order");
	if(!empty($thumb)){
		$image = image_downsize($thumb->ID, $size);
		return "{$image[0]}";
	}
	else {
		return get_bloginfo('template_directory')."/imagens/gravatar_default_300.jpg";
	}
}

/**
 * Função permite uso de HTML no título do widget
 * @param  string $titulo Texto do título com chaves
 * @return string         Texto do título com HTML
 */
function html_widget_title($titulo){
    //converte chaves em sinais de maior/menor de tags HTML
    $titulo = str_replace('[', '<', $titulo);
    $titulo = str_replace(']', '>', $titulo);

    //Tags permitidas, as demais não serão traduzidas
    $tags_permitidas = '<a><br><span><img>';

    //Remove as tags, menos as permitidas
    $titulo = strip_tags($titulo, $tags_permitidas);
    return $titulo;
}
add_filter('widget_title', 'html_widget_title');


/**
 * Função usar icones para categorias
 * @param  array 	$categories 	Categorias do post
 * @param  bolean 	$addTitle 		Adicionar o nome da categoria?
 * @param  bolean 	$showAll 		Mostrar todas as categorias selecionadas?
 * @param  bolean 	$showChildren 	Mostrar também as categorias filhas?
 * @return string         			HTML com ícone
 */
function getCategoryIcon($categories,$addTitle=TRUE,$showAll=FALSE,$showChildren=FALSE){

	$catIconsDir = array(
		'path'	=> get_stylesheet_directory().'/imagens/caticons/',
		'url'	=> get_template_directory_uri().'/imagens/caticons/'
	);

	$qtdCats = count($categories);
	$qtdLoop = 0;
	$html = '';

	foreach($categories as $category){ 
		$qtdLoop++; $html .= '';		

		if ($category->category_parent == 0 || $showChildren) {
			$catname = $category->slug;
			$filename = $catname.'.png';

			if(file_exists($catIconsDir['path'].$filename) || $showAll){

				$html .= ' <a title="Categoria: '.$category->name.'" href="'.get_bloginfo( 'url' ).'/category/'.$catname.'">';
					if(file_exists($catIconsDir['path'].$filename)){
						$html .= '<img src="'.$catIconsDir['url'].$filename.'" alt="Categoria: '.$category->name.'" /><br />';
					}
					if($addTitle || !file_exists($catIconsDir['path'].$filename)){$html .= '<span>'.$category->name.'</span>';}
				$html .= '</a> &nbsp; ';
					
				if(!$showAll){
					return $html;
					break;
				}
			}		
		}

		if($qtdCats == $qtdLoop && !$showAll){
			$catname = $categories[0]->slug;
			$filename = $catname.'.png';

			$html .= ' <a title="Categoria: '.$categories[0]->name.'" href="'.get_bloginfo( 'url' ).'/category/'.$catname.'">';
				$html .= '<span>'.$categories[0]->name.'</span>';
			$html .= '</a>  &nbsp; ';
				
			return $html;
			break;

		}
	}

	return $html;
}

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '[...]';
	} else {
		echo $excerpt;
	}
}

/**
 * Função para diminuir tamanho de títulos
 * Enviar por parametro o nº de caracteres
 * ex: the_title_lenght(30); 
 * 
 * @param int $maxchars Nº de caracteres
 * @return string Título reduzido
 */
function the_title_lenght($charlength) {
    $title = get_the_title();
    $charlength++;

	if ( mb_strlen( $title ) > $charlength ) {
		$subex = mb_substr( $title, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo '...';
	} else {
		echo $title;
	}
}

function is_last_post() {
  global $wp_query;
  return ( ($wp_query->current_post + 1) < $wp_query->post_count ) == 0 ? true : false;
}