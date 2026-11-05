<?php

$numeros = [5, 10, 15, 20, 25];
$soma = 0;

foreach ($numeros as $num){
    $soma += $num;
}

echo "A soma de todos os elementos é: " . $soma;

?>