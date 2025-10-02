<?php

function manageProduct($conn) {
    #RECEBE OS VALORES DIGITADOS NO FORMULÁRIO DE PRODUTO E COLOCA ELES EM VARIÁVEIS
    // $name = $conn->real_escape_string($_POST['name']);

    #BUSCA O ID DO PRODUTO CUJO O BOTÃO EDITAR FOI CLICADO E ARMAZENA ESSE ID EM UMA VARIÁVEL
    $id = $_GET['idproduto'];

    #CRIA UM CÓDIGO SQL PARA SELECIONAR A LINHA DO PRODUTO PELO ID
    $sql_code = "SELECT * FROM produtos WHERE id_produto";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE A VARIAVEL RESULT RETORNA ALGUMA LINHA
    if(isset($id)) {
        #CASO EXISTA, A FUNÇÃO UPDATE PRODUCT SERÁ CHAMADA CONTENDO OS DADOS COMO PARAMETROS
        updateProduct($conn, $id);

    } else {
        #SENÃO, A FUNÇÃO ADD PRODUCT SERÁ CHAMADA CONTENDO OS DADOS COMO PARAMETROS
        addProduct($conn);

    }
}

function addProduct($conn) {
    #RECEBE OS VALORES DIGITADOS NO FORMULÁRIO DE PRODUTO E COLOCA ELES EM VARIÁVEIS
    $name = $conn->real_escape_string($_POST['name']);

    #CRIA UM CÓDIGO SQL PARA ADICIONAR OS VALORES A TABELA NO BANCO DE DADOS
    $sql_code = "INSERT INTO produtos (nome_produto) VALUES ('$name')";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A LISTA DE PRODUTOS
    header("Location: index.php?route=adminpanel");
}

function listProducts($conn) {
    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS DA TABELA
    $sql_code = "SELECT * FROM produtos";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
    if($result->num_rows > 0) {

        #CRIA UM ARRAY PARA SER A LISTA DE PRODUTOS
        $list = $result->fetch_all(MYSQLI_NUM);

        #RETORNA O ARRAY PARA SER UTILIZADO NA ITERAÇÃO DA LISTA DE PRODUTOS
        return $list;
    }
}

function updateProduct($conn, $id) {
    #RECEBE OS VALORES DIGITADOS NO FORMULÁRIO DE PRODUTO E COLOCA ELES EM VARIÁVEIS
    $name = $conn->real_escape_string($_POST['name']);

    #CRIA UM CÓDIGO SQL PARA ATUALIZAR A TABELA COM OS VALORES DOS PARAMETROS ONDE O ID FOR IGUAL AO PARAMETRO ID
    $sql_code = "UPDATE produtos SET nome_produto = '$name' WHERE id_produto = $id";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A LISTA DE PRODUTOS
    header("Location: index.php?route=adminpanel");  
}

function deleteProduct($conn) {
    #BUSCA O ID DO PRODUTO CUJO O BOTÃO EDITAR FOI CLICADO E ARMAZENA ESSE ID EM UMA VARIÁVEL
    $id = $_GET['idproduto'];

    #CRIA UM CÓDIGO SQL PARA DELETAR A LINHA DO PRODUTO PELO ID
    $sql_code = "DELETE FROM produtos WHERE id_produto = $id";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #REDIRECIONA PARA A LISTA DE PRODUTOS
    header("Location: index.php?route=adminpanel");  
}