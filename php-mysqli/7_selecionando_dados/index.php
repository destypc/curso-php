<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$q = "SELECT * FROM itens";

// UM RESULTADO
$result = $conn->query($q);

$itens = $result->fetch_assoc();

// TODOS OS RESULTADOS
$itens = $result->fetch_all();

print_r($itens);
