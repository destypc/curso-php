<?php

$arr = [
    10,
    20,
    30,
    40,
    50,
    60,
    70,
    80,
    90,
    100,
];

$i = 0;

while ($i <= count($arr)) {

    $numA = $arr[$i];

    if ($numA == 30 || $numA == 40) {
        $i ++;
        continue;
    }

    echo "Elemento: $numA <br>";


    $i++;
}