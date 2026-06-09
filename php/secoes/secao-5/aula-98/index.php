<?php 

$a = (int) "12";

echo $a;
echo "<BR>";
echo $a + 10;
echo "<BR>";

if($a === 12) {
    echo "A é idêntico a 12";
    echo "<BR>";
}

$b = (float) "3.14159265359";

if ($b === 3.14159265359) {
    echo "B é idêntico a pi";
    echo "<BR>";
}

$c = (string) 34;
echo $c;
echo "<BR>";

if ($c === "34") {
    echo "C é idêntico a 34";
}
?>