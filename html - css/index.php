<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>DOcumento</title>
  </head>
  <body>
    <?php
      include('inicia_sessao.php');
      if(empty($_SESSION['login'])){
          header("Location: login.php");
      }

      include('menu.php');
      //session_destroy()

    ?>

    <div class="principal flex">
      <button class="botao">
        <a href="./Cadastro-Cidade.html">Cadastrar</a>
      </button>
      <button class="botao"><a href="./Listar-Cidade.php">Visualizar</a></button>
    </div>
  </body>
</html>
