<?php

echo "Bem-vindo(a) ao rysteiFlix sua plataforma de Streamer \n" ;

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Gente Grande";
$nomeFilme = "Thor - Ragnarok";

$anoLancamento = 2022;

$quantidadeDeNotas = $argc - 1;
$somaDeNotas = 0;

for ($contador = 1; $contador < $argc; $contador++) { 
    $somaDeNotas += $argv[$contador];
}

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
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
echo $argc , "\n";