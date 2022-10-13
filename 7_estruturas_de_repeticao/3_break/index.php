<?php

$x = 0;

while($x < 10) {

    echo "o X é $x <br>";

    if($x === 5) {
        echo "terminando o loop <br>";
        break;
    }

    $x++;
}

echo "saiu do loop <br>";