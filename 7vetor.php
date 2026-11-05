<?php

$numeros = [ 2, 5, 7];

foreach ($numeros as $num) {
    echo "\nTabuada do número: $num\n";

    for ($mult = 1; $mult <=10; $mult++) {
        $result = $mult * $num;
        echo "$mult x $num = $result\n";
    }
}

?>