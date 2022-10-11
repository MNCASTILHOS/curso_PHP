<?php

$arrPessoa = [
    'nome' => 'Bruna',
    'idade' => '26',
    'altura' => '1.65',
    'sexo' => 'feminino',
    'cor' => 'negra'
];

print_r($arrPessoa);
echo "<br>";



if($arrPessoa['idade'] > 18) {
    echo $arrPessoa['nome'].  " é maior de idade <br>";
}