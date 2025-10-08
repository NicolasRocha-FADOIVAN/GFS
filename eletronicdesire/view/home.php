<?php

include 'config.php';
include 'system/productSys.php';

session_start();

if(isset($_POST['searchProduct'])){
    $search = $conn->real_escape_string($_POST['searchBar']);
    header("Location: index.php?route=search&search=" . $search);
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
    <h1>Bem vindo a pagina inicial</h1>

    <form action="" method="POST">
        <input type="text" name="searchBar">
        <button type="submit" name="searchProduct">Pesquisar</button>
    </form>

    <a href="index.php?route=register">Cadastro</a>
    <a href="index.php?route=login">Login</a>
    <a href="index.php?route=account">Editar dados</a>
    <a href="index.php?route=cart">Carrinho</a>
    <a href="index.php?route=adminpanel">Ver Produtos</a>
    

    <ul>
        <?php foreach(catalogProduct($conn) as $list): ?>
        <li>
            <a href="index.php?route=product&idproduto=<?php echo $list[0]; ?>">
            <?php print_r($list[1]); ?>
        </li>
        <?php endforeach ?>
    </ul>

    <?php echo $_SESSION['name'];?>, Seu safado

</body>
</html>