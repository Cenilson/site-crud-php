<?php

$conn = mysqli_connect("localhost", "root", "","atp"); //verificar se a senha é root
if($conn == False){
  die("ERRO: Não foi possível conectar com MySQL." . mysqli_connect_error());
}

 ?>
