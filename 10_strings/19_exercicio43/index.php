<?php

$objetos = "Carro - Navio -  helicoptero - Barco - jangada";

$objetosArray = explode("-", $objetos);

for($i = 0; $i < count($objetosArray); $i++){

echo "item: $objetosArray[$i] <br>";

}