<?php

include 'config.php';
include 'system/productSys.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo a pagina inicial</h1>

    <form action="" method="">
        <input>
        <button type="submit">Pesquisar</button>
    </form>

    <a href="index.php?route=register">Cadastro</a>
    <a href="index.php?route=login">Login</a>
    <a href="index.php?route=account">Editar dados</a>
    <a href="index.php?route=cart">Carrinho</a>
    <a href="index.php?route=adminpanel">Ver Produtos</a>
    

    <ul>
        <?php foreach(catalogProduct($conn) as $list): ?>
        <li>  <?php print_r($list[0]); ?></li>
        <?php endforeach ?>
    </ul>

    <?php echo $_SESSION['name'];?>, Seu safado

</body>
</html>