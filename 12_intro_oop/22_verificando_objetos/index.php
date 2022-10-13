<?php

class Humano {

    public function falar() {
        echo "olá <br>";
    }
}

$matheus = new Humano;

$teste = 10;

if(is_object($matheus)) {
    echo "é um objeto <br>";
}else {
    echo "não é um objeto <br>";
}

if(is_object($teste)) {
    echo "é um objeto <br>";
}else {
    echo "não é um objeto <br>";
}

echo get_class($matheus) . "<br>";

if(method_exists($matheus, "falar")) {
    echo "metodo existe <br>";
}else {
    echo "metodo não existe <br>";
}


if(method_exists($matheus, "asd")) {
    echo "metodo existe <br>";
}else {
    echo "metodo não existe <br>";
}
