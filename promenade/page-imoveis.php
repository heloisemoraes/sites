<?php
/*
Template Name: Imóveis
*/
get_header();
?>



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


    <div class="titulo_header titulo_page">
        <h1 class="titulo_site3"><?php the_title(); ?></h1>
    </div>

</div>    

<!-- FIM header banner -->








<!-- COMECA PESQUISAS -->
<div class="container-fluid fundo_cinza_claro container_pesquisas" >

    <div class="row">


        <div class="laytou_width">

            

                <ul class="nav pesquisas">

                    <li class="active">

                        <a href="#ache-seu-imovel" id="recentes-tab" data-toggle="tab" aria-expanded="false">
						BUSCA RÁPIDA
                        </a>

                    </li>

                    

                    <li class="">

                        <a href="#busca_livre" data-toggle="tab" aria-expanded="true">
						BUSCA LIVRE
                        </a>

                    </li>

                    

                    <li class="">

                        <a href="#busca-por-referencia" data-toggle="tab" aria-expanded="true">
						BUSCA POR REFERÊNCIA
                        </a>

                    </li>

                </ul>

            

           </div>

           <div class="col-md-12"> 

            

                <div class="tab-content pesquisas laytou_width pesquisa_imoveis">

                    <div id="ache-seu-imovel" class="tab-pane fade active in">

                    

                    

                                   

                        <div id="busca_rapida" class="container-fluid">

                            <form action="http://atlantida.i.wsrun.net/imoveis/atlantida/montar-busca-de-imoveis" target="_top" method="post" id="buscarapida" class="row" >

                                

                                

                                

                                <div class="idiomas col-xs-12" id="idiomas"></div>

                                <div class="col-xs-12 col-sm-12 col-md-6 container_interno_form_buscas padding_cont">
                                
                                
                                    <div class="finalidade col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Finalidade" id="Finalidade">
                                            <option value="">Carregando...</option>
                                        </select>
                                    </div>
    
    
                                    <div class="estado col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Estado" id="Estado">
                                            <option value="RJ">Carregando...</option>
                                        </select>
                                    </div>
    
    
                                    <div class="municipio col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Municipio" id="Municipio">
                                            <option value="">Carregando...</option>
                                        </select>
                                    </div>
                                    
                                    <div class="bairro col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Bairro" id="Bairro">
                                            <option value="">Carregando...</option>
                                        </select>
                                    </div>
                                    
                                    
                                </div>

								<style>
								.padding_cont{
									padding-top: 16px;
									padding-bottom: 6px;
								}
								@media (min-width: 990px){
									.container_interno_form_buscas{
										padding: 5px 0 0 15px;
									}
									.container_interno_form_buscas.cont_2{
										padding:  5px 15px 0 0;
									}
									.container_interno_form_buscas > div{
										padding: 0 3px;
									}
									.container_interno_form_buscas > div:first:child{
										padding-left: 0;
									}
									#busca_rapida form div > div.seta:after{
										right: 12px;
									}
								}
								</style>
                                <div class="col-xs-12 col-sm-12 col-md-6 container_interno_form_buscas cont_2">
                                
                                
                                    <div class="tipo col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Tipo_Imovel" id="Tipo_Imovel">
                                            <option value="">Carregando...</option>
                                        </select>
                                    </div>
                                    
    
                                    <div class="quartos col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Menor_Quartos" class="dorm dorm1" id="MinDorms">
                                            <option value="" class="lbl_min_quartos">QUARTOS</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
    
                                    <div class="quartos col-xs-12 col-sm-3 col-md-3 seta">
                                    	<span></span>
                                        <select name="Maior_Quartos" class="dorm dorm2" id="MaxDorms">
                                            <option value="" class="lbl_max_quartos">Max.Qts</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="">5 ou +</option>
                                        </select>
                                    </div>
                                    
                                    <div class="butoes col-xs-12 col-sm-3 col-md-3">
                                        <input class="enviar botao-buscar" type="button" value="OK" id="botao" log="false" />
                                    </div>  
                                
                                
                                </div>
                                

                                

                                      

                        

                                        

                            </form>

                        </div>            

                    

                    

                    

                    </div>

                    

                    

                    

                    <div id="busca_livre" class="tab-pane fade container-fluid">

          

                        <form class="row padding_cont" id="frm_busca_livre" action="http://<?php echo apelido;?>.i.wsrun.net/imoveis/<?php echo apelido;?>/montar-busca-livre" method="post">

                        

                        <input type="hidden" name="codigo_parceiro" value="<?php echo codigo;?>">

                        

                        <div class="col-xs-9 col-sm-9 col-md-10">

                        <input type="text" id="textoLivre" value="" name="q" size="58" placeholder="Ex: venda apartamento Barra da Tijuca">

                        </div>

                        

                        <div class="col-xs-3 col-sm-3 col-md-2">

                            <input class="enviar botao-buscar" type="submit" value="OK">

                        </div>

                        

                        </form>

                        

                    </div>

                    

                    

                    

                    <div id="busca-por-referencia" class="tab-pane fade container-fluid">

                        

                        <form target="Principal" class="row padding_cont" action="http://<?php echo apelido;?>.i.wsrun.net/imoveis/<?php echo codigo;?>/busca-referencia" method="post" name="frm_busca_referencia" id="frm_busca_referencia" onsubmit="if ( referencia.value==''){alert('Informe a Referência do imóvel!'); return false;}">

                                               

                        <input type="hidden" value="<?php echo codigo;?>" id="Codigo_Parceiro" name="Codigo_Parceiro">

                        <input type="hidden" value="<?php echo codigo;?>" maxlength="7" id="codigo_anunciante" name="codigo_anunciante"

                        class="cmp cmpFixo">

                        

                        <div class="col-xs-9 col-sm-9 col-md-10">

                        <input type="text" id="referencia" name="referencia" value="" placeholder="<?php echo codigo;?>">

                        </div>

                        

                        <div class="col-xs-3 col-sm-3 col-md-2">

                        <input type="submit" name="Enviar" value="OK">

                        </div>

                        </form>

                        

                    </div>

                    

                </div>

            

            </div>

        

        </div>
    

</div>
<!-- FIM PESQUISAS -->

















<div class="container-fluid">
	
  
    <div class="row laytou_width">
    	<div class="col-md-12">
        <h2 class="titulo_site2">IMÓVEIS EM DESTAQUE VENDA</h2>
        </div>
    </div>   

    <div id="destaques_venda" class="row laytou_width">
    </div>
    

</div>



<div class="container-fluid">
	
  
    <div class="row laytou_width">
    	<div class="col-md-12">
        <h2 class="titulo_site2">IMÓVEIS EM DESTAQUE LOCAÇÃO</h2>
        </div>
    </div>   

    <div id="destaques_locacao" class="row laytou_width">
    </div>

</div>





<?php get_footer(); ?>









