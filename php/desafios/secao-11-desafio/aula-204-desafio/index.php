<?php 

$arr = [
    "batata",
    "maca",
    "pera",
    "feijao",
    "arroz",
];

$remover = array_splice($arr, 2, 2);

print_r ($arr);
echo "<br>";
print_r ($remover);

?>