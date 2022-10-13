<?php
 $carro = ['Jaguar', '3.0', 'Azul', 18, 'Teto solar', 'Automatico'];

 print_r($carro);
 echo "<br>";

 list($modelo, $potencia, $cor, $motor, $caracteristica, $cambio) = $carro;

 echo "$modelo <br>";
 echo "$potencia <br>";
 echo "$cor <br>";
 echo "$motor <br>";
 echo "$caracteristica <br>";
 echo "$cambio <br>";

