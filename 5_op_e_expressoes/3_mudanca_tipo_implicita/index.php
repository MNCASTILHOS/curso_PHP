<?php

echo 5/2;
echo "<br>";

if(is_float(5/2)) {
    echo "é float <br>";
}

echo 2.3;
echo "<br>";

if(is_string(2.3)) {
    echo "é string <br>";
}

$nome = "Miriam";
$sobrenome = "Castilhos";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";