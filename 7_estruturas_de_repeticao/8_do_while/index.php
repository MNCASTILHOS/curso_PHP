<?php

$j = 0;

$teste = "miriam";

do {
    echo "testando do while $j <br>";

    if($j == 2){
        echo "$teste <br>";
    }

    $j++;
} while ($j < 10);

// do while decremento

$i = 10;

do{

    echo "testando o while 2 $i <br>";

    if($i == 2){
        echo "$teste <br>";
    }

    $i--;

} while ($i > 0);