<?php

use Cachorro as GlobalCachorro;

class Cachorro {

    public $nome;
    public $cor;
    public $raca;

    function __construct($nome, $cor, $raca) {
        $this->nome = $nome;
        $this->cor = $cor;
        $this->raca = $raca;

    }

    public function exibirAnimal() {

        echo "O nome do cachorro é $this->nome, e é da raça $this->raca e é da cor $this->cor <br>";
    }
    
}

$leci = new GlobalCachorro("Leci", "preta", "Vira-lata");

$leci->exibirAnimal();

$guri = new GlobalCachorro("Guri", "branco", "Pastor Alemão");

$guri->exibirAnimal();

