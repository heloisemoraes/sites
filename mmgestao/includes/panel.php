<?php

/* FUNCOES DO MENU DINAMICO */
function add_wp3menu_support() {
    $menus = array(
        'superior'   => 'Menu Superior',
        'lateral'    => 'Menu Lateral',
        'rodape'     => 'Menu Rodapé',
    );
    register_nav_menus($menus);

}
// Inicializa Menu Dinamico
add_action('init', 'add_wp3menu_support');

// Ativar o gerenciador de links num WordPress multisite
add_filter( 'pre_option_link_manager_enabled', '__return_true' );// Ativar imagem destacada add_theme_support( 'post-thumbnails' );set_post_thumbnail_size( );