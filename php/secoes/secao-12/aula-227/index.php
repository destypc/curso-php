<?php 

class Pessoa {
    
    function falar () {
        echo "Olá eu sou um objeto! <br>";
    }

}

$enzo = new Pessoa;
$enzo->falar();

$luis = new Pessoa;
$luis->falar();


?>