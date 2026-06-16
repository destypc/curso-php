<?php 

$dataNascimento = mktime(02, 12, 31, 05, 19, 2011);

echo $dataNascimento . "<br>";

$dataNascimentoFormatada = date('d/m/Y, $dataNascimento');

echo $dataNascimentoFormatada;
?>