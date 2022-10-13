<?php

$frase = "O rato roeu a roupa do rei de Roma";

$quantidadeA = 0;

for($i = 0; $i < strlen($frase); $i++){

    if ($frase[$i] == "a" || $frase[$i] == "A"){

       $quantidadeA = $quantidadeA + 1; 

    }
    
}

echo $quantidadeA;