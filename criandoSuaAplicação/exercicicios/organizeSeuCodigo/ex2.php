<?php
//Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.

function imc (float $peso, float $altura): float{
    $imc = $peso / ($altura * $altura);
    return $imc;
}