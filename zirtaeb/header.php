<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="imagetoolbar" content="no" />

<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/correcoes.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<!--BEGIN NECESSARY WORDPRESS TAGS-->
<?php
	wp_enqueue_script('jquery');
	wp_head();
	if(is_home()) { $classextra = 'is_home'; } else { $classextra = 'not_home'; }
 ?>
<!--END NECESSARY WORDPRESS TAGS-->
</head>
    <body <?php body_class($classextra); ?>>
        <div class="bg_middle"><div class="bg_head"><div class="bg_foot"><div id="layout">
            <div id="header">
                &nbsp;
                <h1><a href="<?php bloginfo('url'); ?>"><span><?php bloginfo('name'); ?></span></a></h1>
                <ul id="menu_funcional">
                    <li class="hom"><a href="<?php bloginfo('url'); ?>"><span>Home</span></a></li>
                    <li class="aempresa"><a href="<?php bloginfo('url'); ?>/index.php/aempresa/"><span>A Empresa</span></a></li>
                    <li class="servicos"><a href="<?php bloginfo('url'); ?>/index.php/servicos/"><span>Serviços</span></a></li>
                    <li class="consultas"><a href="<?php bloginfo('url'); ?>/index.php/consultas/"><span>Consultas</span></a></li>
                    <li class="faleconosco"><a href="<?php bloginfo('url'); ?>/index.php/fale-conosco/"><span>Fale Conosco</span></a></li>
                </ul>
					<div id="telefone">
						<span>(21) 3233-3500</span>
					</div>
				   <?php if( is_home() || is_page(46) || is_page(44) ) { ?>
					<div id="buscaLivre">
						<form method="post" action="http://<?=apelido()?>.i.wsrun.net/imoveis/<?=apelido()?>/montar-busca-livre" id="frm_busca_livre">
							<input type="hidden" value="<?=codigo_parceiro()?>" name="codigo_parceiro" />
							<input type="text" class="cmp" name="q" value="" id="textoLivre" />
							<input type="submit" class="submit" value="" />
						</form>
					</div>
                 
                 <?php if( is_home() ){?>
					<div id="loginform">
						<form target="_top" action="http://<?=apelido()?>.wsrun.net/php/sistema.php" name="formulario" method="post" id="flogin">
							<input type="Hidden" value="Frame_Parceiro" name="action">
							<input type="hidden" size="20" value="<?=codigo_parceiro()?>" name="codigo">
							<input type="text" autocomplete="off" size="12" value="" id="login" name="login">
							<input type="password" autocomplete="off" size="12" id="senha" name="senha">
							<script language="JavaScript">
								function abrejanela(link) {
									var msgWindow;
									msgWindow=window.open(link,'Senha','resizable=no,width=500,height=500,dependent=yes,scrollbars=yes');
								}
							</script>
							<div class="fpw"><a onclick="abrejanela('http://<?=apelido()?>.wsrun.net/php/email.php?action=email_senha&Codigo_Parceiro=<?=codigo_parceiro()?>');" href="#">Esqueceu sua senha?</a></div>
							<input type="submit" name="ok" id="ok" class="ok" value=" ">
						</form>
					</div>
					
				<? 
                                
                                    if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('BuscaRapida') ) :  endif;
				 }
                                } ?>
				
				<div id="slide">
					<div id="slide_mascara"></div>
					<?php 
						// Cria a div #slide_imagens e adiciona as imagens
						wp_cycle(); 
					?>
					<div id="nav"></div> 
				</div>
            </div>
            <div id="middle">
				<?php if (!is_home()){ get_sidebar(); echo '<div id="meio">'; } ?>
				