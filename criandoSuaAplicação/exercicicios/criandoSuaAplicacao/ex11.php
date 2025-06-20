<?php
// Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.

$contaBancaria = [
    "titular" => "Gustavo",
    "saldo" => "500.00",
];

foreach ($contaBancaria as $chave => $valor) {
    echo ucfirst($chave) . ": $valor\n";
}
