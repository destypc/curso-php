<?php 

class Cachorro {
    
    function latir() {
        echo "Cachorro late! <br>";
    }

    function andar() {
        echo "Cachorro anda! <br>";
    } 
}

$billy = new Cachorro;

$billy->latir();
$billy->andar();

?>