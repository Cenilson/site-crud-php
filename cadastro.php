
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
      <h1 class ="p1">Bem vindo!!!</h1></br></br>
    </div>
    <div class="form">
    <form action="cadastro-usuario.php" method="POST">
      <fieldset>
        <legend class="p3">Preencha seus dados</legend>
        <label for="Nome">Nome</label>
        <input class="campo" type="text" id="nome" name="nome" required>
        <label for="sobrenome">Sobrenome</label>
        <input class="campo" type="text" id="sobrenome" name="sobrenome" required>
        <label for="nascimento">Data de Nascimento</label>
        <input class="campo" type="date" id="nascimento" name="nascimento" min="1900-01-01" max="2015-01-01" required>
        <label for="genero">Gênero</label>
          <select id="genero" name="genero">
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
          </select>
        <label for="cpf">CPF</label>
        <input class="campo" type="text" id="cpf" name="cpf" pattern=".{11,11}" placeholder="11 caracteres" required>
        <label for="telefone">Telefone</label>
        <input class="campo" type="text" id="telefone" name="telefone" required>
        <label for="email">Email</label>
        <input class="campo" type="text" id="email" name="email" required>
        <label for="senha">Senha</label>
        <input class="campo" type="password" id="senha" name="senha" placeholder="De 6 a 20 caracteres"pattern=".{6,20}"
        placeholder="Mínimo 8 caracteres" required></br></br>
        <input type="submit" value="Gravar"/></br>
      </fieldset>
    </form>
    </div>
    <div class="p2">
        <p> Para retornar <a href="principal.php"> clique aqui! </a></p>
    </div>

  </body>
</html>
