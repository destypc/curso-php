<?php

// A definição do contador
$x = 0;
// Início / Definição da estrutura
while ($x < 10) {

    // Corpo do loop
    echo $x . "<BR>";

    // Incremento do loop
    $x++;
}

echo "<BR>";
echo "Continuando código <BR>";

// A definição do contador
$y = 0;
// Início / Definição da estrutura
while ($y <= 10) {

    // Corpo do loop
    echo $y . "<BR>";

    // Incremento do loop
    $y = $y + 2;
    // $y += 2;

}

echo "<BR>";
echo "Continuando código <BR>";


// A definição do contador
$z = 10;
// Início / Definição da estrutura
while ($z > 0) {

    // Corpo do loop
    echo $z . "<BR>";

    // Incremento do loop
    $z--;

}

echo "<BR>";
echo "Continuando código <BR>";


// A definição do contador
$a = 10;
// Início / Definição da estrutura
while ($a > 0) {

    // Corpo do loop
    if ($a % 2 != 0) {
        echo $a . "<BR>";
    }

    // Incremento do loop
    $a--;

}