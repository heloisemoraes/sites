<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta http-equiv="imagetoolbar" content="no">

    <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/imagens/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>



    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css?<?php echo filemtime(dirname(__FILE__).'/style.css'); ?>" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="icon" href="#" type="image/png" />
	<link rel="shortcut icon" href="#" type="image/png" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://portal.icondo.com.br/js/jquery.js"></script>


    <script>

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



        ga('create', 'UA-xxxxxx-x', 'auto');

        ga('require', 'displayfeatures');

        ga('send', 'pageview');



    </script>

    <?php

    # BEGIN NECESSARY WORDPRESS TAGS



    wp_enqueue_script('jquery');

    wp_get_archives('type=monthly&format=link');

    wp_head();



    # END NECESSARY WORDPRESS TAGS

    ?>


</head>



<body <?php body_class(); ?>>



<div class="dotted-1"><div class="dotted-2"><div class="dotted-3">


<div id="header" class="col-sm-12 col-xs-12 p-0 pb-4">
        <div class="col-sm-12 col-xs-12">  
        <div class="row">
          
        <div class="col-sm-12 col-xs-12 p-0"> 
        <div class="inicio">
                <div class="container">
                     <div class="row">
                     <div class="col-sm-8 col-xs-12 p-2 mt-2">
                    </div>   
                        <div class="col-sm-2 col-xs-12 p-2 my-2">
                            <div class="dropdown">
                                <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Área do cliente
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div id='loginIcondo' data-parceiro='robertomarques' data-codigo='361271E3-F088-4ED8-B71F-DFA297CC2C6E' data-facebook='false' data-google='false'></div>
                                </div>
                            </div>             
                        </div> 
                        <div class="col-sm-2 col-xs-12 p-2 my-2">
                        <div class="segundavia btn btn-warning"><a href="https://portal.icondo.com.br/wp-login.php?redirect_to=https%3A%2F%2Fportal.icondo.com.br%2F&reauth=1" target="_blank">2° via de Boleto</a></div>
                        </div>

                        
                    </div>
                </div>
            </div>     
        <div class="container pt-4">
            <div class="row">
            <div class="col-sm-3 col-xs-12 p-0">
                    <div class="logo">
                        <a href="https://agagedesign.com/robertomarques/"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/logo.jpg"/></a>
                    </div>                
            </div>  
                    <div class="col-sm-8 col-xs-12 p-0">
                        <nav class="navbar navbar-expand-lg navbar-light p-0">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse text-left" id="navbarNav">
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
                    <div class="col-sm-1 col-xs-12 mt-5 p-0 rede">
                            <div class="row">
                                <div class="col-sm-4 col-2 p-0 text-center">
                                <a href="https://www.facebook.com/RobertoMarquesImoveis/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/face.png" class="w-100"/></a>
                                </div>
                                <div class="col-sm-4 col-2 p-0 text-center">
                                <a href="https://www.instagram.com/robertomarquesimoveis/" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/inst.png" class="w-100"/>
                                </div>
                                <div class="col-sm-4 col-2 p-0 text-center">
                                <a href="https://api.whatsapp.com/send?phone=5521970169000" target="_blank"><img src="<?php bloginfo('stylesheet_directory'); ?>/imagens/what.png" class="w-100"/></a>
                                </div>
                            </div> 
                        </div>
                   
                </div>
            </div>   
        </div>
        </div> 
        </div> 
        
        </div><!-- #header -->


            <div id="main">
			