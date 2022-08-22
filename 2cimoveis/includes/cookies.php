<?php

//Padrão
$cookie_name = getTipoVisualizacaoCookieName();
$cookie_value = 'lista';
$cookie_time = time() + (86400 * 30); // 1 mês

if( isset($_GET['ver']) && $_GET['ver'] != '' ){
    // Verifica se tem parametro
    $cookie_value = $_GET['ver'];
}
else if( isset($_COOKIE[$cookie_name]) ) {
    // Verifica se tem cookie
    $cookie_value = $_COOKIE[$cookie_name];
}

//Seta o cookie
setcookie($cookie_name, $cookie_value, $cookie_time, "/");
$_COOKIE[$cookie_name] = $cookie_value;

//Function para pegar o tipo de visualização em qualquer lugar do tema
function getTipoVisualizacao(){
    return $_COOKIE[getTipoVisualizacaoCookieName()];
}

//Function para setar em um unico lugar o nome do cookie
function getTipoVisualizacaoCookieName(){
    return 'visualizacao';
}