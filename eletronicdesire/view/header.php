<?php

include 'config.php';
include 'system/productSys.php';

session_start();

if(isset($_POST['search'])){
    searchProduct($conn);
    header("Location: index.php?route=search");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="text" name="searchBar">
        <button type="submit" name="search">Pesquisar</button>
    </form>

    <a href="index.php?route=register">Cadastro</a>
    <a href="index.php?route=login">Login</a>
    <a href="index.php?route=account">Editar dados</a>
    <a href="index.php?route=cart">Carrinho</a>
    <a href="index.php?route=adminpanel">Ver Produtos</a>

</body> 
</html>