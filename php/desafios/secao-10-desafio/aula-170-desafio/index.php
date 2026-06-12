<?php 

$str = "O rato rou a roupa do rei de Roma";
$contarDeAs = 0;

for($i = 0 ; $i < strlen($str) ; $i++) {
    if ($str[$i] === "a") {
        $contarDeAs ++;
    }   
}

echo "O número de a's na frase é de : $contarDeAs"

?>