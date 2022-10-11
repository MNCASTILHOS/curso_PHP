<?php

$a = 1.25;
$b = 10;
$c = "caneta";

echo $a, "<br>" , $b, "<br>", $c, "<br>";

if(is_float($c)) {
    echo "é float 1 <br>";
}

if(is_float($a)) {
    echo "é float 2 <br>";
}