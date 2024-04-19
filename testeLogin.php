<?php
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) && !empty($_POST['nome']))
{
    // Acessa sistema
    include_once('config.php');
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE nome = '$nome' and email = '$email' and senha = '$senha'";
    $result = $conexao->query($sql);

    if(mysqli_num_rows($result) > 0)
    {
        // Usuário válido, redirecionar para Home.php
        header('Location: Home.php');
        exit;
    } else {
        echo "Usuário ou senha inválidos.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>
