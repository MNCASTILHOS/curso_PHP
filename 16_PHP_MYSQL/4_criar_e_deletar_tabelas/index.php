<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// assunto da aula

//cria tabela
//$q = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";


//deleta tabela
$q = "DROP TABLE teste";

$conn->query($q);

$conn->close();


