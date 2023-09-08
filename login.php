<?php

  $email = $_POST["email"];
  $senha = $_POST["senha"];

  include "includes/conexao.php";

  $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
  $res = mysqli_query($conn, $sql);

  $qtRegistros = mysqli_num_rows($res);

  if ($qtRegistros > 0){

    session_start();

    $row = mysqli_fetch_assoc($res);

    $_SESSION['id'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];
    header("Location: principal.php");
  }
  else{
    header("Location: index.php?erro=1");
  }
 ?>
