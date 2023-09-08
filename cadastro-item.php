<?php

$conn = mysqli_connect("localhost", "root", "","atp"); //verificar se a senha é root

if($conn == False){
  die("ERRO: Não foi possível conectar com MySQL." . mysqli_connect_error());
}

$id_item = $_POST['id_item'];
$item = $_POST['item'];
$descricao = $_POST['descricao'];
$devolucao = $_POST['devolucao'];
$nome_dest = $_POST['nome_dest'];
$email_dest = $_POST['email_dest'];
$fone_dest = $_POST['fone_dest'];

if (empty($id_item)){


  $sql =  "INSERT INTO itens (item, descricao, devolucao, nome_dest, email_dest, fone_dest)
  VALUES ('$item', '$descricao', '$devolucao', '$nome_dest', '$email_dest', '$fone_dest')";

    $res = mysqli_query($conn, $sql);
    if($res) {

      header("Location: emprestimos.php");
    }
    else {
      echo "Erro ao inserir dados";
    }
  }
  else {

  $sql = "UPDATE itens SET
                item = '$item',
                descricao = '$descricao',
                devolucao = '$devolucao',
                nome_dest = '$nome_dest',
                email_dest = '$email_dest',
                fone_dest = '$fone_dest'
          WHERE
                id_item = $id_item";

  $res = mysqli_query($conn, $sql);
  if($res) {

    header("Location: emprestimos.php");
  }
  else {
    echo "Erro ao editar dados";

    echo $sql;

  }
}
?>
