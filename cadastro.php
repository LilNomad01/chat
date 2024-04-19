<?php

if(isset($_POST['submit']))
{
   // print_r($_POST['nome']); 
   // print_r('<br>');
   // print_r($_POST['email']);
   // print_r('<br>');
   // print_r($_POST['matricula']);
    //print_r('<br>');
    //print_r($_POST['senha']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $matricula = $_POST['matricula'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,matricula,senha)VALUES ('$nome','$email','$matricula','$senha')"); 

    if ($result) {
        header("Location: Login.php"); // Replace 'home.php' with the actual URL of your home page.
        exit();                                                                                                                                                                                                                                                                                                                                         
    }

}
 
?> 
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link rel="stylesheet" href="CadastroStyle.css">
</head>
<body>
<a href="index.php">Voltar</a>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <fieldset>
                <legend><b>Formulario do Aluno</b></legend>
                <br><div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div> <br>
                <br><div class="inputbox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput" >Email</label>    
                </div><br>
                <br><div class="inputbox">
                    <input type="text" name="matricula" id="matricula" class="inputUser" required>
                    <label for="matricula" class="labelInput">Matrícula</label>
                </div><br>
                <br><div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br><input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>

</body>
</html>