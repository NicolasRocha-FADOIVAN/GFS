<?php

include 'config.php';
include 'system/productSys.php';

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
    <?php foreach(searchProduct($conn) as $list): ?>
        <li>
            <div>
                <a href="index.php?route=adminproduct&idproduto=<?php echo $list[0]; ?>">Detalhes</a>
                <?php print_r($list[0]); ?>
                <?php print_r($list[1]); ?>
            </div>           
        </li>
    <?php endforeach ?>
</ul>
</body>
</html>