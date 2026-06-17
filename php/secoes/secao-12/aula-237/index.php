<?php 

class Humano {
    
}

class Animal {
    
}

$marcos  = new Humano;

$turca = new Animal;

if($marcos instanceof Humano) {
    echo "Marcos é humano <br>";
} else {
    echo "Marcos não é Humano";
}

if($turca instanceof Humano) {
    echo "turca é humano";
} else {
    echo "Turca não é Humano <br>";
}

?>