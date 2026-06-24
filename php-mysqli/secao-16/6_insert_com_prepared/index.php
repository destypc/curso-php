<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Substitua pela sua senha, se houver
$db = 'cursophp';

$conn = new mysqli($host, $user, $pass, $db);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = 'Suporte de microfone';
$descricao = 'O suporte é novo e foi fabricado na China';

// Prepara a declaração com as interrogações '?' (placeholders)
$stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

// Vincula os parâmetros: 's' indica que ambos são strings
$stmt->bind_param('ss', $nome, $descricao);

// Executa a instrução
if ($stmt->execute()) {
    echo "Item inserido com sucesso!";
} else {
    echo "Erro ao inserir: " . $stmt->error;
}

// Fecha o statement e a conexão
$stmt->close();
$conn->close();
