<?php

class Pessoa {

    public $nome;
    public $idade;


    function andar($m) {
        echo "a pessoa andou $m metros <br>";
    }
}

$miriam = new Pessoa;

$miriam->nome = "Miriam";
$miriam->idade = 24;

echo "o nome dela é $miriam->nome e tem $miriam->idade anos <br>";

$miriam->andar(30);

$paula = new Pessoa;

$paula->nome = "paula";
$paula->idade = 30;

echo "o nome dela é $paula->nome e tem $paula->idade anos <br>";




