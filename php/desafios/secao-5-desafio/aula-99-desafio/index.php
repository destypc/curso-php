<?php 

$a = (int) "testando";
echo $a;
echo "<br>";

if($a === 0) {
    echo "A é idêntico a 0";
    echo "<BR>";
}
echo "<HR>";


$b = (int) 12.9;
echo $b;

echo "<br>";

if($b === 12) {
    echo "B é idêntico a 12";
    echo "<BR>";
}
echo "<HR>";


$c = (int) true;
echo $c;
echo "<br>";

if($c === 1) {
    echo "C é idêntico a 1";
    echo "<BR>";
}
echo "<HR>";

$d = (int) [1,2,3];
echo $d;
echo "<br>";

if($d === 1) {
    echo "d é idêntico a 1";
    echo "<BR>";
}
echo "<HR>";

?>