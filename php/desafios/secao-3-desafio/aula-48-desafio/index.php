<?php 

$carro = [
    'marca' => 'BMW',
    'modelo' => 'X7',
    'cor' => 'Prata',
];

echo $carro['marca'];
echo '<BR>';
echo $carro['modelo'];
echo '<BR>';
echo $carro['cor'];
echo '<BR>';
echo '<hr>';

$marca = $carro['marca'];
$modelo = $carro['modelo'];
$cor = $carro['cor'];


echo "A $marca do modelo $modelo da cor $cor é muito bonita e chamativa"



?>