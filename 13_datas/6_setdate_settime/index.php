<?php

$date = new DateTime();

print_r($date);
echo "<br>";

$date->setDate(1999, 12, 01);

print_r($date);
echo "<br>";

$date->setTime(05,12,10);

print_r($date);
echo "<br>";

echo $date->format('d/m/y') . "<br>";