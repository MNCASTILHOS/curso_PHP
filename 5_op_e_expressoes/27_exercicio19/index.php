<?php

$a = (int) "testando";
echo $a . "<br>"; // retorna 0

$b = (int) "12.9";
echo $b . "<br>"; // retorna 12

$c = (int) true;
echo $c . "<br>"; // retorna 1

$d = (int) [1, 2, 3];
echo $d . "<br>"; // retorna 1

