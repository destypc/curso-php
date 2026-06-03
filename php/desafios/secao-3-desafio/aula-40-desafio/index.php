<?php

$a = 1237.754;
$b = 664.562;
$c = 7342.123;
$d = 19;


if (is_float($a)) {
    echo "É um float! " . "$a" . "<br> <br>";
} else {
    echo "Não é um float!";
}
if (is_float($b)) {
    echo "É um float! " . "$b" . "<br> <br>";
} else {
    echo "Não é um float!";
}
if (is_float($c)) {
    echo "É um float! " . "$c" . "<br> <br>";
} else {
    echo "Não é um float!";
}
if (is_int($d)) {
    echo "É um inteiro!" . "$d" . "<br> <br>";
} else {
    echo "Não é um Inteiro " . "$d";
}

 /*
 // Método do otavio que ficou bem melhor

 $z = 333;

$list = [$a, $b, $c, $d];
 
 echo "<br> <br><br><br><br>";

$list = [$a, $b, $c, $d, $z];

foreach ($list as $num) {
    if (is_float($num)) {
        echo "É um float! " . "$num" . "<br> <br>";
    } elseif (is_int($num)) {
        echo "É um inteiro!" . "$num" . "<br> <br>";
    } elseif (!is_int($num)) {
        echo "Não é um Inteiro " . "$num <br>" ;
    } elseif (!is_float($num)) {         
        echo "Não é um float! <br>";
    }
}

*/