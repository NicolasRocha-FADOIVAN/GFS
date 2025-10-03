<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO LOGIN

include 'config.php';
include 'system/accountSys.php';

if(isset($_POST['login'])){
    login($conn);
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
        <input type="text" name="email">    <br>
        <input type="password" name="password"> <br>
        <button type="submit" name="login">Entrar</button>
    </form>
</body>
</html>