<?php

$contador = 4;

while($contador < 30) {
    echo "executando o loop $contador <br>";

    if($contador === 24) {
        echo "loop interrompido <br>";
        break;
    }

    $contador +=2;
}
