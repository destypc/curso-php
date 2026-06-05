<?php 

$x = 10;

echo "$x global <BR>";

function teste() {
    
    $x = 5;
    
    echo "$x local <BR>";
}

teste();

echo "$x global <BR>";

teste();

function testando() {
    $x =12;

    echo "$x local 2 <BR>";
}

$x =99;

testando();

teste();

echo "$x global <BR>";
?>