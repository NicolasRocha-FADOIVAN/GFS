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

    <table>
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach(listProducts($conn) as $list): ?>
            <tr>
                <td><a href="">Detalhes</a></td>
                <td><?php print_r($list[0]); ?></td>
                <td><?php print_r($list[1]); ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

</body>
</html>