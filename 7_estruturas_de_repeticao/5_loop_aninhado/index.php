<?php


$a = 1;

while ($a <= 10) {
    echo "executando o loop $a <br>";

    // seundo contador
    $j = 1;

    while($j <= 5) {

        echo "loop interno $j <br>";

        $j++;
    }

    $a++;
}