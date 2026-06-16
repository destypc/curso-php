<?php 

$arr1 = [1,2,3];
$arr2 = [4,1,3];

$diff = array_diff($arr1, $arr2);

print_r($diff);

$arr1 = [1,2,3];
$arr2 = [4,1,3];

$diff = array_diff($arr2, $arr1);

print_r($diff);

?>