<?php

$altura = (float)readline("Informe a altura: ");
$peso = (float)readline("Informe o peso: ");

$imc = $peso / pow($altura, 2);

echo "IMC: " . number_format($imc, 2) . "\n";

if ($imc < 18.5) {
    echo "Classificação: Magreza\n";
} elseif ($imc < 25) {
    echo "Classificação: Normal\n";
} elseif ($imc < 30) {
    echo "Classificação: Sobrepeso\n";
} elseif ($imc < 35) {
    echo "Classificação: Obesidade Grau 1\n";
} elseif ($imc < 40) {
    echo "Classificação: Obesidade Grau 2\n";
} else {
    echo "Classificação: Obesidade Grau 3\n";
}
