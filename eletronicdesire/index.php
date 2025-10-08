<?php

#CRIA VARIÁVEL QUE SERÁ USADA PARA PEGAR PARTE DA URL
$route = $_GET['route'] ?? 'home';

#UTILIZA O SWITCH CASE PARA DIRECIONAR O USUÁRIO PARA ALGUMA TELA ESPECÍFICA
switch ($route) {

    case 'home':
    default:
        require 'view/home.php';
    break;

    case 'search':
        require 'view/search.php';
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

    case 'product':
        require 'view/product.php';
    break;

    case 'cart':
        require 'view/cart.php';
    break;
    
    case 'adminpanel':
        require 'view/adminpanel.php';
    break;

    case 'adminproduct':
        require 'view/adminproduct.php';
    break;

}
#USA O REQUIRE PARA REQUERIR A TELA