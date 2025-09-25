<?php

#CRIA VARIÁVEL QUE SERÁ USADA PARA PEGAR PARTE DA URL
$route = $_GET['route'] ?? 'home';

#UTILIZA O SWITCH CASE PARA DIRECIONAR O USUÁRIO PARA ALGUMA TELA ESPECÍFICA
switch ($route) {

    case 'home':
    default:
        require 'view/home.php';
    break;

    case 'login':
        require 'view/login.php';
    break;

    case 'register':
        require 'view/register.php';
    break;

    case 'account':
        require 'view/account.php';
    break;

    case 'cart':
        require 'view/cart.php';
    break;    

}
#USA O REQUIRE PARA REQUERIR A TELA