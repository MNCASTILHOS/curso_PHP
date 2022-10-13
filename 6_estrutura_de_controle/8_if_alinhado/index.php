<?php


if (10 > 2) {

    echo "entrou no primeiro if <br>";

    if("teste" == "teste") {

        echo "entrou no segundo if <br>";
    }
}

$escopo = 10;

if (10 > 2) {

    echo "entrou no primeiro if 2<br>";

    $escopo2 = 20;

    if("teste" == "teste") {

        echo "entrou no segundo if 2<br>";

        echo $escopo;
        echo " " . $escopo2;

    } else {

         echo "entrou no segundo else <br>";
    }

}

if (10 < 2) {

    echo "entrou no primeiro if 2<br>";

    if("teste" != "teste") {

        echo "entrou no segundo if 2<br>";
    } else {

         echo "entrou no segundo else <br>";
    }

} else {
    echo "entrou no primeiro else <br>";
}

