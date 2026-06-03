<?php

$str = "Matheus";
$num = 12;

if (is_string($str)) {
    echo "O \"$str\". É uma string! <BR> <BR>";
} else {
    echo "Não é uma string";
}

if (is_string($num)) {
    echo "O $num. É uma string! <BR> <BR>";
} else {
    echo "O $num. Não é uma string! <br> <BR>";
}

if (is_string(332)) {
    echo "O 332. É uma string! <BR> <BR>";
} else {
    echo "O 332. Não é uma string e sim uma AURA! <Br> <BR>";
}