<?php
include('../include/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$email = $_POST['email'];
$ativo = $_POST['ativo'] == "sim" ? true : false;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Alteração de cidade</h1>
    <?php
    echo "<p>Id: $id</p>";
    echo "<p>Nome: $nome</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Senha: $senha</p>";
    echo "<p>Ativo: " . $ativo ? "Sim" : "Não" . "</p>";
    $sql = "UPDATE cliente SET nome = '$nome', email = '$email', senha = '$senha', ativo = $ativo WHERE id = $id";
    $result = mysqli_query($con, $sql);
    if ($result)
        echo "Dados atualizados!";
    else
        echo "Erro ao atualizar dados!\n" . mysqli_error($con);
    ?>
    <button class="botao"><a href="./Listar-Cliente.php">Voltar</a></button>
</body>

</html>
