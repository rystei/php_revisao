<?php
echo "************\n";
$conta = [
    'titular' => 'Gustavo',
    'saldo_atual' => 1000.00,
];

foreach ($conta as $key => $value) {
    echo ucfirst($key) . ":$value \n";
}

function mostrarConta($conta)
{
    echo "Titular: {$conta['titular']}\n";
    echo "Saldo_atual: R$ " . number_format($conta['saldo_atual'], 2, ',', '.') . "\n";
}

function sacar(&$conta)
{
        echo "informe o valor do saque\n";
        $sacar = (float) fgets(STDIN);
        if ($sacar <= $conta["saldo_atual"]) {
            $conta["saldo_atual"] -= $sacar;
            echo "Saque de R$ $sacar realizado com sucesso.\n";
        } else {
            echo "saldo insuficiente \n";
        }
        echo $conta["saldo_atual"];
}

function depositar(&$conta){
            echo "Informe o valor a depositar: ";
        $depositar = (float) fgets(STDIN);
        $conta["saldo_atual"] += $depositar;
        echo "Depósito de R$ $depositar realizado com sucesso.\n";
}


$menu = 0;
while ($menu != 4) {
    echo "\n************\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    $menu = (int) fgets(STDIN);

    switch ($menu) {
        case 1:
            mostrarConta($conta);
            break;
        case 2:
            sacar($conta);
            break;
        case 3:
            depositar($conta);
            break;
        case 4:
            echo "Adeus!\n";
            break;
        default:
            echo "Opção indefinida!\n";
            break;
    }

}
