<?php

interface Caracteristicas {

    const nome = "matheus";

    public function falar();

}

class Humano implements Caracteristicas {

    public $idade = 29;

    public function falar() {
        echo "olá mundo <br>";
    }

    public function dizerNome() {

        echo "meu nome é" . self::nome . "<br>";
    }
}

$matheus = new Humano;

$matheus->falar();

$matheus->dizerNome();