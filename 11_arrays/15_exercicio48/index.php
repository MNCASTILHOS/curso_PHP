<?php

$arr = ['batata', 'maçã', 'pera', 'feijão', 'arroz'];

print_r($arr);
echo "<br>";

$remover = array_splice($arr, 2, 2);

print_r($remover);
echo "<br>";