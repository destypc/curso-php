<?php 

$arr = [
    [1,2,3,4],
    [1,2,3,4],
    [1,2,3,4],
];

for ($i = 0 ; $i < count($arr) ; $i++) {
    
    echo "array de dentro " . ($i + 1) . "<br>";

    for ($k = 0 ; $k < count($arr[$i]) ; $k++) {
    
    echo $arr[$i][$k] . "<br>";

}
}

?>