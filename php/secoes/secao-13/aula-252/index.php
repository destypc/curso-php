<?php

$data = new DateTime();
echo $data ->format('d/m/y') . "<br>";

echo $data->format('D - M - Y') . "<br>";


// Data modificada + 5
$data->modify('+5 days');

echo $data ->format('d/m/y') . "<br>";