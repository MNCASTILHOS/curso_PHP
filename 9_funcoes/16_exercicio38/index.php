<?php

$array = ["tomate", "arroz", "feijão", "farinha", "pão", "chocolate"];


function itensSupermercado($arr) {

    $itens = "";

    for($i = 0; $i < count($arr); $i++) {

        if ($i == 0) {
            $itens = $itens . $arr[$i];
        } else {

            $itens = $itens . ", " . $arr[$i];
        }

    }

    return $itens;
}

$retorno = itensSupermercado($array);
echo $retorno;

