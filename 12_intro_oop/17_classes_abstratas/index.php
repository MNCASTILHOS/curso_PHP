<?php
abstract class Teste {

    public static function testandoClasse() {

        echo "este metodo é de uma classe abstrata <br>";
    }

    abstract public function testeAbs();

}

//$t = new Teste;

Teste::testandoClasse();

class Nova extends Teste {

    public function testeAbs() {

        echo "teste método abstrato <br>";
    }
    
}

$n = new Nova;
$n->testeAbs();