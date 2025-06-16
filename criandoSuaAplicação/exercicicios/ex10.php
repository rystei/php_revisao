<?php
//Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.

$notas = [1,2,3,4,5,6,7,8,9,10];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "Aprovado" : "Reprovado";
    echo $nota . " Você foi $resultado \n";
    
}