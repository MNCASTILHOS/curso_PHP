<?php

$arr = [
    'nome' => 'Miriam',
    'idade' => 24,
];

if(array_key_exists("nome", $arr)) {
    
    echo "a chave existe! <br>";
} else {

    echo "a chave não existe! <br>";
}


if(array_key_exists("profissao", $arr)) {
    
    echo "a chave existe! <br>";
} else {

    echo "a chave não existe! <br>";
}

if(isset($arr['nome'])) {
    
    echo "a chave existe! ISSET <br>";
} else {

    echo "a chave não existe! ISSET <br>";
}


if(isset($arr['teste'])) {
    
    echo "a chave existe! ISSET <br>";
} else {

    echo "a chave não existe! ISSET <br>";
}

$x = 10;

if(isset($x)) {

    echo "a chave existe! ISSET <br>";
} else {

    echo "a chave não existe! ISSET <br>";
}