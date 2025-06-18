<?php

function exibeMensagemLancamento($ano)
{
    if ($ano > 2022) {
        echo "esse filme é um lançamento \n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "esse filme ainda é novo \n";
    } else {
        echo "esse filme não é um lançamento \n";
    }
}

echo "Bem-vindo(a) ao rysteiFlix sua plataforma de Streamer \n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Gente Grande";
$nomeFilme = "Thor - Ragnarok";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$notas = [];

for ($contador = 1; $contador < $argc; $contador++) {
    $notas[] = (float) $argv[$contador];
}

$notaFilme = array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme, "\n";
echo "Nota do filme: " . $notaFilme, "\n";
echo "Ano de lançamento: " . $anoLancamento, "\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor - Ragnarok" => "Super-Heroi",
    "Gente Grande" => "Comedia",
    default => "Gênero Desconhecido",
};

echo "O gênero do filme é: $genero \n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói",
];


echo $filme["ano"];
