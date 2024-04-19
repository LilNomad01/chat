
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presença</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(100deg, white, blue, red);
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-top-left-radius: 30px;
            border-bottom-right-radius: 70px;
            color: white;
        }
        fieldset{
            border-top-left-radius: 30px;
            border-bottom-right-radius: 50px;
            border: 3px solid dodgerblue;
            padding: 15px;
        }
        legend{
            border: 1px solid dodgerblue;
            padding: 5px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 15px;
            padding: 5px;
            border-top-right-radius: 5px;
            border-bottom-left-radius: 5px;
            background-color: dodgerblue;
      }
      a:hover{
        background-color: red;
        border: 6px solid red;
      }
    </style>
</head>
<body>
<a href="home.php">Sair</a>
<div class="box">
        <fieldset>
            <legend>
                Presença marcada com sucesso
            </legend>
<?php
// Configura o fuso horário para Brasília, Brasil
date_default_timezone_set('America/Sao_Paulo');

session_start();

// Obtém a data e hora atual
$dataHoraAtual = date('d/m/Y H:i:s');

// Verifique se o aluno já marcou presença hoje
if (isset($_SESSION['dias_presenca'])) {
    // Se já existe uma matriz de dias de presença, adiciona o dia atual se ainda não estiver registrado
    $diasPresenca = $_SESSION['dias_presenca'];
    $hoje = date('d-m-y');
    
    if (!in_array($hoje, $diasPresenca)) {
        $diasPresenca[] = $hoje;
    }
} else {
    // Se não existe uma matriz de dias de presença, cria uma nova com o dia atual
    $diasPresenca = [date('d-m-y')];
}

// Data do início e término do ano letivo (exemplo)
$inicioAnoLetivo = strtotime('2023-01-01'); // Data de início do ano letivo
$terminoAnoLetivo = strtotime('2023-12-31'); // Data de término do ano letivo

// Número de dias com presença
$numDiasComPresenca = count($diasPresenca);

// Número total de dias letivos no ano
$numDiasLetivos = ceil(($terminoAnoLetivo - $inicioAnoLetivo) / (60 * 60 * 24)); // Calcula dias entre as datas

// Registra a presença e atualiza a data e a hora
$_SESSION['ultima_presenca'] = date('d-m-y H:i:s'); // Armazena data e hora

// Exibe o contador de presença letiva e o número de aulas restantes
echo "<h2>Contador de Presença Letiva:</h2>";
echo "<p>{$numDiasComPresenca}/{$numDiasLetivos}</p>";

// Calcula quantos dias letivos restam até o final do ano
$diasRestantes = $numDiasLetivos - $numDiasComPresenca;
echo "<h2>Dias Letivos Restantes:</h2>";
echo "<p>{$diasRestantes} dias</p>";

// Adicione um echo para mostrar a data e hora da última presença
if (isset($_SESSION['ultima_presenca'])) {
    echo "<h2>Última presença registrada:</h2>";
    echo "Data e Hora: " . date('d/m/Y H:i:s', strtotime($_SESSION['ultima_presenca'])) . " (Horário de Brasília)";
} else {
    echo "<h2>Nenhuma presença registrada anteriormente.</h2>";
}

// Exibe todos os dias de presença registrados
echo "<h2>Dias de Presença Registrados:</h2>";
if (!empty($diasPresenca)) {
    echo "<ul>";
    foreach ($diasPresenca as $dia) {
        echo "<li>{$dia}</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Nenhum dia de presença registrado anteriormente.</p>";
}


// Atualiza a matriz de dias de presença na sessão
$_SESSION['dias_presenca'] = $diasPresenca;
?>
            </fieldset>
        </form>
    </div>
</body>

</body>
</html>