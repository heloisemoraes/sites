<?php


/* 
 *
 * Autor: Hugo Ferreira de Oliveira
 * site: agenciadc.net/hugo
 * widget class WP_Img_And_Link
 * version: 1.0
 *
 */

function WP_Img_And_Link_scripts(){
  wp_enqueue_script('WP_Img_And_Link_script', get_template_directory_uri() . '/componentes/WP_Img_And_Link_script.js');
  wp_enqueue_style('WP_Img_And_Link_style', get_template_directory_uri() . '/componentes/WP_Img_And_Link_css.css');
}
add_action('admin_enqueue_scripts', 'WP_Img_And_Link_scripts');


class WP_Img_And_Link extends WP_Widget {


	public function __construct() {
		$widget_ops = array('classname' => 'widget_Img_And_Link', 'description' => __('Inserir Tag de Imagens com Link.'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('Img_And_Link', __('Inserir Imagem'), $widget_ops, $control_ops);
	}

	public function widget( $args, $instance ) {

		$link = apply_filters( 'widget_title', empty( $instance['link'] ) ? '' : $instance['link'], $instance, $this->id_base );

		$src = apply_filters( 'widget_src', empty( $instance['src'] ) ? '' : $instance['src'], $instance );
		
		$titulo_attr = apply_filters( 'widget_titulo_attr', empty( $instance['titulo_attr'] ) ? '' : $instance['titulo_attr'], $instance );
		
		$target_attr = apply_filters( 'widget_target_attr', empty( $instance['target_attr'] ) ? '' : $instance['target_attr'], $instance );
		
		$largura_attr = apply_filters( 'widget_largura_attr', empty( $instance['largura_attr'] ) ? '' : $instance['largura_attr'], $instance );
		
		$altura_attr = apply_filters( 'widget_altura_attr', empty( $instance['altura_attr'] ) ? '' : $instance['altura_attr'], $instance );
		
		$classe_link = apply_filters( 'widget_classe_link', empty( $instance['classe_link'] ) ? '' : $instance['classe_link'], $instance );
		
		$classe_img = apply_filters( 'widget_classe_link', empty( $instance['classe_img'] ) ? '' : $instance['classe_img'], $instance );
		
		$link_ie = apply_filters( 'widget_classe_link', empty( $instance['link_ie'] ) ? '' : $instance['link_ie'], $instance );


 
		
		if( ! empty($titulo_attr) )		$titulo_img = "title='" . $titulo_attr . "'";
		if( ! empty($target_attr) )		$target_attr_link = "target='" . $target_attr . "'";
		if( ! empty($largura_attr) )	$largura_attr_img = "width='" . $largura_attr . "'";
		if( ! empty($altura_attr) )		$altura_attr_img = "height='" . $altura_attr . "'";
		if( ! empty($classe_link) )		$lista_classe_link = "class='" . $classe_link . "'";
		if( ! empty($classe_img) )		$lista_classe_img = "class='" . $classe_img . "'";
		
		if(	$link_ie == "interno"){
			$tipo_link = home_url() . "/";
		}
		else if( $link_ie == "externo"){
			$tipo_link = "";
		}

		

		if ( ! empty($link) and ! empty($src) ) {
			echo "<a href='" . $tipo_link . $link . "'" . $target_attr_link . $lista_classe_link . "><img " . $titulo_img . $largura_attr_img . $altura_attr_img . $lista_classe_img .  " src='" . $src . "'></a>";
		}
		else if ( empty($link) and ! empty($src) ) {
			echo "<img " . $titulo_img . $largura_attr_img . $altura_attr_img .  $lista_classe_img . " src='" . $src . "'>";
		}
		
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['link'] = strip_tags($new_instance['link']);
		$instance['titulo_attr'] = strip_tags($new_instance['titulo_attr']);
		$instance['target_attr'] = strip_tags($new_instance['target_attr']);
		$instance['largura_attr'] = strip_tags($new_instance['largura_attr']);
		$instance['altura_attr'] = strip_tags($new_instance['altura_attr']);
		$instance['classe_link'] = strip_tags($new_instance['classe_link']);
		$instance['classe_img'] = strip_tags($new_instance['classe_img']);
		$instance['src'] = strip_tags($new_instance['src']);
		$instance['link_ie'] = strip_tags($new_instance['link_ie']);
		
		return $instance;
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'link' => '', 'titulo_attr' => '', 'src' => '' ) );
		$link = strip_tags($instance['link']);
		$titulo_attr = strip_tags($instance['titulo_attr']);
		$target_attr = strip_tags($instance['target_attr']);
		$largura_attr = strip_tags($instance['largura_attr']);
		$altura_attr = strip_tags($instance['altura_attr']);
		$classe_link = strip_tags($instance['classe_link']);
		$classe_img = strip_tags($instance['classe_img']);
		$src = strip_tags($instance['src']);
		$link_ie = strip_tags($instance['link_ie']);
		
?>
		
        <h3>Link</h3>
     
        
        <label>
			<input <?php if($link_ie=="interno") echo "checked"; ?> name="<?php echo $this->get_field_name('link_ie'); ?>" type="radio" value="interno">Interno <span class="exemplo"> Ex: nome-da-pagina</span>
        </label>
       <label>
       <br><br>
			<input <?php if($link_ie=="externo") echo "checked"; ?>  name="<?php echo $this->get_field_name('link_ie'); ?>" type="radio" value="externo" >Externo <span class="exemplo"> Ex: http://site.com.br</span>
        </label>
 
        <br>
        
        
        <p><label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('Url:'); ?></label>
        
		<input class="widefat link" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo esc_attr($link); ?>" placeholder="Url da página"></p>
        
                
        <p>
        <label for="<?php echo $this->get_field_id('classe_link'); ?>"><?php _e('Classe(s):'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('classe_link'); ?>" name="<?php echo $this->get_field_name('classe_link'); ?>" type="text" value="<?php echo $classe_link; ?>" placeholder="classe personalizada">
        </p>
        
        <p><label for="<?php echo $this->get_field_id('target_attr'); ?>"><?php _e('Target:'); ?></label>
		<select class="widefat" id="<?php echo $this->get_field_id('target_attr'); ?>" name="<?php echo $this->get_field_name('target_attr'); ?>">
        
        	<?php
        	if($target_attr=="_blank") 	$title_atributto_target = "Blank";
        	else if($target_attr=="_self") 	$title_atributto_target = "Self";
        	else if($target_attr=="_parent") 	$title_atributto_target = "Parent";
        	else if($target_attr=="_top") 	$title_atributto_target = "Top"; 
			else $title_atributto_target = "Escolha uma opção";       
			?>
        	
        	<option selected="selected" disabled value="<?php echo esc_attr($target_attr); ?>"><?php echo $title_atributto_target; ?></option>
        	<option value="">Normal</option>
        	<option value="_blank">Blank</option>
        	<option value="_self">Self</option>
        	<option value="_parent">Parent</option>
        	<option value="_top">Top</option>
        
        </select>
        
        </p>



        
		<h3>Imagem</h3>
        
        <div class="preview_img">
        <img src="<?php echo $src; ?>">
        </div>
        
        <p>
        <label for="<?php echo $this->get_field_id('titulo_attr'); ?>"><?php _e('Título:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('titulo_attr'); ?>" name="<?php echo $this->get_field_name('titulo_attr'); ?>" type="text" value="<?php echo $titulo_attr; ?>"  placeholder="Titulo da imagem">
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('largura_attr'); ?>"><?php _e('Largura:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('largura_attr'); ?>" name="<?php echo $this->get_field_name('largura_attr'); ?>" type="number" value="<?php echo $largura_attr; ?>" placeholder="auto">
        </p>

        
        <p>
        <label for="<?php echo $this->get_field_id('altura_attr'); ?>"><?php _e('Altura:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('altura_attr'); ?>" name="<?php echo $this->get_field_name('altura_attr'); ?>" type="number" value="<?php echo $altura_attr; ?>" placeholder="auto">
        </p>

        <p>
        <label for="<?php echo $this->get_field_id('classe_img'); ?>"><?php _e('Classe(s):'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('classe_img'); ?>" name="<?php echo $this->get_field_name('classe_img'); ?>" type="text" value="<?php echo $classe_img; ?>" placeholder="classe personalizada">
        </p>
        
        <p>
        <label for="<?php echo $this->get_field_id('src'); ?>"><?php _e('src:'); ?></label>
		<input class="widefat custom_media_url" id="<?php echo $this->get_field_id('src'); ?>" name="<?php echo $this->get_field_name('src'); ?>" type="text" value="<?php echo $src; ?>" placeholder="http://site.com.br/img.jpg">
		<br><br>
		<input type="button" value="<?php _e( 'Carregar Imagem', 'src' ); ?>" class="button custom_media_upload button_upload" id="custom_image_uploader"/>

        </p>
        

		
<?php
	}
}

function widgets_WP_Img_And_Link() {
	register_widget( 'WP_Img_And_Link' );
}

add_action( 'widgets_init', 'widgets_WP_Img_And_Link' );