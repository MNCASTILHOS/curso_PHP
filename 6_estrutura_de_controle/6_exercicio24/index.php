<?php

$a = 33;
$b = "Paulo";
$c = true;
$d = "33";

if ($a === $b) {
    echo "entrou no if 1 <br>";
} else {
    echo "entrou no else 1 <br>";
}

if ($c === $b) {
    echo "entrou no if 2 <br>";
} else {
    echo "entrou no else 2 <br>";
}

if ($a == $c) {
    echo "entrou no if 3 <br>";
} else {
    echo "entrou no else 3 <br>";
}

if ($a == $d) {
    echo "entrou no if 4 <br>";
} else {
    echo "entrou no else 4 <br>";
}