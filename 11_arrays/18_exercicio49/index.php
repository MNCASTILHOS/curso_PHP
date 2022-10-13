<?php

$cor = "braco";
$especie = "mamifero";
$patas = 4;
$pelos = true;
$tipo = "gato";

$animal = compact("cor", "especie", "patas", "pelos", "tipo");

print_r($animal);
echo "<br>";

foreach ($animal as $carac => $valor) {
    echo "$carac: $valor <br>";
};
