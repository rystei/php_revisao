<?php
//Desenvolva um programa que exiba na tela uma saudação (bom dia, boa tarde ou boa noite)
//dependendo do horário encontrado em uma variável (inteiro representando as horas).

echo date("H");
$horas = date("H");

if ($horas < 12) {
    echo "Bom dia";
} elseif ($horas >= 12 && $horas < 18) {
    echo "Boa tarde";
} else {
    echo "Boa noite";
}