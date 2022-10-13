<?php

$a = 25;
$c = "caderno";
$e = 90;

if(is_int($a) || is_float($a)) {
    $mult = $a * 2;

    if ($mult > 100) { 
        echo "o numero é maior que 100 <br>";
    
    } else {
        echo "o numero não é maior que 100 <br>";
    }

} else {
    echo "não é um numero <br>";


}if(is_int($e) || is_float($e)) {
    $mult = $e * 2;

    if ($mult > 100) { 
        echo "o numero é maior que 100 <br>";
    
    } else {
        echo "o numero nãoé maior que 100 <br>";
    }


} else {
    echo "não é um numero <br>";
}


if(is_int($c) || is_float($c)) {
    $mult = $c * 2;

    if ($mult > 100) { 
        echo "o numero é maior que 100 <br>";
    
    } else {
        echo "o numero nãoé maior que 100 <br>";
    }


} else {
    echo "não é um numero <br>";
}

