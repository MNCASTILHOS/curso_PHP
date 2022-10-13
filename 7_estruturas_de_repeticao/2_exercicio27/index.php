<?php

$arr = [25, 15, "36", "caneta", true, 55.6, 27.3, false, 9, "sapato"];

$a = 0;

while($a < count($arr)){

    if(is_string($arr[$a])) {
        echo $arr[$a] . "<br>";
    }

    $a ++;
}
echo "continuando código <br>";