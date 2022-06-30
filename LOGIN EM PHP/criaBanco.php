<?php

//nome do server
$servername = "localhost";
  
// user do banco
$username = "root";
  
// Senha do banco
$password = "root";
  
// Cria conexao
$conn = new mysqli($servername, 
            $username, $password);
 
  
// Cria dabase com o nome: login
$sql = "CREATE DATABASE login";
$sqlSelecionaBanco = "USE login";
$sqlCriaTabela = "CREATE TABLE usuarios (login varchar(45), senha varchar(250));";

if ($conn->query($sql) === TRUE) {
    echo "Banco de dados criado: login";
} else {
    echo "Erro ao criar banco: " . $conn->error;
}

if ($conn->query($sqlSelecionaBanco) === TRUE) {
    echo "Banco de dados selecionado: login";
} else {
    echo "Erro ao setar banco: " . $conn->error;
}

if ($conn->query($sqlCriaTabela) === TRUE) {
    echo "Criou a tabela de login!";
} else {
    echo "Erro ao criar tabela: " . $conn->error;
}
  
// Fecha conexao
$conn->close();
?>