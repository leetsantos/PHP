<?php
    $n= readline("Digite o numero que quer ver a tabuada:  ");

    for ($i=1; $i<=10; $i++) {
        $tem = $n * $i;
        echo "$n x $i = $tem" . PHP_EOL;
    }