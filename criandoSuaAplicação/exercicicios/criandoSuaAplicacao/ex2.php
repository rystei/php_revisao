<?php
// 2 - Crie um programa em PHP que calcule a média de três notas e exiba o resultado.

$nota1 = 10;
$nota2 = 7.7;
$nota3 = 9.2;
$media = ($nota1 + $nota2 + $nota3) / 3;
echo "A média das notas é: " .number_format( $media, 2) ,"\n";
