<?php


/* 
 *
 * Autor: Hugo Ferreira de Oliveira
 * site: agenciadc.net/hugo
 * widget class WP_Texto_Simples
 * version: 1.0
 *
 */

class WP_Texto_Simples extends WP_Widget {


	public function __construct() {
		$widget_ops = array('classname' => 'widget_Texto_Simples', 'description' => __('Texto sem container.'));
		$control_ops = array('width' => 400, 'height' => 350);
		parent::__construct('Texto_Simples', __('Texto Simples'), $widget_ops, $control_ops);
	}

	public function widget( $args, $instance ) {
		$Texto_Simples_valor = apply_filters( 'widget_text', empty( $instance['Texto_Simples_valor'] ) ? '' : $instance['Texto_Simples_valor'], $instance, $this->id_base );
		$tamanho_texto = apply_filters( 'widget_tamanho_texto', empty( $instance['tamanho_texto'] ) ? '' : $instance['tamanho_texto'] );
		
		echo $Texto_Simples_valor; 
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		
		$instance['tamanho_texto'] = strip_tags($new_instance['tamanho_texto']);
				if ( current_user_can('unfiltered_html') )
			$instance['Texto_Simples_valor'] =  $new_instance['Texto_Simples_valor'];
		else
			$instance['Texto_Simples_valor'] = stripslashes( wp_filter_post_kses( addslashes($new_instance['Texto_Simples_valor']) ) ); // wp_filter_post_kses() expects slashed
		$instance['filter'] = ! empty( $new_instance['filter'] );
		
		return $instance;
	}

	public function form( $instance ) {
		$instance = wp_parse_args( (array) $instance, array( 'Texto_Simples_valor' => '') );
		$Texto_Simples_valor = esc_textarea($instance['Texto_Simples_valor']);
		$tamanho_texto = strip_tags($instance['tamanho_texto']);
		
		
		
?>
		
 		<br>
 		<label style='margin-right: 20px;'>
			<input <?php if($tamanho_texto!="texto_grande") echo "checked"; ?> name="<?php echo $this->get_field_name('tamanho_texto'); ?>" type="radio" value="texto_pequeno">Texto Pequeno
        </label>
       
       <label>
			<input <?php if($tamanho_texto=="texto_grande") echo "checked"; ?>  name="<?php echo $this->get_field_name('tamanho_texto'); ?>" type="radio" value="texto_grande" >Texto Grande
        </label>



        <p>
        <label for="<?php echo $this->get_field_id('Texto_Simples_valor'); ?>"><?php _e('Texto:'); ?></label>
        
        <?php if($tamanho_texto != "texto_grande"): ?>
		<input class="widefat" id="<?php echo $this->get_field_id('Texto_Simples_valor'); ?>" name="<?php echo $this->get_field_name('Texto_Simples_valor'); ?>" type="text" value="<?php echo $Texto_Simples_valor; ?>" placeholder="texto">
        
		<?php else: ?>
        
		<textarea style="min-height: 250px; max-height: 250px;" class="widefat" id="<?php echo $this->get_field_id('Texto_Simples_valor'); ?>" name="<?php echo $this->get_field_name('Texto_Simples_valor'); ?>" placeholder="texto"><?php echo $Texto_Simples_valor; ?></textarea>
        </p>
        
        <?php endif; ?>
        

		
<?php
	}
}




function func_wid() {
	register_widget( 'WP_Texto_Simples' );
}

add_action( 'widgets_init', 'func_wid' );