<?php 

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$servername = "localhost";

// user do banco
$username = "root";

// Senha do banco
$password = "root";

// Creating a connection
$conn = mysqli_connect(
  $servername,
  $username,
  $password
);

$sqlSelecionaBanco = "use login";

$conn->query($sqlSelecionaBanco);

  if($login == "" || $login == null){
    echo "O campo login e senha devem ser preenchido";

  }else{
        $insert = "INSERT INTO usuarios (login, senha) VALUES ('$login','$senha')";

        if($conn->query($insert) === TRUE) {

          echo " Login feito com sucesso! Senha salva no banco em MD5";
        }else{
          echo " Ocorreu um erro na hora de criar seu login :(";
        }
      }
?>