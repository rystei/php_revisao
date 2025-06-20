<?php
// Crie um programa que, a partir de altura e peso, calcule o IMC e exiba a classificação do IMC.

$altura = 1.72;
$peso = 70;
$imc = $peso / ($altura * $altura); 

if ($imc <= 18.5) {
    echo "Magreza";
} elseif ($imc > 18.5 && $imc <= 24.9) {
    echo "Normal";
}elseif ($imc > 24.9 && $imc <= 29.9) {
    echo "Sobrepeso";
}elseif ($imc > 29.9 && $imc <= 34.9) {
    echo "Obesidade grau I";
}elseif ($imc > 34.9 && $imc <= 39.9) {
    echo "Obesidade grau II";
} else {
    echo "Obesidade grau III";
}