<?php

$numeros = [7, 3, 2, 8, 5];

foreach ($numeros as &$num){
    $num = $num * 2;
}

unset($num);
print_r($numeros);

?>