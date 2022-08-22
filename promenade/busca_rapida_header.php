


<!-- busca rapida -->

<link rel='stylesheet' id='fancybox-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/fancybox/jquery.fancybox-1.2.6.css' type='text/css' media='screen' />

<link rel='stylesheet' id='super_caixa-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/superCaixa/super_caixa.css' type='text/css' media='screen' />

<link rel='stylesheet' id='super_caixa_parceiro-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/superCaixa/super_caixa_parceiro.css' type='text/css' media='screen' />

<link rel='stylesheet' id='multiSelect-css'  href='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/jquery.multiSelect-1.2.1/jquery.multiSelect.css' type='text/css' media='screen' />



<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/path/Path_clientes.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/jquery.multiSelect-1.2.1/jquery.multiSelect.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/cookie/jcookie.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/superCaixa/SuperCaixa2.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/quicksearch/quicksearch.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/json/jquery.json-1.3.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/BuscaRapidaLanguage.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/en-us.lang.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/es.lang.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/pt-br.lang.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/buscaRapida/BuscaRapida.js'></script>

<script type='text/javascript' src='http://<?php echo apelido;?>.i.wsrun.net/imoveis/js/busca/OrigemFollowup.js'></script>



<script type="text/javascript">

	Path.setPrefixo("<?php echo apelido; ?>");

	jQuery(document).ready(function(){

		BuscaRapida.addTraducao(BuscaRapidaPortugues);

		BuscaRapida.addTraducao(BuscaRapidaIngles);

		BuscaRapida.addTraducao(BuscaRapidaEspanhol);

		//BuscaRapida.setInterno(true);

		BuscaRapida.setIdiomaPadrao("PT-BR");

		BuscaRapida.setCodigoParceiro(<?php echo codigo; ?>);

		BuscaRapida.init("", function(){

			// Define os valores iniciais da pesquisa

			var params = {

				//"finalidade"    : ["A"],

				"estado"        : ["RJ"]

			};

			BuscaRapida.valoresIniciais(params);

		}, {

			comboFinalidade:{

				primeiraOption  : function(){

					return "<option value='' class='lbl_finalidade'>"+BuscaRapidaLanguage.get("LBL_FINALIDADE")+"</option>";

				}

			},

			comboEstado:    {

				

				primeiraOption  : function(){

					return "<option value='RJ' selected='selected' hidden='hidden'>RJ</option><option value='' class='lbl_estado'>"+BuscaRapidaLanguage.get("LBL_ESTADO")+"</option>";

				}

			},

			comboMunicipio: {

				primeiraOption  : function(){

					return "<option value='' class='lbl_municipio'>"+BuscaRapidaLanguage.get("LBL_MUNICIPIO")+"</option>";

				}

			},

			comboBairro:    {

				primeiraOption  : function(){

					return BuscaRapidaLanguage.get("LBL_BAIRRO");

				}

			},

			comboTipoImovel:{

				primeiraOption  : function(){

					return BuscaRapidaLanguage.get("LBL_TIPO_IMOVEL");

				}

			}

		});

	});


</script>



<!-- acaba busca rapida -->    





