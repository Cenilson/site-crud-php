<?php

$conn = mysqli_connect("localhost", "root", "","atp"); //verificar se a senha é root

if($conn == False){
  die("ERRO: Não foi possível conectar com MySQL." . mysqli_connect_error());
}

$id = $_POST['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$nascimento = $_POST['nascimento'];
$genero = $_POST['genero'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (empty($id)){

//Monta SQL para inserção de dados do form MySQL
$sql =  "INSERT INTO usuarios (nome, sobrenome, nascimento, genero, cpf, telefone, email, senha)
VALUES ('$nome', '$sobrenome', '$nascimento', '$genero', '$cpf', '$telefone', '$email', '$senha')";

  $res = mysqli_query($conn, $sql);
  if($res) {

    header("Location: principal.php");
  }
  else {
      echo "Erro ao inserir dados";
    }
  }
  else {
  $sql = "UPDATE usuarios SET
                nome = '$nome',
                sobrenome = '$sobrenome',
                nascimento = '$nascimento',
                genero = '$genero',
                cpf = '$cpf',
                telefone = '$telefone',
                email = '$email',
                senha = '$senha'
          WHERE
                id = $id";

$res = mysqli_query($conn, $sql);
if($res) {

  header("Location: lista-usuarios.php");
}
else {
  echo "Erro ao editar dados";

  echo $sql;

  }
}
?>
