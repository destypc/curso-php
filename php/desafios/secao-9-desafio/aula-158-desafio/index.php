<?php 

$lista = ["Arroz", "Feijão", "Batata", "Regrigerante", "Carne"];

function mercado ($arr) {
    $str = "Você levou estes itens do mercado: ";

    for($i = 0 ; $i < count($arr) ; $i ++) {
        
    if($i + 1 == count($arr)) {
        $str .= "$arr[$i].";
    } else {
        $str .= "$arr[$i], ";
    }
    
    }
    return $str;
}

echo mercado($lista);


?>