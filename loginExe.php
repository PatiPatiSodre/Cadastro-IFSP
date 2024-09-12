<?php
    include('include/conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql   = "SELECT * FROM cliente
            WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        if($row['senha'] == $senha)
        {
            include('inicia_sessao.php');
            $_SESSION['login'] = $row;
            // volta para a apagina inicial
            header('Location: index.php');
        }else
        {
            echo "<h1>Senha inválida!
            Sua senha é " . $row['senha'] . "</h1>";
        }

    }else
    {
        echo "<h1>Usuário não encontrado!</h1>";
    }
?>