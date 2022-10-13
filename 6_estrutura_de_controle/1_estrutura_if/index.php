<?php

// consição verdadeira
if(5 > 2) {
    echo "Deu certo! Entrou no if. <br>";
}

// consição falsa
if(5 < 2) {
    echo "Não vai entrar no if, porque deu false!<br>";
}

// utlizar op. lógico
if(10 === 10 && 9 > 3) {
    echo "Deu certo! Entrou no if 2. <br>";
}

// variaveis

$a = 10;
$b = 5;

$c = "Deu certo! Entrou no if 3. <br>";

if ($a >= $b) {
    echo $c;
}