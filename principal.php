
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
    <article class="">
      <p class="p2"> <?php echo $_SESSION['nome'];?> acesse o menu a esquerda para opções</p></br></br>
    </article>

    <?php
      include "includes/menu.php"
     ?>
    <section></section>
  </body>
  </div>
</html>
