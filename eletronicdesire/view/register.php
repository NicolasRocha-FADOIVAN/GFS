<?php

#INCLUI CONFIG PARA PEGAR A VARIÁVEL DA CONEXÃO E USA-LA COMO PARAMETRO NA FUNÇÃO REGISTER

include 'config.php';
include 'system/accountSys.php';

if(isset($_POST['register'])){
    register($conn);
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
        <input type="date" name="birthDate">       <br>
        <input type="number" name="CPF">        <br>
        <input type="text" name="gender">       <br>
        <input type="tel" name="phoneNumber">       <br>
        <input type="text" name="address">      <br>
        <input type="email" name="email">       <br>
        <input type="password" name="password">     <br>
        <button type="submit" name="register">Criar Conta</button>
    </form>
</body>
</html>