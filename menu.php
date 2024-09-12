<div>
    <ul>
        <li><a href="index.php">Home</a></li>

        <?php
            if(!empty ($_SESSION['login'])):
        ?>

        <li><a href="Cadatro-Cidade.php">Cadastrar Cidade</a></li>
        <li><a href="Listar-Cidade.php">Listar Cidade</a></li>
        <li><a href="Cadatro-Cliente.php">Cadastrar Cliente</a></li>
        <li><a href="Listar-Cliente.php">Listar Cliente</a></li>
        <li><a href="logout.php">Logout</a></li>

        <?php
            echo "<li><a> Olá ". $_SESSION['login']['nome'] . "</a></li>";
            endif;
        ?>

    </ul>
</div>