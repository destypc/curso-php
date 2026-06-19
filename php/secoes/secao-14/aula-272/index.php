<?php 

setcookie("nome", "Enzo", time() + 3600);

if(isset($_COOKIE['nome']))

    $nome = $_COOKIE['nome'];

    print_r($_COOKIE);
    
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula - 271</title>
</head>

<body>
    <h1>Olá mundo</h1>
</body>

</html>