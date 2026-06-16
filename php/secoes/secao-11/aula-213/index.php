<?php 

$arr = [
    'Enzo' => 19,
    'Fernando' => 15,
    'Messi' => 12,
];

asort($arr);

print_r($arr);
echo "<br><br>";

$arr2 = [
    'Enzo' => 19,
    'Fernando' => 15,
    'Messi' => 12,
];

arsort($arr2);

print_r($arr2);
echo "<br><br>";

$arr3 = [
    'Enzo' => 532,
    'Fernando' => 112,
    'Messi' => 15212,
];

ksort ($arr3);

print_r($arr3);
echo "<br><br>";

?>