<?php

function parOuImpar($num1, $num2)
{
    if ($num1 % 2 === 0) {
        echo "O primero número é par <br>";
    } else {
        echo "O primerio número é ímpar <br>";
    }

    if ($num2 % 2 === 0) {
        echo "O segundo número é par <br>";
    } else {
        echo "O segundo número é ímpar <br>";
    }
}

parOuImpar(6, 7);