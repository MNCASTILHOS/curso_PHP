<?php

$a = true;

if(is_bool($a)) {
    echo "é um booleano <br>";
}

if(is_bool(0)) {
    echo "é um booleano 2 <br>";
}

if(is_bool(false)) {
    echo "é um booleano 3 <br>";
}

if(0.0 == false) {
    echo "0 é consierado falso! <br>";
}