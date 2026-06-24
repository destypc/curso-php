<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass = "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA

$id = 20;
$nome = "Teclado da logitech";
$descricao = "Usado somente para trabalho, um pouco desgastado";

$stmt = $conn->prepare(
    "UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id"
);

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();

echo "Item Atualizado com sucesso";
