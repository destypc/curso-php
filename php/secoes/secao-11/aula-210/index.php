<?php 

$arr = [1,2,4,7,12,734,123,65];

function soma ($a, $b) {
    return $a + $b;
}

$resultado = array_reduce($arr, "soma");

echo $resultado;

?>