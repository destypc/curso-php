<?php 
    if(isset($_GET['nome'])) {
        $nome = $_GET['nome'];
    } else {
        $nome = "Padrão";
    }

?>

<h1>O seu nome é <?= $nome ?></h1>