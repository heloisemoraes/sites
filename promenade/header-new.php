<?php
$menu_novo =

	array(

		'theme_location' => 'menu-novo',

		'menu' => '',

		'menu_class' => 'nav navbar-nav', /*navbar-right*/

		'depth'=> 0,

		'container'=> false,

		'walker'=> new Bootstrap_Walker_Nav_Menu

	);
	
$menu_principal =

	array(

		'theme_location' => 'menu-principal',

		'menu' => '',

		'menu_class' => 'row padding0',

		'depth'=> 1,

		'container'=> false,

		'walker'=> new menu_principal

	);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php if( home() != UrlAtual() ){ the_title(); echo" - "; }; bloginfo('blogname'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />

	<script type="text/javascript">
	var templateUrl = '<?= get_bloginfo("template_url"); ?>';
	</script>

	<?php wp_head(); ?>
	<?php echo url_favicon ?>

	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet"> 

	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/slide-reload.js"></script>
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/menu-toggle.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/new-style.css">


<?php // include_once "busca_rapida_header.php"; ?>



<?php // include_once "script_destaque_header.php"; ?>


<?php echo imagem_fundo; ?>

</head>

<body <?php body_class(isset($class) ? $class : ''); ?>>


<div class="container-fluid padding0 fundo_cinza_claro">


<header class="site-header">
	<div class="site-header-container row layout_width" style="margin: auto !important;">
					
		<div class="menu-wrapper col-xs-12 col-sm-7 col-md-7">
			<span class="logo-promenade">
				<a href="/home" target="" title=""> <img class="logo_empresa_header" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-novo.png" alt="" title=""> </a> 
			</span>

	        <a class="menu-toggle" href="#">&nbsp;</a>

	        <div class="menu">

	        <?php wp_nav_menu($menu_novo); ?>
	        </div>
		</div>			
		<div class="col-xs-12 col-sm-5 col-md-5 area-restrita-wrapper">
			<?php include "form_area_restrita.php"; ?> 
		</div>
		
	</div>
</header>

<div class="banner">
	<div class="banner-container">
		<!-- <img class="banner-content" src="<?php //echo esc_url( get_template_directory_uri() ); ?>/img/banner.jpg"> -->
		<video  class="banner-content" autoplay loop>
		  <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/videos/video-01.mp4" type="video/mp4">
		  Your browser does not support the video tag.
		</video> 
		<div class="banner-content-img">
			<img class="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/videopicture.jpg">
		</div>
		<div class="banner-text">
			<h2 class="h2">Serviços Premium na Gestão de Bens</h2>
			<p>Presente no Rio de Janeiro e Minas Gerais</p>
			<div class="row servicos">
				<div class="col-sm-3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/servico-1.png">
					<a href="/administracao-de-condominios/">Administração de Condomínios</a>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/servico-2.png">
					<a href="/implantacao-consultoria/">Implantação de Consultoria</a>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/servico-3.png">
					<a href="/locacao-compra-e-venda/">Aluguel de Temporada</a>
				</div>
				<div class="col-sm-3">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/servico-4.png">
					<a href="/locacao-compra-e-venda/">Aluguel e Venda</a>
				</div>
			</div>
		</div>
	</div> 
</div>



<a href="https://promenade.icondo.com.br" target="_blank" class="bt_2via"><img src="<?php bloginfo('template_directory') ?>/images/promenade/ic_2via.png"></a>

 