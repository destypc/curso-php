<?php 

class Pessoa {
    
    public $nome;
    public $idade;

    function andar () {
        echo "Andar <br>";
    }
}

$enzo = new Pessoa;

$enzo->nome = "Enzo";
$enzo->idade = 15;

echo "O nome dele é $enzo->nome e tem $enzo->idade anos" . "<br>";

$enzo->andar();

?>