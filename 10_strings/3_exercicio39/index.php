<?php

$preco = ["carro" => 50.000, "computador" => 11.000, "caderno" => 15.90, "copo" => 8.50,
"caneta" => 5.50, "flor" => 3.50];

function objetos($array){

    $itens = "";

    foreach ($array as $key => $value) {

        if ($value > 10){
            $itens = $itens . $key . "<br>";

        }

    }
    return $itens;
}    

echo objetos($preco);