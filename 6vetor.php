<?php

$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$par = 0;
$impar = 0;

foreach ($numeros as $num){
    if ($num % 2 === 0){
        $par++;
    } else {
        $impar++;
    }
}

echo "Vetor de números: " . implode(', ', $numeros) . "\n";
echo "Quantidade de números pares: " . $par . "\n";
echo "Quantidade de números ímpares: " . $impar . "\n";

?>