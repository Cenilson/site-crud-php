<?php

  include "includes/conexao.php";

  $id_item = "";
  $item = "";
  $descricao = "";
  $devolucao = "";
  $nome_dest = "";
  $email_dest = "";
  $fone_dest = "";



  if(isset($_GET['id_item'])){

    $id_item = $_GET['id_item'];

    $sql = "SELECT * FROM itens WHERE id_item = $id_item";

    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);

    $item = $row['item'];
    $descricao = $row['descricao'];
    $devolucao = $row['devolucao'];
    $nome_dest = $row['nome_dest'];
    $email_dest = $row['email_dest'];
    $fone_dest = $row['fone_dest'];



  } else {

    echo "FALSE";
  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/26d4a64054.js"></script>
  </head>
  <body>
    <div class="form">
    <form action="cadastro-item.php" method="POST">

      <fieldset>

        <legend class="p3">Editar item: <?php echo "$item"?></legend>
        <label for="id_item">Id</label>
        <input class="campo" type="hidden" name="id_item" value="<?php echo $id_item; ?>"/>

        <label for="item">Item</label>
        <input class="campo" type="text" name="item" value="<?php echo $item; ?>"/>

        <label for="descricao">Descrição</label>
        <textarea name="descricao" rows="4" cols="30" placeholder="máx. 250 caracteres"
        value="<?php echo $descricao; ?>"/></textarea>

        <label for="nome">Data de devolução</label>
        <input class="campo" type="date" name="devolucao" value="<?php echo $devolucao; ?>"/>

        <label for="nome_dest">Nome destinatário</label>
        <input class="campo" type="text" name="nome_dest" value="<?php echo $nome_dest; ?>"/>

        <label for="email_dest">Email destinatário</label>
        <input class="campo" type="text" name="email_dest" value="<?php echo $email_dest; ?>"/>

        <label for="fone_dest">Fone destinatário</label>
        <input class="campo" type="text" name="fone_dest" value="<?php echo $fone_dest; ?>"/></br></br>

        <input type="submit" value="Gravar"/></br>

      </fieldset>

    </form>
    </div>

    <div class="p2">
        <p> Retornar a página principal? <a href="principal.php"> Clique aqui! </a></p>
    </div>

  </body>
</html>
