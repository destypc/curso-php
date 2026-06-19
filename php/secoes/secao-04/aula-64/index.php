<?php 

function teste() {
    $a =0;
    $a++;

    echo "$a <BR>";
}

teste();
teste();
teste();

function testeStatic() {
    static $a =0;
    $a++;

    echo "$a <BR>";
}

testeStatic();
testeStatic();
testeStatic();

?>