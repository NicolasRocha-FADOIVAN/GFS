<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO REGISTER

include 'config.php';
include 'system/adminSys.php';

if(isset($_POST['manageProducts'])){
    manageProduct($conn);
}

if(isset($_POST['deleteProducts'])){
    deleteProduct($conn);
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
        <input type="text" name="name">         <br>
        <button type="submit" name="manageProducts">Criar Conta</button>
        <button type="submit" name="deleteProducts">Deletar</button>
    </form>
</body>
</html>