<?php

use Programador as GlobalProgramador;

class Humano {

    public $idade = 29;

    public function falar() {
        echo "olá mundo! <br>";
    }

    private function gritar(){
        echo "PHP é muito bom! <br>";
    }

    public function acessarGritar(){
        $this->gritar();
    }

    protected function falarBaixinho() {
        echo "lalala <br>";
    }

    public function acessarFalarBaixinho(){
        $this->falarBaixinho();
    }
}

class Programador extends Humano{

    public function acessarFalarBaixinhoProgramacao(){
        $this->falarBaixinho();
    }

}

$ze = new Humano;

$ze->falar();
$ze->acessarGritar();
$ze->acessarFalarBaixinho();

$matheus = new GlobalProgramador;

echo $matheus->idade . "<br>";

$matheus->falar();

