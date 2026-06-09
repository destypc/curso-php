<?php

$arr = [
    "laele",
    67,
    "Jamilton",
    'Fernando',
    910,
    false,
    332.231,
    [],
    "luizinxz",
    true,
    "TRUE",
];
$x = count($arr);
$y = 0;
while ($y < $x) {

    if (is_string($arr[$y])) {
        echo $arr[$y] . "<BR>";
    }

    $y++;
}