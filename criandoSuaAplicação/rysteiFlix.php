<?php

echo "Bem-vindo(a) ao rysteiFlix sua plataforma de Streamer \n" ;

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Gente Grande";
$nomeFilme = "Thor - Ragnarok";

$anoLancamento = $argv[1] ?? 2022;

$somaNotas = 9 ;
$somaNotas += 6;
$somaNotas += 8 ;
$somaNotas += 7.5;
$somaNotas += 5;

$notaFilme = $somaNotas / 5;

$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo "Nome do filme: " . $nomeFilme ,"\n";
echo "Nota do filme: " . $notaFilme , "\n";
echo "Ano de lançamento: " . $anoLancamento, "\n";

if ($anoLancamento > 2022) {
    echo"esse filme é um lançamento \n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo"esse filme ainda é novo \n";
} else {
    echo"esse filme não é um lançamento \n";
}


$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor - Ragnarok" => "Super-Heroi",
    "Gente Grande" => "Comedia",
    default => "Gênero Desconhecido",
};

echo "O gênero do filme é: $genero \n";