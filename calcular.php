<?php

$nome = $_POST ["nome"];
$idade = $_POST ["idade"];
$peso = $_POST ["peso"];
$altura = $_POST ["altura"];
$sexo = $_POST ["sexo"];

$imc = $peso / ($altura * $altura);

if ($sexo == "masculino") {
    if ($imc < 18.5) {
        $resultado = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $resultado = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $resultado = "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        $resultado = "Obesidade grau I";
    } elseif ($imc >= 35 && $imc < 39.9) {
        $resultado = "Obesidade grau II";
    } else {
        $resultado = "Obesidade grau III";
    }
} else if ($sexo == "feminino") {
    if ($imc < 18.5) {
        $resultado = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 23.9) {
        $resultado = "Peso normal";
    } elseif ($imc >= 24 && $imc < 28.9) {
        $resultado = "Sobrepeso";
    } elseif ($imc >= 29 && $imc < 33.9) {
        $resultado = "Obesidade grau I";
    } elseif ($imc >= 34 && $imc < 38.9) {
        $resultado = "Obesidade grau II";
    } else {
        $resultado = "Obesidade grau III";
    }
} else {
    // Caso não informado, usa padrão OMS
    if ($imc < 18.5) {
        $resultado = "Abaixo do peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $resultado = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $resultado = "Sobrepeso";
    } elseif ($imc >= 30 && $imc < 34.9) {
        $resultado = "Obesidade grau I";
    } elseif ($imc >= 35 && $imc < 39.9) {
        $resultado = "Obesidade grau II";
    } else {
        $resultado = "Obesidade grau III";
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <style>
        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: #f7f7f7;
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
        main {
            width: 100%;
            max-width: 400px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            padding: 32px 24px;
            border: none;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        h1 {
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 24px;
            color: #ff7f50;
            letter-spacing: 1px;
        }
        .info {
            font-size: 1rem;
            color: #444;
            margin: 8px 0;
        }
        .imc {
            font-size: 1.3rem;
            font-weight: 500;
            color: #0077b6;
            margin: 18px 0 8px 0;
        }
        .classificacao {
            font-size: 1.1rem;
            font-weight: 500;
            color: #ff7f50;
            margin-bottom: 16px;
        }
        .label {
            font-weight: 600;
            color: #888;
        }
    </style>
</head>
<body>
    <main>
        <form action="">
            <fieldset>
                <?php
                echo "<h1>Resultado do IMC</h1>";
                echo "<div class='info'><span class='label'>Nome:</span> $nome</div>";
                echo "<div class='info'><span class='label'>Idade:</span> $idade anos</div>";
                echo "<div class='info'><span class='label'>Peso:</span> $peso kg</div>";
                echo "<div class='info'><span class='label'>Altura:</span> $altura m</div>";
                echo "<div class='info'><span class='label'>Sexo:</span> $sexo</div>";
                echo "<div class='imc'>IMC: " . number_format($imc, 2, ',', '.') . "</div>";
                echo "<div class='classificacao'>Classificação: $resultado</div>";
                ?>
            </fieldset>
        </form>
    </main>
</body>
</html>