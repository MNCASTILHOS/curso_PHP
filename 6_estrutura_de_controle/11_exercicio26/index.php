<?php

//crie uma variavel com a velocidade de um carro

//crie uma estrutura que verifique essa velocidade

//se menor que 40, imprima que esta na velocidade correta

//se igual a 40, imprima uma mensagem de cuidado

//se for maior que 40, imprima mensagem de multa

$veloc = 85;

if($veloc < 40) {
    echo "A velocidade esta correta <br>";

} else if ($veloc === 40) {
    echo "velocidade no limite, cuidado! <br>";

} else {
    echo "limite de velocidade excedido, você foi multado!";
}