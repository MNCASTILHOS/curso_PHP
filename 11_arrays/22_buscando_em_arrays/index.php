<?php
$arr = ['banana', 'maçã', 'batata', 'pera', 'mamão'];

if(in_array("batata", $arr)) {
    echo "ha o item batata no array <br>";
} else {
    echo "não ha o item batata no array <br>";
}


$b = "banana";

if(in_array($b, $arr)) {
    echo "ha o item banana no array <br>";
} else {
    echo "não ha o item batata no array <br>";
}

if(in_array("teste", $arr)) {
    echo "ha o item teste no array <br>";
} else {
    echo "não ha o item teste no array <br>";
}