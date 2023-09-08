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

      <h2 style="font-size: 11px", color:"orange">*Escolha uma opção de edição abaixo:</h2>

        <?php
          $conn = mysqli_connect("localhost", "root", "","atp");
          if($conn == False){
            die("ERRO: Não foi possível conectar com MySQL." . mysqli_connect_error());
          }

          $sql = "SELECT id, nome, sobrenome, nascimento, telefone, email FROM usuarios";

          $res = mysqli_query($conn, $sql);

          ($row = mysqli_fetch_assoc($res));

            echo "<tr>
              <h1> <a class href='edita-usuario.php?id=".$_SESSION['id']."'>Editar meus dados</a></h1>
              <h1><a href='exclui-usuario.php?id=". $_SESSION['id'] ."'>Excluir meus dados</a><h1>
            </tr>";
        ?>

      </div>
      <section></section>
    </body>
  </div>
</html>
