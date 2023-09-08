
<?php
  require "includes/autentica.php";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Principal</title>
    <link rel="stylesheet" href="css/style2.css">
    <script src="https://kit.fontawesome.com/26d4a64054.js"></script>
  </head>
  <div class="background">
  <body>

    <?php
      include "includes/menu.php";
     ?>

    <div class="sidebar-right">
      <h2>Meus Itens</h2>
  <table>
    <tr>
      <th>Cód Item</th>
      <th>Item</th>
      <th>Descrição</th>
      <th>Data devolução</th>
      <th>Destinatário</th>
      <th>Email destinatário</th>
      <th>Fone destinatário</th>
    </tr>

    <?php
      include "includes/conexao.php";
      $sql = "SELECT id_item, item, descricao, devolucao, nome_dest, email_dest, fone_dest FROM itens";

      //Envia cód SQL para o MySQL
      $res = mysqli_query($conn, $sql);
      //Percorre registros encontrados
      while($row = mysqli_fetch_assoc($res)){
        echo "<tr>
          <td>". $row['id_item'] . "</td>
          <td>". $row['item'] . "</td>
          <td>". $row['descricao'] . "</td>
          <td>". $row['devolucao'] . "</td>
          <td>". $row['nome_dest'] . "</td>
          <td>". $row['email_dest'] . "</td>
          <td>". $row['fone_dest'] . "</td>
          <td><a href='edita-item.php?id_item=".$row['id_item']."'>Editar</a></td>
          <td><a href='exclui-item.php?id_item=". $row['id_item'] ."'>Excluir</a></td>
        </tr>";

      }

    ?>
    <section></section>
  </body>
  </div>
</html>
