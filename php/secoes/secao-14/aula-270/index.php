<?php

$validacoes = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($_POST['nome'])) {
        $validacoes[] = "Por favor, preencha o nome do usuário";
    }

    if (empty($_POST['email'])) {
        $validacoes[] = "Por favor, preencha o e-mail";
    }

    if (empty($_POST['senha'])) {
        $validacoes[] = "Por favor, preencha a senha";
    }

    if (empty($_POST['confirmacao'])) {
        $validacoes[] = "Por favor, confirme a senha";
    }

    if (
        !empty($_POST['senha']) &&
        !empty($_POST['confirmacao']) &&
        $_POST['senha'] !== $_POST['confirmacao']
    ) {
        $validacoes[] = "As senhas não coincidem";
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de Formulário</title>
</head>

<body>

    <?php if (count($validacoes) > 0): ?>
    <ul>
        <?php foreach ($validacoes as $validacao): ?>
        <li><?= $validacao ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>

    <form action="" method="post">

        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>

        <div>
            <input type="email" name="email" placeholder="Digite seu e-mail">
        </div>

        <div>
            <input type="password" name="senha" placeholder="Digite sua senha">
        </div>

        <div>
            <input type="password" name="confirmacao" placeholder="Confirme sua senha">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>

    </form>

</body>

</html>