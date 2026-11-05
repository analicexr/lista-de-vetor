<?php

$notas = [10, 7, 5, 6, 4];
$soma = 0;

foreach ($notas as $nota) {
    $soma += $nota;
}

$qnotas = count($notas);
$media = $soma / $qnotas;

echo "notas: " . implode(", ", $notas) . "\n";
echo "A média aritmética das $qnotas notas é: " . number_format($media, 2, ',', '.') . "\n";

?>