<?php

class Cachorro {


    function latir () {

        echo "Au! Au! <br>";
    }

    function andar ($m) {
        
        echo "O cachorro andou $m metros <br>";
    }
}

$duque = new Cachorro;
$barao = new Cachorro;

$duque-> latir();
$duque-> andar(200);

$barao-> latir();
$barao-> andar(100);