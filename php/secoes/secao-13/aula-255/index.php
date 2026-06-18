<?php 

$dataA = new DateTime();
$dataB = new DateTime();

$dataB ->setDate(2022,10,10);

if($dataB > $dataA) {
    echo "Data B é maior do que data A <br>";
} else {
    echo "Data A é maior do que data B <br>";
}

?>