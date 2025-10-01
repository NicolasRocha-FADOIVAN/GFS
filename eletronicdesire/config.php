<?php

#DEFINE AS INFORMAÇÕES NECESSÁRIAS PARA A CONEXÃO: HOST, USER, PASSWORD, DATABASE
$usuario = 'root';
$senha = '';
$database = 'eletronicdesire';
$host = 'localhost';

$conn = new mysqli($host, $usuario, $senha, $database);

#REALIZA A CONEXÃO COM O MYSQLI E TESTA PARA GARANTIR QUE FUNCIONE
if($conn->error) {
    die("Falha ao conectar ao banco de dados: " . $conn->error);
}

