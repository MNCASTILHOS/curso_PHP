<?php

$pessoa = new class() {

    public $nome = "Paulo";

    public function dizerNome() {
        echo "olá meu nome é $this->nome <br>";

    }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();