<?php

$arr = range(10, 45);

print_r($arr);
echo "<br>";
echo "<br>";

for($i = 0; $i < count($arr); $i++) {

   $soma = $arr[$i] + 6;
    
    if($soma > 30) {

        echo "O numero $soma é muito alto <br>";
    }
    else {
        echo "$soma <br>";
    }
}