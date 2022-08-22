<form action="http://<?php echo apelido; ?>.i.wsrun.net/imoveis/atlantida/montar-busca-de-imoveis" target="_top" method="post" id="buscarapida" class="row" >

	<div class="col-sm-10 fonte_amarelo" style="text-indent: 10px;"><h4>PARA LOCAÇÃO OU COMPRA, UTILIZE A BUSCA RÁPIDA</h4></div>
	<div class="idiomas col-sm-2" id="idiomas"></div>

	<div class="col-sm-10">
	
		<div class="finalidade col-xs-12 col-sm-3">
			<i class="glyphicon glyphicon-triangle-bottom seta"></i>
			<select name="Finalidade" id="Finalidade">
				<option value="">Carregando...</option>
			</select>
		</div>
		
		<div class="estado col-xs-12" style="display: none !important;">
			<i class="glyphicon glyphicon-menu-down seta"></i>
			<select name="Estado" id="Estado">
				<option value="">Carregando...</option>
			</select>
		</div>

		<div class="municipio col-xs-12 col-sm-3">
			<i class="glyphicon glyphicon-triangle-bottom seta"></i>
			<select name="Municipio" id="Municipio">
				<option value="">Carregando...</option>
			</select>
		</div>

		<div class="bairro col-xs-12 col-sm-3">
			<i class="glyphicon glyphicon-triangle-bottom seta"></i>
			<select name="Bairro" id="Bairro">
				<option value="">Carregando...</option>
			</select>
		</div>

		<div class="tipo col-xs-12 col-sm-3">
			<i class="glyphicon glyphicon-triangle-bottom seta"></i>
			<select name="Tipo_Imovel" id="Tipo_Imovel">
				<option value="">Carregando...</option>
			</select>
		</div>
	</div>
	
	<div class="col-sm-2" style="padding-left: 0;">		
	
		<div class="butoes col-xs-12">
			<input class="enviar botao-buscar fundo_azul_claro" type="button" value="BUSCAR" id="botao" log="false" />
		</div>  
		
	</div> 

</form>