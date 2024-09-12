<php>
    include('include/conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql   = "SELECT * FROM cliente
            WHERE email = '$email'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_
    }
</php>