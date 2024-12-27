<?php
    $busca = 'texto qualquer'; 

    switch ($busca) { // COMPARAÇÃO por igualdade/equalidade
        case '1':
            $retornoSwitch = 'Encontrou o valor 1';
            break;
        case '2':
            $retornoSwitch = 'Encontrou o valor 2';
            break;
        default:
            $retornoSwitch = 'Não encontrou';

    }

    echo "Resultado: " . $retornoSwitch;
    echo "<hr>";
    /*
   $retornoMatch = match ($busca) {  // COMPARAÇÃO por identidade/estrita 
        '1' => 'Encontrou o valor 1',
        1 => 'Encontrou o valor número 1',
        6,'5',10, 'texto qualquer' => 'encontrou ' . $busca,

        default => 'Não encontrou'
   };
   echo "Resultado Match: " . $retornoMatch;
*/
   // match com condionais e operacoes logicas
$retornoMatch = match (true) {
    $busca > 0 => 'Valor positivo',
    $busca < 0 => 'Valor negativo',
    default => 'Valor zero'
};






?>