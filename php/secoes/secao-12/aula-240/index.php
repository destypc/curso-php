<?php 

abstract class Teste {
    
    public static function testandoClasse() {
        
        echo "Este método é de uma classe abstrata <br>";
        
    }
}

// $t = new Teste;
Teste::testandoClasse();

?>