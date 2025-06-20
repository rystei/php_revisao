<?php
//Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.

function operacaoMatematica(int $numero1, int $numero2, string $operacao): float
{
    if ($operacao === 'divisao' && $numero2 === 0) {
        return 'Não aceita 0 para a divisão';
    }

    return match ($operacao) {
        'soma' => $numero1 + $numero2,
        'subtracao' => $numero1 - $numero2,
        'multiplicacao' => $numero1 * $numero2,
        'divisao' => $numero1 / $numero2,
        default => 'escolha uma das operações',
    };
}
