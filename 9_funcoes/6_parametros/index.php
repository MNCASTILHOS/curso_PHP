<?php
function velocidadeMaxima($vel) {

    if(is_int($vel)) {
        echo "o carro atinge uma velocidade maxima de $vel km/h <br>";
    } else {
        echo "Por favor, passe um numero inteiro <br>";
    }
    
}

velocidadeMaxima(200);
velocidadeMaxima(100);
velocidadeMaxima(80);

//não pode deixar sem parametro
// velocidadeMaxima();

echo "teste continuando <br>";

$velocidade = 125;

velocidadeMaxima($velocidade);

// php ignora parametro desnecessario
velocidadeMaxima(250, "teste");

velocidadeMaxima("teste");


// mais parametros

function descreverAnimal ($nome, $raca){

    echo "o $nome é da raça $raca <br>";
}
descreverAnimal("Bob", "Vira-lata");
descreverAnimal("Duque", "Border Collie");

//poucos parametros 
descreverAnimal("Tigre");



