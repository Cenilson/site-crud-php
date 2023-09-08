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
        <legend class="p3">Cadastrar novo item</legend>
        <label for="item">Item</label>
        <input class="campo" type="text" id="item" name="item" required>
        <label for="descricao">Descrição</label>
        <textarea id="descricao" name="descricao" rows="4" cols="30" placeholder="máx. 250 caracteres"></textarea>
        <label for="nome">Data de devolução</label>
        <input class="campo" type="date" id="devolucao" name="devolucao">
        <label for="nome_dest">Nome destinatário</label>
        <input class="campo" type="text" id="nome_dest" name="nome_dest" required>
        <label for="email_dest">Email destinatário</label>
        <input class="campo" type="text" id="email_dest" name="email_dest" required>
        <label for="fone_dest">Fone destinatário</label>
        <input class="campo" type="text" id="fone_dest" name="fone_dest"required></br></br>
        <input type="submit" value="Gravar"/></br>
      </fieldset>
    </form>
    </div>
    <div class="p2">
        <p> Retornar a página principal? <a href="principal.php"> Clique aqui! </a></p>
    </div>

  </body>
</html>
