<?php

if(3 == 3) { //se 3 é igual a 3 então
    echo "Comparação verdadeira <br>"; //imprime na tela 
}

if (3 == 4) {
    echo "Comparação verdadeira 1 <br>";
}

$a = 12;
$b = 12; 
$c = 100;

if($a == $b) {
    echo "Comparação verdadeira 2 <br>";
}

if($a == $c) {
    echo "Comparação verdadeira 3 <br>";
}

$nome = "Miriam";
$nomeDoSistma = "Miriam";

if ($nome == $nomeDoSistma) {
    echo "O nome coincide <br>";
}