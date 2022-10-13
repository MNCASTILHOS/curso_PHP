<?php

use Professor as GlobalProfessor;

class Humano {


} 

class Animal {


}

class professor extends Humano {


}

$marcos = new Humano;

$tuca = new Animal;

if($marcos instanceof Humano) {
    echo "marcos é um humano <br>";
} else {
    "marcos não é um humano <br>";
}


if($tuca instanceof Humano) {
    echo "tuca é um humano <br>";
} else{
    echo "a tuca não é um humano <br>";
} 

$pedro = new Professor;

if($pedro instanceof Professor) {
    echo "pedro é um professor <br>";
} else {
    "pedro não é um professor <br>";
}

if($pedro instanceof Humano) {
    echo "pedro é um humano <br>";
} else{
    echo "pedro não é um humano <br>";
} 

if($tuca instanceof GlobalProfessor) {
    echo "tuca é um professor <br>";
} else{
    echo "a tuca não é um professor <br>";
} 
