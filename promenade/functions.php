<?php

//add_filter('show_admin_bar', '__return_false');

define('ADMCSS', get_template_directory_uri().'/css/');

define('ADMJS', get_template_directory_uri().'/js/');

//Add thumbnail, automatic feed links and title tag support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
//add_theme_support( "title-tag" );
add_theme_support( 'html5', array( 'search-form' ) );





function template_image() { // Função que retorna endereço da pasta de imagens do tema, para shortcode
     return get_bloginfo('template_url').'/imagens/';
}
function blogurl() { // Função que retorna endereço do site, para shortcode
     return get_bloginfo('url').'/';
}
add_filter('widget_text', 'do_shortcode'); // habilita shortcode nos widgets de texto
add_shortcode('TemplateImage', 'template_image'); // cria o shortcode TemplateImage que retorna o caminho da pasta de imagens do tema
add_shortcode('BlogURL', 'blogurl'); // cria o shortcode TemplateImage que retorna o endereço do site




function script_admin(){
	wp_enqueue_media();
	wp_enqueue_script('jquery');
	//wp_deregister_script('jquery');
	//wp_register_script('jquery','http://code.jquery.com/jquery.js');
}
add_action('admin_enqueue_scripts', 'script_admin');

//Add content width (desktop default)
if ( ! isset( $content_width ) ) {
	$content_width = 768;
}


//Theme Style and script

if(!function_exists('themeum_style')):

    function themeum_style(){

    	global $themeum;

       
		wp_enqueue_style('bootstrap-min',ADMCSS.'bootstrap.min.css');
		wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
		wp_enqueue_style('Source-Sans-Pro','https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700');
		wp_enqueue_style('Source-Oxygen','https://fonts.googleapis.com/css?family=Oxygen:400,300,700');
		wp_enqueue_style('theme-style',get_stylesheet_uri());
		//wp_enqueue_style('jquery-ui-accordion-css','//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
       
		wp_deregister_script('jquery');
	    wp_register_script('jquery','http://code.jquery.com/jquery-2.0.0.js');
		wp_enqueue_script('jquery_migrate','http://code.jquery.com/jquery-migrate-1.2.1.min.js');
		//wp_enqueue_script('jquery-ui-accordion');		
		//wp_enqueue_script('jquery-ui-js','//code.jquery.com/ui/1.11.4/jquery-ui.js');	
		wp_enqueue_script('bootstrap',ADMJS.'bootstrap.min.js',array(),false,true);
		wp_enqueue_script('cycle2',ADMJS.'jquery.cycle.all.js',array(),false,true);

		/*wp_enqueue_script('youtube-playlist-player-carousel', plugins_url().'/youtube-playlist-player/jcarousel/jquery.jcarousel.min.js');
		wp_enqueue_script('youtube-playlist-player-ytpp-main', plugins_url().'/youtube-playlist-player/js/ytpp-main.js');
		*/
		
   		 // add JS for comment threading support
    	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	    }

    add_action('wp_enqueue_scripts','themeum_style');

endif;

$level = 'editor';

if ( ! isset( $level ) ) {
	
if ( current_user_can( $level ) ):

function remove_menus(){
  remove_menu_page( 'options-general.php' ); //configurações
}
add_action( 'admin_menu', 'remove_menus' );

endif;

}

/*
// Register sidebar
add_action("widgets_init", "theme_register_sidebar");
function theme_register_sidebar() {
	if ( function_exists('register_sidebar') ) {

		 register_sidebar( array(
				'name' => __( 'TV CRECI', 'tvcreci' ),
				'id' => 'tvcreci',
				'description' => '',
				'before_widget' => false,
				'after_widget'  => false,
				'before_title'  => false,
				'after_title'   => false,
			) );
			
	}
}
*/
// links_uteis_menu

register_nav_menu( 'menu-principal', 'Menu Principal' );

class menu_principal extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    /**
     * At the start of each element, output a <li> and <a> tag structure.
     * 
     * Note: Menu objects include url and title properties, so we will use those.
     */
	
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = esc_attr( $class_names );
		
        $output .= sprintf( "\n<li class='padding0 " . $classe_menu . $class_names . " '><a href='%s'%s><span>%s</span></a></li>\n",
            $item->url,
            ( $item->object_id === get_the_ID() ) ? ' class="current"' : '',
            $item->title
        );
    
	}
	
}





// Bootstrap_Walker_Nav_Menu setup

add_action( 'after_setup_theme', 'bootstrap_setup' );
 
if ( ! function_exists( 'bootstrap_setup' ) ):
 
	function bootstrap_setup(){
 
		add_action( 'init', 'register_menu' );
			
		function register_menu(){
			register_nav_menu( 'menu-mobile', 'Menu Mobile' ); 
			register_nav_menu( 'menu-novo', 'Menu Novo' );
		}
 
		class Bootstrap_Walker_Nav_Menu extends Walker_Nav_Menu {
 
			
			function start_lvl( &$output, $depth = 0, $args = array() ) {
 
				$indent = str_repeat( "\t", $depth );
				$output	   .= "\n$indent<ul class=\"dropdown-menu\">\n";
				
			}
 
			function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
				
				if (!is_object($args)) {
					return; // menu has not been configured
				}

				$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
				$li_attributes = '';
				$class_names = $value = '';
 
				$classes = empty( $item->classes ) ? array() : (array) $item->classes;
				$classes[] = ($args->has_children) ? 'dropdown' : '';
				$classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
				$classes[] = 'menu-item-' . $item->ID;
				
				if($depth >= 1){
					$classes[]='menu-hover';
				}
				
				if($depth < 1){
					$classes[]='menu-hover-nivel1';
				}
 
 
				$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
				$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
				$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
				$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
				
 
				$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';
 
				$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
				$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
				$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
				$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
				$attributes .= ($args->has_children) 	    ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';
 
				$item_output = $args->before;
				$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
				$item_output .= ($args->has_children) ? ' <b class="caret"></b></a>' : '</a>';
				$item_output .= $args->after;
 
				$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
			}
 
			function display_element( $element, &$children_elements, $max_depth, $depth=0, $args, &$output ) {
				
				if ( !$element )
					return;
				
				$id_field = $this->db_fields['id'];
 
				//display this element
				if ( is_array( $args[0] ) ) 
					$args[0]['has_children'] = ! empty( $children_elements[$element->$id_field] );
				else if ( is_object( $args[0] ) ) 
					$args[0]->has_children = ! empty( $children_elements[$element->$id_field] ); 
				$cb_args = array_merge( array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'start_el'), $cb_args);
 
				$id = $element->$id_field;
 
				// descend only when the depth is right and there are childrens for this element
				if ( ($max_depth == 0 || $max_depth > $depth+1 ) && isset( $children_elements[$id]) ) {
 
							
						
					
					foreach( $children_elements[ $id ] as $child ){
 
						if ( !isset($newlevel) ) {
							$newlevel = true;
							//start the child delimiter
							$cb_args = array_merge( array(&$output, $depth), $args);
							call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
						}
				

						
						$this->display_element( $child, $children_elements, $max_depth, $depth + 1, $args, $output );
					}
						unset( $children_elements[ $id ] );
				}
 
				if ( isset($newlevel) && $newlevel ){
					//end the child delimiter
					$cb_args = array_merge( array(&$output, $depth), $args);
					call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
				}
				
 
				//end this element
				$cb_args = array_merge( array(&$output, $element, $depth), $args);
				call_user_func_array(array(&$this, 'end_el'), $cb_args);
			}
			
			
		}
 	}


endif;


include_once TEMPLATEPATH . '/componentes/WP_Img_And_Link.php';
include_once TEMPLATEPATH . '/componentes/Texto_Simples.php';

/*
add_post_meta( 68, 'link_do_botao', '47' );
delete_post_meta( 68, 'Link do botão', '47' );
*/


/*delete_post_meta( 68, 'Edicao', '47' );*/

function add_theme_caps() {
    $role = get_role( 'editor' );
    $role->add_cap( 'manage_options' ); 
}
add_action( 'admin_init', 'add_theme_caps');

/*
function getInfo($info='apelido'){
	$dados = get_option( 'dadosimobsc' );
	
	if( $info == 'apelido' ){ return $dados['apelido']; }
	else if( $info == 'codigo' ){ return $dados['codigo']; }
	
}
*/









$theme_metaboxes = array(
   
   /*"edicao" => array (
        "name"			=>	"edicao",
        "default"		=>	"",
        "label"			=>	__('Edição da revista', 'mytheme'),
        "type"			=>	"text",
		"placeholder"	=>	"Ed. 126 - Jan / Fev - 2016",
        "desc"			=>	__('Informe a edição da revista.', 'mytheme'),
		"post"			=>	"true",
		"page"			=>	"true"
    ),*/
	
   "categorias" => array (
        "name"			=>	"categorias",
        "default"		=>	"",
        "label"			=>	__('Categorias', 'mytheme'),
        "type"			=>	"text",
		"placeholder"	=>	"Notícias,Atualidades,Mercado",
        "desc"			=>	__('Informe as categorias para exibir na página.', 'mytheme'),
		"post"			=>	"",
		"page"			=>	"true"
    ),	
	
   "posts_por_pagina" => array (
        "name"			=>	"posts_por_pagina",
        "default"		=>	"",
        "label"			=>	__('Posts por página', 'mytheme'),
        "type"			=>	"number",
		"placeholder"	=>	"8",
        "desc"			=>	__('Informe a quantidade de post para exibir na página.', 'mytheme'),
		"post"			=>	"",
		"page"			=>	"true"
    )
	
);

function info_post() {
	global $post, $theme_metaboxes;
	foreach ($theme_metaboxes as $theme_metabox) {
		if($theme_metabox['post'] == true){
			$theme_metaboxvalue = get_post_meta($post->ID,$theme_metabox["name"],true);
			if ($theme_metaboxvalue == "" || !isset($theme_metaboxvalue)) {
					$theme_metaboxvalue = $theme_metabox['default'];
			}
			echo "\t".'<p>';
			echo "\t\t".'<label for="'.$theme_metabox['name'].'" style="font-weight:bold; ">'.$theme_metabox['label'].':</label>'."\n";
			echo "\t\t".'<input placeholder="'.$theme_metabox['placeholder'].'" type="'.$theme_metabox['type'].'" value="'.$theme_metaboxvalue.'" name="'.$theme_metabox["name"].'" id="'.$theme_metabox['name'].'"/><br/>'."\n";
			echo "\t\t".$theme_metabox['desc'].'</p>'."\n";
		}
	}
}

function info_page() {
	global $post, $theme_metaboxes;
	foreach ($theme_metaboxes as $theme_metabox) {
		if($theme_metabox['page'] == true){
			$theme_metaboxvalue = get_post_meta($post->ID,$theme_metabox["name"],true);
			if ($theme_metaboxvalue == "" || !isset($theme_metaboxvalue)) {
					$theme_metaboxvalue = $theme_metabox['default'];
			}
			echo "\t".'<p>';
			echo "\t\t".'<label for="'.$theme_metabox['name'].'" style="font-weight:bold; display: block; width: 100%;">'.$theme_metabox['label'].':</label>'."\n";
			echo "\t\t".'<input placeholder="'.$theme_metabox['placeholder'].'" type="'.$theme_metabox['type'].'" style="display: block; width: 100%; padding: 7px; margin-top: 6px; border-radius: 6px;" value="'.$theme_metaboxvalue.'" name="'.$theme_metabox["name"].'" id="'.$theme_metabox['name'].'"/>'."\n";
			echo "\t\t".$theme_metabox['desc'].'</p>'."\n";
		}
	}
}

function custom_fields_box() {
	if ( function_exists('add_meta_box') ) {
			add_meta_box('theme-settings',__('Informações Adicionais', 'mytheme'),'info_post','post','normal','high');
			add_meta_box('theme-settings',__('Informações Adicionais', 'mytheme'),'info_page','page','side','high');
	}
}
add_action('admin_menu', 'custom_fields_box');

function custom_fields_insert($pID) {
    global $theme_metaboxes;
    foreach ($theme_metaboxes as $theme_metabox) {
        $var = $theme_metabox["name"];
        if (isset($_POST[$var])) {
            if( get_post_meta( $pID, $theme_metabox["name"] ) == "" )
                add_post_meta($pID, $theme_metabox["name"], $_POST[$var], true );
            elseif($_POST[$var] != get_post_meta($pID, $theme_metabox["name"], true))
                update_post_meta($pID, $theme_metabox["name"], $_POST[$var]);
            elseif($_POST[$var] == "")
                delete_post_meta($pID, $theme_metabox["name"], get_post_meta($pID, $theme_metabox["name"], true));
        }
    }
}
add_action('wp_insert_post', 'custom_fields_insert');

function post_info($id_page) {
    global $theme_metaboxes;
    foreach ($theme_metaboxes as $theme_metabox) {
		if($theme_metabox["name"] == "categorias"){
			
			$name_cats = get_post_meta($id_page, $theme_metabox["name"], true);
			$name_cats = explode(",", $name_cats);
			$ids_cats = "";
			
			if( ! empty ($name_cats) ){
				foreach($name_cats as $name_cat){
					
					if($name_cat == "todas"){
						$ids_cats = " ";
					}else{
						if( ! $ids_cats ){
							$ids_cats = get_cat_ID( $name_cat );
						}else{
							$ids_cats .= "," . get_cat_ID( $name_cat );
						}
					}
				}
			}
			
			$post_info[$theme_metabox["name"]] = $ids_cats;
			
		}else{
			$post_info[$theme_metabox["name"]] = get_post_meta($id_page, $theme_metabox["name"], true);
		}
	}
	
	$post_info = (object)$post_info;
	return $post_info;
}

function resumo($conteudo,$qtd_caracteres){
	if(strlen($conteudo) > $qtd_caracteres){
		$conteudo = strip_tags($conteudo);
		$conteudo = preg_replace("/\[(.*?)\]/i", '', $conteudo);
		$conteudo = mb_substr($conteudo, 0, $qtd_caracteres) . "...";
		//$conteudo = strip_shortcodes(string $conteudo);
	}else{
		//$conteudo = do_shortcode($conteudo);
		$conteudo = preg_replace("/\[(.*?)\]/i", '', $conteudo);
	}
	return $conteudo;
}


function postagens($argumentos,$resumo_titulo,$resumo_conteudo,$titulo,$cond1,$item_max,$layout,$paginacao){
	

	if(empty ($layout) ){
		$layout = "layout1";
	}
	
	$cont = 0;
	query_posts($argumentos);
	$postagem = get_posts($argumentos);
	
	if( empty ($item_max) ){
		$item_max = 999999999999999999999999999999;
	}
	
	foreach($postagem as $p):
	
	$ed = post_info($p->ID)->edicao;
	$categoria = get_the_category($p->ID);
	/*$id_imagem = get_post_thumbnail_id($p->ID);
	$thumb = wp_get_attachment_thumb_url( $id_imagem , 'medium' );
	$imagem = wp_get_attachment_url( $id_imagem );*/
	$miniatura = get_the_post_thumbnail( $p->ID , 'tamanho-padrao-miniatura' , array( 'style' => 'width: 100%; height: auto;' ) );
	$miniatura_veja_mais = get_the_post_thumbnail( $p->ID , 'tamanho-padrao-veja-mais' , array( 'style' => 'width: 100%; height: auto;' ) );
	
	if($categoria[0]->slug == "mercado-imobiliario-site"){
		$categoria[0]->slug = "mercado-imobiliario";
	}
	
	if( ! empty ($resumo_titulo) ){
		$titulo_post = resumo($p->post_title,$resumo_titulo);
	}else{
		$titulo_post = $p->post_title;
	}
	if( ! empty ($resumo_conteudo) ){
		$conteudo = resumo($p->post_content,$resumo_conteudo);
	}else{
		$conteudo = $conteudo = do_shortcode($p->post_content);
	}
	

	
	if( $layout == "revista" ){
		if($cont < $item_max && $cond1 == $ed){
			$cont++; 
			
			$ordenacao = array(0=>0,1=>12,2=>5,3=>4,4=>6,5=>21,6=>7,7=>10,8=>11,9=>8,10=>14,11=>9);
			
			$cat_id = $categoria[0]->term_id;
			
			foreach($ordenacao as $posicao => $item){
				if( $cat_id == $item ){
					$ordem = $posicao;
				}
			}
			
			//echo "ordem: " . $ordem . "<br>id: " . $categoria[0]->term_id . "<br><br><br>";
			
			
			$revista[$ordem] = '
								<div class="padding_bottom_10">
									<a href="' . get_permalink($p->ID) . '" style="text-decoration: none; color: inherit;">
										<h4><b>' . $categoria[0]->cat_name . '</b></h4>
											<h6><b style="text-transform: uppercase; display: block;">' . $titulo_post . '</b></h6>
										<p>' . $conteudo . '</p>
									</a>
								</div>
								';
		}
	}
	
	
	else if( ! empty ($cond1) ){
		if($cont < $item_max && $cond1 == $ed){
			$cont++; 
	?>
			<div class="padding_bottom_10">
				<a href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit;">
					<?php
						if( ! empty ($titulo) ){
							echo "<b style='text-transform: uppercase;'>" . $titulo . "</b>";
						}
						else if( ! empty ($titulo_post) ){
							echo "<b style='text-transform: uppercase;'>" . $titulo_post . "</b>";
						}
					?>
					<?php echo $conteudo ?>
				</a>
			</div>
	<?php
		}
	}
	
	else if($layout == "layout1"){
		if($cont < $item_max){
			$cont++; 
	?>
			<div class="padding_bottom_10">
				<a href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit;">
					<?php
						if( ! empty ($titulo) ){
							echo "<b style='text-transform: uppercase;'><i class='glyphicon glyphicon-triangle-right icone seta_posts azul'></i>" . $titulo . "</b>";
						}
						else if( ! empty ($titulo_post) ){
							echo "<b style='text-transform: uppercase;'><i class='glyphicon glyphicon-triangle-right icone seta_posts azul'></i>" . $titulo_post . "</b>";
						}
					?>
					<?php echo $conteudo ?>
				</a>
			</div>
	<?php
		}
	}
	
	else if($layout == "layout2"){
		if($cont < $item_max){
			$cont++; 
	?>
		<div class="padding_bottom_10">
			<a href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit;">
				<i class="glyphicon glyphicon-triangle-right icone seta_posts azul"></i><?php echo $titulo_post; ?>
			</a>
		</div>
	<?php
		}
	}
	
	else if($layout == "layout2-sem-vermais"){
		if($cont < $item_max){
			$cont++; 
	?>
		<div class="padding_bottom_10">
			<a href="<?php echo home_url('/') . $categoria[0]->slug . "/" ?>" style="text-decoration: none; color: inherit;">
				<i class="glyphicon glyphicon-triangle-right icone seta_posts azul"></i><?php echo $titulo_post; ?>
			</a>
		</div>
	<?php
		}
	}
	
	else if($layout == "layout3"){
		if($cont < $item_max){
			$cont++; 
	?>
		<div class="padding_bottom_10">
			<a href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit;">
				<i class="glyphicon glyphicon-triangle-right icone seta_posts amarela"></i><?php echo $titulo_post; ?>
			</a>
		</div>
	<?php
		}
	}
							
	
	else if($layout == "layout4"){
		if($cont < $item_max){
			$cont++; 
	?>		
			
		<?php if( ! empty ($resumo_conteudo) ): ?>
		<a href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit;">
		<?php endif; ?>	
		<div class="col-md-6" style="margin-bottom: 15px; min-height: 130px;">

			
				<?php
					if( ! empty ($titulo) ){
						echo "<b style='text-transform: uppercase; display: block;'><i class='glyphicon glyphicon-triangle-right icone seta_posts azul'></i>" . $titulo . "</b>";
					}
					else if( ! empty ($titulo_post) ){
						echo "<h4 style='color: #B1001C;'>" . $titulo_post . "</h4>";
					}
				?>
				<p>
				<?php echo $conteudo ?>
				</p>
				
			<?php if( ! empty ($resumo_conteudo) ): ?>	
			<div class="ver_todos_area">
				<p>Ler mais</p> 
			</div>
			<?php endif; ?>
			
		</div>
		<?php if( ! empty ($resumo_conteudo) ): ?>	
		</a>
		<?php endif; ?>
	<?php
		}
	}
	
	else if($layout == "layout5"){
		if($cont < $item_max){
			$cont++; 
	?>
		
		<div class="col-xs-12 padding_bottom_10 padding0">
			<a href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit; display: block;">
				<div class="col-sm-4 padding0">
					<?php echo $miniatura; ?>
				</div>
				
				<div class="col-sm-8">
					<h4 style="color: #B1001C;"><?php echo $titulo_post; ?></h4>
					<p>
					<?php echo $conteudo; ?>
					</p>
					<div class="ver_todos_area">
						<p>Ler mais</p> 
					</div>
				</div>
			</a>			
		</div>
		
	<?php
		}
	}
	
	else if($layout == "layout6"){
		if($cont < $item_max){
			$cont++; 
	?>
	
		<a class="slide_item" href="<?php echo get_permalink($p->ID) ?>" style="text-decoration: none; color: inherit; display: block;">
			
			<div class="col-xs-12 padding_bottom_10 padding0">
				<div class="col-xs-12">
					<?php echo $miniatura_veja_mais; ?>
				</div>
				<div class="col-xs-12">
					<h4 style="color: #B1001C;"><?php echo $titulo_post; ?></h4>
					<p>
					<?php echo $conteudo; ?>
					</p>
				</div>
				<div class="col-xs-12">
					<div class="ver_todos_area">
						<p>Ler mais</p> 
					</div>
				</div>
			</div>
			
		</a>
		
	<?php
		}
	}
	
	
endforeach;

if($revista){
	ksort($revista);
	foreach ( $revista as $rv){
		echo $rv;
	}
}

if($paginacao == "true"){
	
	wp_pagenavi($postagem);

}

wp_reset_query();

}




add_action( 'init', 'create_posttype_veja_tambem' );
	function create_posttype_veja_tambem() {
		register_post_type( 'veja_tambem',
		array(
			'labels' => array(
			'name' => __( 'Veja Também' ),
			'singular_name' => __( 'Veja Também' )
		),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'veja-tambem'),
			'supports' => array('title','editor','comments','thumbnail','excerpt')
		)
	);
}

add_image_size( 'tamanho-padrao-miniatura', 700, 500, array( 'center' , 'center' ) );

add_image_size( 'tamanho-padrao-veja-mais', 900, 500, array( 'center' , 'center' ) );

add_image_size( 'tamanho-padrao-single-post', 2000, 500, array( 'center' , 'center' ) );



/* redirecionamentos */

function site(){

	$dominio = $_SERVER['HTTP_HOST'];
	$url = (object) array(
		'home' => "http://".$dominio.'/',
		'url_atual' =>  'http://' . $dominio . $_SERVER['REQUEST_URI'],
	);
	
	return $url ;
}

function redirecionamentos(){
	
	if ( site()->url_atual == site()->home . "categorias/" || site()->url_atual == site()->home . "categorias" ){
		Header( "HTTP/1.1 301 Moved Permanently" );
		Header( "Location: " . site()->home );
	}
	else if ( site()->url_atual == site()->home . "categorias/noticias/" || site()->url_atual == site()->home . "categorias/noticias" ){
		
		Header( "HTTP/1.1 301 Moved Permanently" );
		Header( "Location: " . site()->home . "noticias/" );
		
	}
	
}

redirecionamentos();


function UrlAtual(){
 $dominio= $_SERVER['HTTP_HOST'];
 $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];
 return $url;
}
function home(){
	return $home_page = home_url('/');
}

	
?>