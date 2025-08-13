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
    <style>body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;
            padding: 30px;
            background-color: rgb(250, 198, 164);
            background-image: url("https://st3.depositphotos.com/1743476/15014/i/950/depositphotos_150142562-stock-photo-group-of-doctors-meeting.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        main {
            width: 50%;
            height: 600px;
            background-color: rgb(248, 141, 69);
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.438);
            border: 2px solid #000;
        }

        form {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        fieldset {
            border: none;

        }

        .buttons {
            display: flex;
            justify-content: center;
        }

        h1{
            text-align: center;
        }

        fieldset{
            padding: 10%;
            margin: 60px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            text-align: center;
        }
        </style>
</head>
<body>
    <main>
        <form action="">
            <fieldset>
                <?php
                echo "<h1>Resultado do IMC</h1>";
                echo "<p>Nome: $nome</p>";
                echo "<p>Idade: $idade anos</p>";
                echo "<p>Peso: $peso kg</p>";
                echo "<p>Altura: $altura m</p>";
                echo "<p>Sexo: $sexo</p>";
                echo "<p>IMC: " . number_format($imc, 2, ',', '.') . "</p>";
                echo "<p>Classificação: $resultado</p>";
                ?>
            </fieldset>
        </form>
    </main>
</body>
</html>