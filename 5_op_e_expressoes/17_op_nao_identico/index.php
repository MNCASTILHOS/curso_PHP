<?php

$a = 1;
$b = "1";

if($a != $b) {
    echo "A é diferente de B 1 <br>";
}

if($a !== $b) { //1 não é identico a "1"?
        echo "A é diferente de B 2 <br>";
}

if(1 !== 2) { //1 não é identico a 2?
    echo "não é identico 3 <br>";
}

if(1 != "1") { // 1 não é igual a "1"?
    echo "não é identico 4<br>";
}