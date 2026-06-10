<?php
$num = 4;

while ($num <= 30) {
    echo $num;
    echo "<br>";
    if ($num === 24) {
        echo "Parando o loop";
        break;
    }

    $num += 2;
}