<?php

if(10 > 5) {
    echo "entrou no if 1<br>";

} else if (10 > 6) {
    echo "entrou no else if 1<br>";
}

if(10 < 5) {
    echo "entrou no if 2 <br>";

} else if (10 > 6) {
    echo "entrou no else if 2 <br>";
}

if(10 < 5) {
    echo "entrou no if 3 <br>";
} else {

    echo "entrou no else 3 <br>";
}


if(10 < 5) {
    echo "entrou no if 4 <br>";

} else if (10 < 6) {
    echo "entrou no else if 4 <br>";

} else if (11 > 1) {
    echo "entrou no else if 4 <br>";

} else {

    echo "entrou no else 4 <br>";
}

$a = 10;
$b = 5;
$msg = "entrou no else if";

if(10 < 5) {
    echo "entrou no if 4 <br>";

} else if ($a > $b) {
   echo $msg;

} else if (11 > 1) {
    echo "entrou no else if 4 <br>";

} else {

    echo "entrou no else 4 <br>";
}