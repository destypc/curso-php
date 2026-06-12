<?php

$produtos = [
    "carro" => 20000.00,
    "celular" => 1200,
    "sofa" => 990,
    "cafeteira" => 379,
];

function itensCaros($produtos){
    $acimaMil = [];

    foreach ($produtos as $itens => $preco) {
        if ($preco > 1000) {
            
            array_push($acimaMil, $itens);

        }
    }
    return $acimaMil;
}

$resultado = itensCaros($produtos);
print_r($resultado);