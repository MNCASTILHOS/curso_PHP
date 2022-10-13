<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// assunto da aula

$nome = "suporte de microfone";
$descricao = "o suporte é novo e foi fabricado na china";

$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

$stmt->bind_param("ss", $nome, $descricao); // s = string, i = integer, d = double

$stmt->execute();