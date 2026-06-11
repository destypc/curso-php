<?php

$a = 10;

$b = 15;

function testeEscopo() {
    
    $a = 5;

    global $b;

    $a++;
    
    $b++;
    
    echo "Escopo local de A: $a . <br>";
    
    echo "Escopo global na função de B: $b . <br>";
}

echo "Escolo global de A: $a . <br>";
echo "Escolo global de B: $b . <br>";

testeEscopo();

echo "Escolo global de B 2: $b . <br>";
?>