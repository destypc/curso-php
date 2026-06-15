<?php 

$str = "Carro-Navio-Barco-Jangada";

$strArray = explode(" - ", $str);

for ($i = 0 ; $i < count($strArray) ; $i++) {
    
    echo "Item: $strArray [$i] <br>";

}

?>