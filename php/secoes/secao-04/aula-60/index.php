<?php 

$x = 10;
$y =& $x;


echo "Atribução antes ref";
echo "<BR>";
echo "<BR>";

echo $x;
echo "<BR>";
echo $y;
echo "<BR>";
echo "<BR>";

$y =15;
echo "Atribuição após ref";
echo "<BR>";

echo "<BR>";
echo $x;
echo "<BR>";
echo $y;
echo "<BR>";
echo "<BR>";


$x =20;

echo "Atribuição após ref 2";
echo "<BR>";

echo "<BR>";
echo $x;
echo "<BR>";
echo $y;
echo "<BR>";

?>