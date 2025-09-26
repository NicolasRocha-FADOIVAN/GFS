<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO LIST

include 'config.php';
include 'system/adminSys.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?route=adminproduct">Editar Produtos</a>

    <ol>
        <?php foreach(listProducts($conn) as $list): ?>
            <li><?php print_r($list)?></li> <br>
        <?php endforeach ?>
    </ol>

</body>
</html>