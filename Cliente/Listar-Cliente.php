<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Style.css">
    <title>Document</title>
</head>

<body>
    <div class="principal flex inverter_column">
        <button class="botao"><a href="../index.html">Voltar</a></button>
        <?php
        include('../include/conexao.php');
        $sql = "SELECT * FROM cliente";
        // Executa a consulta
        $result = mysqli_query($con, $sql);
        ?>
        <h1>Consulta de Cidades</h1>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Senha</th>
                <th>Ativo</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </tr>
            <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nome'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['senha'] . "</td>";
                echo "<td>" . $row['ativo'] ? "Sim" : "Não" . "</td>";
                echo "<td><a href='Altera-Cliente.php?id=" . $row['id'] . "'>Alterar</a></td>";
                echo "<td><a href='Deleta-Cliente.php?id=" . $row['id'] . "'>Deletar</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>
