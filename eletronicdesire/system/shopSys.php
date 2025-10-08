<?php

function getCart($conn) {
    #INICIA UMA SESSÃO
    session_start();
    
    #CRIA UMA VARIÁVEL PARA ARMAZENAR O ID DO USUÁRIO DA SESSÃO
    $id = $_SESSION['id'];

    #VERIFICA SE EXISTE ALGUM ID DE USUÁRIO NA SESSÃO
    if(isset($id)) {
        #CRIA UM CÓDIGO SQL PARA SELECIONAR A LINHA DO CARRINHO PELO ID DO USUÁRIO
        $sql_code = "SELECT produtos_carrinho FROM carrinhos WHERE id_cliente = '$id'";
    
        #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
        $result = $conn->query($sql_code);

        #VERIFICA SE ALGUM RESULTADO É RETORNADO DA VARIÁVEL RESULT
        if($result->num_rows > 0) {
            #CASO TENHA UM RETORNO, UM ARRAY MULTIDIMENSIONAL SERÁ CRIADO COM OS DADOS PRESENTES NO ARRAY MULTIDIMENSIONAL DA TABELA
            $row = $result->fetch_assoc();
            $list = json_decode($row['produtos_carrinho']);
            return (array) $list;

        } else {
            #CASO NÃO TENHA UM RETORNO, O ID DO USUARIO SERÁ ADICIONADO A TABELA
            $sql_code = "INSERT INTO carrinhos (id_cliente) VALUES ('$id')";
            $result = $conn->query($sql_code);
        }
    }

}

function showProduct($conn) {
    #RECEBE O VALOR DIGITADO NA BARRA DE PESQUISA E COLOCA ELE EM UMA VARIÁVEL
    $id = $_GET['idproduto'];

    #CRIA UM CÓDIGO SQL PARA SELECIONAR TODAS AS LINHAS NA QUAL O VARIÁVEL ESTÁ PRESENTE
    $sql_code = "SELECT * FROM produtos WHERE id_produto = '$id'";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);

    #CHAMA A FUNÇÃO QUERY PRODUCT COM O PARAMETRO RESULT
    // queryProduct($result);
    $list = $result->fetch_all(MYSQLI_NUM);
    return $list;
}

function addCart($conn, $id) {

    $list = getCart($conn);

    $list[] = $id;

    $jsonic = json_encode($list);

    $user = $_SESSION['id'];

    #CRIA UM CÓDIGO SQL PARA SELECIONAR A LINHA DO PRODUTO PELO ID
    $sql_code = "UPDATE carrinhos SET produtos_carrinho = '$jsonic' WHERE id_cliente = '$user'";

    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    $result = $conn->query($sql_code);
    
    #VERIFICA SE O ID DO PRODUTO NÃO EXISTE NO ARRAY MULTIDIMENSIONAL
        #CASO NÃO EXISTA, OS DADOS SERÃO ADICIONADOS AO ARRAY

}

function listCart() {
    #EXECUTA A FUNÇÃO GET CART
    #RETORNA TODOS OS ARRAYS DENTRO DO ARRAY MULTIDIMENSIONAL
    #CASO NÃO HAJA NENHUM ARRAY DENTRO DO ARRAY MULTIDIMENSIONAL, ELE IRÁ RETORNAR APENAS UM ECHO
}

function checkout() {
    #RECEBE OS DADOS DE CHECKOUT, INCLUINDO O ID DO PRODUTO
    #ARMAZENA ESSE ID EM UMA VARIÁVEL
    #CRIA UM CÓDIGO SQL PARA ALTERAR O VALOR DA QUANTIDADE DO PRODUTO PELO VALOR DA QUANTIDADE DENTRO DO ARRAY MULTIDIMENSIONAL
    #CASO A QUANTIDADE SEJA MENOR DO QUE 1, O SITE RETORNARÁ A MENSAGEM FALHA AO COMPRAR, PRODUTO FORA DE ESTOQUE
    #UTILIZA O QUERY PARA EXECUTAR O CÓDIGO ARMAZENANDO NA VARIÁVEL RESULT
    #EXECUTA A FUNÇÃO REMOVE CART
}

function removeCart() {
    #BUSCA O ID DO PRODUTO CUJO O BOTÃO REMOVER FOI CLICADO
    #ARMAZENA ESSE ID EM UMA VARIÁVEL
    #REMOVE O ARRAY CUJO O ID PERTENCE DO ARRAY MULTIDIMENSIONAL
}