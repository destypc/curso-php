<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'cursophp';

// Cria a conexão
$conn = new mysqli($host, $user, $pass, $db);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// ASSUNTO DA AULA
$id = 4;

// 1. Prepara a consulta (SQL entre aspas)
$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

// 2. Vincula o parâmetro ('i' de inteiro entre aspas)
$stmt->bind_param('i', $id);

// 3. Executa a consulta
$stmt->execute();

// 4. Armazena o resultado da execução
$result = $stmt->get_result();

// 5. Captura todas as linhas como uma matriz associativa
$data = $result->fetch_all(MYSQLI_ASSOC);

// 6. Exibe os dados na tela
print_r($data);

// 7. Fecha as conexões abertas
$stmt->close();
$conn->close();
