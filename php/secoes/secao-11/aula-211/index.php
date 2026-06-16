<?php 

$arr = [1,2,3,4,5,6,7,8,9,10];

if (in_array(1, $arr) === true) {
    echo "O valor foi encontrado dentro do array <br>";
} else {
    echo "O valor não foi encontrado dentro do array";
}

if (in_array(67, $arr) === true) {
    echo "O valor foi encontrado dentro do array <br>";
} else {
    echo "O valor não foi encontrado dentro do array";
}

?>