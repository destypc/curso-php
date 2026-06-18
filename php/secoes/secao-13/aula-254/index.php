<?php 

$dataA = new DateTime();
$dataB = new DateTime();

$dataB->setDate(2011,05,19);

print_r($dataA);
echo "<br>";
echo "<br>";
print_r($dataB);
echo "<br>";
echo "<br>";

$diferenca = $dataA->diff($dataB);

print_r($diferenca);
echo "<br>";
echo "<br>";

echo $diferenca->format('%D - %M - %Y');
?>