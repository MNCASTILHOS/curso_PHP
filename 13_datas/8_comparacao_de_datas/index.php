<?php

$dataA = new dateTime();
$dataB = new dateTime();

$dataC = new DateTime();

$dataB->setDate(2022, 10, 10);
$dataC->setDate(2022, 10, 10);

$dataB->setTime(01, 10, 10);
$dataC->setTime(01, 10, 10);

if($dataB > $dataA) {
    echo "a data B é maior que a data A <br>";
}

if($dataA < $dataB) {
    echo "a data A é maior que a data B <br>";
}

if($dataB == $dataC) {
    echo "a data B e C são iguais <br>";
}