<?php

  include "includes/conexao.php";

  $id = "";
  $nome = "";
  $sobrenome = "";
  $nascimento = "";
  $genero = "";
  $cpf = "";
  $telefone = "";
  $email = "";
  $senha = "";

  if(isset($_GET['id'])){

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);

    $nome = $row['nome'];
    $sobrenome = $row['sobrenome'];
    $nascimento = $row['nascimento'];
    $genero = $row['genero'];
    $cpf = $row['cpf'];
    $telefone = $row['telefone'];
    $email = $row['email'];
    $senha = $row['senha'];

  } else {

    echo "FALSE";
  }

 ?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cadastro de usuário</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="">
      <h1 class ="p1"></h1></br></br>
    </div>
    <div class="form">
    <form action="cadastro-usuario.php" method="POST">

      <fieldset>

        <legend class="p3">Editar dados de cadastro</legend>

        <label for="id">Id</label>
        <input class="campo" type="hidden" name="id" value="<?php echo $id; ?>"/>

        <label for="Nome">Nome</label>
        <input class="campo" type="text" name="nome" value="<?php echo $nome; ?>"/>

        <label for="sobrenome">Sobrenome</label>
        <input class="campo" type="text" name="sobrenome" value="<?php echo $sobrenome; ?>"/>

        <label for="nascimento">Data de Nascimento</label>
        <input class="campo" type="date" name="nascimento" min="1900-01-01" max="2015-01-01" value="<?php echo $id_item; ?>"/>

        <label for="genero">Gênero</label>
          <select id="genero" name="genero">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
          </select>

        <label for="cpf">CPF</label>
        <input class="campo" type="text" name="cpf" pattern=".{11,11}" placeholder="11 caracteres" value="<?php echo $cpf; ?>"/>

        <label for="telefone">Telefone</label>
        <input class="campo" type="text" name="telefone" value="<?php echo $telefone; ?>"/>

        <label for="email">Email</label>
        <input class="campo" type="text" name="email" value="<?php echo $email; ?>">

        <label for="senha">Senha</label>
        <input class="campo" type="password" id="senha" name="senha" placeholder="De 6 a 20 caracteres" pattern=".{6,20}"
        placeholder="Mínimo 8 caracteres"/></br></br>

        <input type="submit" value="Gravar" /></br>

      </fieldset>

    </form>
    </div>

    <div class="p2">
          <p> Para retornar <a href="principal.php"> clique aqui! </a></p>
    </div>

  </body>
</html>
