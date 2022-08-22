<?php
/*
Template Name: Home page
*/
get_header();
?>




    <!--img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner.jpg" class="img-responsive" alt="Banner Image"-->

    <!--<img src="https://placeholdit.imgix.net/~text?txtsize=86&txt=Banner&w=2000&h=660&txttrack=0" class="img-responsive" alt="Banner Image">-->

<div class="head-banner" style=" visibility: visible !important">


	<?php if ( has_post_thumbnail() ): ?>
        <div class="imagem_destaque">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php else: ?>
    
    
<div id="video_cabecalho">

</div>  
<div id="video_cabecalho_container">

</div>  	
<?php echo img_header ?>

<?php endif; ?>

<?php echo img_header_mobile; ?>


</div> 

<!-- FIM header banner -->


<div class="fundo_cinza_claro">

    <img src="<?php echo get_template_directory_uri(); ?>/images/icones_sampaio/frase.png" style="display: table; margin: auto; max-width: 100%; padding: 20px;">
    
</div>

<div class="container-fluid">
	
  
    <div class="row laytou_width">
    	<div class="col-md-12">
        <?php echo titulo_destaque; ?>
        </div>
    </div>   

    <div id="destaques" class="row laytou_width">
    </div>
    
    <a href="<?php echo get_home_url() . "/imoveis/" ?>" class="bt-model bt-fundo_verde_azulado">VER MAIS IMÓVEIS</a>

</div>





<?php get_footer(); ?>









