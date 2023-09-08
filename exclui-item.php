<?php
  $conn = mysqli_connect("localhost","root", "", "atp");
  if($conn == false){
    die("ERRO: Não foi possível conectar ao banco de dados. " . mysqli_connect_error());
  }

  $id_item = $_GET['id_item'];

  $sql = "DELETE FROM itens WHERE id_item = $id_item";
  $res = mysqli_query($conn, $sql);

  header("Location: emprestimos.php");

 ?>
