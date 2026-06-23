<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_errno) {
    echo "Erro na conexão <br>";
    echo "ERRO: " . mysqli_connect_error();
    echo "ERRO: " . $conn->connect_error; # Forma orientada objeto
}
