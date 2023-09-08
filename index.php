<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title></title>
  </head>
  <header>
    <h1 class ="p1"></h1></br></br>
  </header>
  <body>
    <div>

      <?php
        if(isset($_GET['erro'])){
          echo '<p style="text-align:center;color:orange;">Usuário e/ou senha incorreto(s)</p>';
        }

        if(isset($_GET['autentica'])){
          echo '<p style="text-align:center; color:orange;">Realize login ou cadastre uma conta.</p>';
        }

      ?>
      <form class="form" action="login.php" method="POST">
        <fieldset>
          <legend class="p3">Faça o login</legend>
          <label for="email">Email</label>
          <input class="campo" type="text" name="email" id="email" required>
          <label for="senha">Senha</label>
          <input class="campo" type="password" name="senha" id="senha" minlenght="6" maxlength="20" required></br></br>
          <input type="submit" value="Entrar"/></br>
        </fieldset>
      </form>
    </div>
    <p class="p2"> Se quiser se cadastrar <a href="cadastro.php">clique aqui!</a></p>
  </body>
  <section></section>
  <footer><p class="p4">2021 | Todos os direitos reservados</p></footer>

</html>
