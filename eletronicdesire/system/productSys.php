<?php

function catalogProduct($conn) {
    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS DA TABELA EM UMA ORDEM ALEATÓRIA
    $sql_code = "SELECT * FROM produtos ORDER BY RAND()";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    if($result->num_rows > 0) {

        #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
        // queryProduct($result);
        $list = $result->fetch_all(MYSQLI_NUM);
        return $list;
    }
}

function searchProduct($conn) {
    #RECEBE O VALOR DIGITADO NA BARRA DE PESQUISA E COLOCA ELE EM UMA VARIÁVEL
    $name = $conn->real_escape_string($_POST['searchBar']);

    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS NA QUAL O VARIÁVEL ESTÁ PRESENTE
    $sql_code = "SELECT * FROM produtos WHERE nome_produto LIKE '%$name%'";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
    // queryProduct($result);
    $list = $result->fetch_all(MYSQLI_NUM);
    return $list;
}

function queryProduct($result) {
    #VERIFICA SE ALGUM RESULTADO É RETORNADO DO PARAMETRO RESULT


    #RETORNA UM ARRAY COM AS INFORMAÇÕES DO RESULTADO

}