<?php

function alteraDados($nome, $idade)
{

    if ($idade >= 40) {
        $nome = "Sr. $nome";
        $idade = "$idade anos";
    } else {
    $nome =  "$nome";
    $idade = "$idade anos";
    }

    return [$nome, $idade];
}

$dados = alteraDados("Enzo", 45);

echo "Olá $dados[0], você tem $dados[1] anos.";