<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO REGISTER

include 'config.php';
include 'system/accountSys.php';

if(isset($_POST['logout'])){
    logout();
}

if(isset($_POST['changeData'])){
    changeData($conn);
}

if(isset($_POST['deleteAccount'])){
    deleteAccount($conn);
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
        <input type="text" name="name">  <br>
        <input type="text" name="password"> <br>
        <input type="text" name="address"> <br>
        <button type="submit" name="changeData">Atualizar Dados</button>
        <button type="submit" name="logout">Logout</button>
        <button type="submit" name="deleteAccount">Deletar Conta</button>
    </form>


</body>
</html>