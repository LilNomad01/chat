<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="LoginStyle.css">
</head>
<body>
    <a href="index.php">Voltar</a>
<div class="tela-login">
    <fieldset> 
        <legend>Univap</legend>
        <h2>Login</h2>
        <form action="testeLogin.php" method="GET">
            <div class="inputbox">
                <input type="text" name="nome" id="nome" placeholder="nome"><br>
                <br>
                <div class="inputbox">
                    <input type="text" name="matricula" id="matricula" placeholder="matricula">
                </div><br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" placeholder="senha">
                </div><br>
                <input class="enviar" type="submit" name="submit" value="enviar">
            </div>
    </fieldset>
</div>  
        </form>
</body>
</html>