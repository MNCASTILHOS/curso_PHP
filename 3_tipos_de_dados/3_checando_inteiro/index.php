<?php

if(is_int(5)) { //true
    echo "é inteiro 1 <br>";
}

if(is_int("Não é inteiro")) { //salse
    echo "não é inteiro <br>";
}

$a = 10;

if(is_int($a)) { //true
    echo "é inteiro 2 <br>";
}