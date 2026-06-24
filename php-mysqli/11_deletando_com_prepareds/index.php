<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$nome = "Teclado";
$id = 5;

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$conn->close();
