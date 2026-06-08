<?php

function br() {
    echo "<br>";
}

echo 5 / 2;
br();

if(is_float(5/2)) {
    echo "É float";
    br();
}

$nome = "Enzo";
$sobrenome = "Pontes";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
br();