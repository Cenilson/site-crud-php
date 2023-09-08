<?php
  $conn = mysqli_connect("localhost","root", "", "atp");
  if($conn == false){
    die("ERRO: Não foi possível conectar ao banco de dados. " . mysqli_connect_error());
  }

  $id = $_GET['id'];

  $sql = "DELETE FROM usuarios WHERE id = $id";
  $res = mysqli_query($conn, $sql);

  header("Location: lista-usuarios.php");

 ?>
