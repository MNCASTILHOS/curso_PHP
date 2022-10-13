<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// assunto da aula

$id = 8;

$stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ?");

$nome = "sofa";
$descricao = "sofa semi novo, com madeira de demolição";

$stmt->bind_param("ssi", $nome, $descricao, $id);

$stmt->execute();

if($stmt->error) {
    echo "Error: " . $stmt->error;
}