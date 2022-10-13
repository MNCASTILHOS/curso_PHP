<?php

class Carro {

    public $marca;
    public $ano;
    public $cor;
    public $velocidadeMaxima;


    function setVelocidadeMaxima($velocidade) {
        $this->velocidadeMaxima = $velocidade;
    }

    function getVelocidadeMaxima() {
        echo "a velocidade maxima deste carro é:$this->velocidadeMaxima km/h <br>";
    }
}

$ferrari = new Carro;

$ferrari->cor = "preto";
$ferrari->marca = "ferrari";
$ferrari->ano = 2000;

$ferrari->setVelocidadeMaxima(300);

$ferrari->getVelocidadeMaxima();

$gol = new Carro;

$gol->setVelocidadeMaxima(200);

$gol->getVelocidadeMaxima();

