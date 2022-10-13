<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// assunto da aula

$q = "SELECT * FROM itens";

$result = $conn->query($q);

$conn->close();

// um resultado
$item = $result->fetch_assoc();

// todos os resultados
$itens = $result->fetch_all();

print_r($itens);