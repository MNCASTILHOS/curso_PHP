<?php

$arr = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

$a = 0;

while($a < count($arr)){
    

    if($arr[$a] == 30 || $arr[$a] == 40){

        $a++;

        continue;
    }

    echo $arr[$a] . "<br>";
    $a++;
}

