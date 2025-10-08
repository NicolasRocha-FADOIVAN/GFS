<?php

include 'config.php';
include 'system/shopSys.php';
$list = showProduct($conn)[0];

if(isset($_POST['comprar'])){
    addCart($conn, $_GET['idproduto']);
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
    <ul>
        <li>id:<?php " " . print_r($list[0]) ?></li>
        <li>nome:<?php " " . print_r($list[1]) ?></li>
    </ul>
    <form action="" method="POST">
        <button type="submit" name="comprar">Comprar</button>
    </form>
</body>
</html>