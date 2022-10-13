<?php 
$str = "Esta é uma estring muito grande, ela tem varios caracteres";

for($i = 0; $i < strlen($str); $i++) {

    echo "$str[$i] <br>";
}