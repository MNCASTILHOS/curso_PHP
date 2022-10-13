<?php

function verificacao($numero){

    if($numero % 2 == 0) {
        echo "$numero é par <br>";
    } else {
        echo "$numero é impar <br>";
    }
} 
verificacao(20);