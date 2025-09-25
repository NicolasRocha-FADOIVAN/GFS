<?php
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

    <a href="view\register.php">Cadastro</a>
    <a href="view\login.php">Login</a>
    <a href="view\account.php">Carrinho</a>
    

    <div>
        <h1>Aqui aparecerão os produtos</h1>
    </div>

    <?php echo $_SESSION['name'];?>, Seu safado

</body>
</html>