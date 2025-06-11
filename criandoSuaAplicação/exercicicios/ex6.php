<?php
//1 - Escreva um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100.

$numero = 0;

for ($numero=0; $numero <= 100 ; $numero++) { 
    if ($numero % 2 != 0) {
    echo "$numero \n";
}
}