<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

$servername = "localhost";

// user do banco
$username = "root";

// Senha do banco
$password = "root";

// Creating a connection
$conn = new mysqli(
  $servername,
  $username,
  $password
);

$verifica = ("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'");
$sqlSelecionaBanco = "use login";

  if(!$conn->query($sqlSelecionaBanco)){
  } else {
    echo "Erro ao setar banco, vc esta usando o banco correto?" . $conn->error;
  }

  if ($conn->query($verifica) >= 1) {
    echo "Login corretos! Direcionando a pagina de index";
    header("Location:index.php");
    } else {
    echo "Credenciais incorretas: " . $conn->error;
    die();
  }

