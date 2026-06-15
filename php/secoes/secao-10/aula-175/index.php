<?php 

$textoHtml = "<p>Testando parágrafo.</p><div>Uma Div<div>";

echo $textoHtml;

$salvarTextoBanco = strip_tags($textoHtml);

echo $salvarTextoBanco;

?>