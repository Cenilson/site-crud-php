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
      <h2>Usuários cadastrados</h2>
      <h2 style="font-size: 11px", color:"orange">*Atenção: ao clicar em editar / excluir
      será possível alterar apenas os próprios dados.</h2>
      <table>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Dt Nascimento</th>
          <th>Telefone</th>
          <th>Email</th>
        </tr>
        <?php
          $conn = mysqli_connect("localhost", "root", "","atp");
          if($conn == False){
            die("ERRO: Não foi possível conectar com MySQL." . mysqli_connect_error());
          }

          $sql = "SELECT id, nome, sobrenome, nascimento, telefone, email FROM usuarios";

          $res = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_assoc($res)){

            echo "<tr>
              <td>" . $row['id'] . "</td>
              <td>" . $row['nome'] . "</td>
              <td>" . $row['sobrenome'] . "</td>
              <td>" . $row['nascimento'] . "</td>
              <td>" . $row['telefone'] . "</td>
              <td>" . $row['email'] . "</td>
            </tr>";

            }
        ?>

      </div>
      <section></section>
    </body>
  </div>
</html>
