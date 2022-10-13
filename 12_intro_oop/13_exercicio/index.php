<?php

class Humano {

    public $caminhar;
    public $comer;
    public $respirar;

    public function falar(){

        echo "Olá pessoal! <br>";
    }
}

class Professor extends Humano {

    public $nome;
    public $turma;
    public $graduacao;

    public function ensinar(){

        echo "2 + 2 é igual a 4! <br>";
    }
}

$paulo = new Professor;

$paulo->caminhar = 30;
$paulo->comer = "pizza";
$paulo->respirar = "oxigenio";

echo $paulo->caminhar . "<br>";
echo $paulo->comer . "<br>";
echo $paulo->respirar . "<br>";

$paulo->falar();
$paulo->ensinar();