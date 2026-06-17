<?php 

    interface Caracteristicas {
        
        const nome = "Enzo";    

        public function falar();

}

    class Humano implements Caracteristicas {
        
        public $idade = 15;

        public function falar() {
            echo "Olá mundo <br>";
        }

        public function dizerNome() {
            
            echo "Meu nome é " . self::nome . "<br>";

        }

}

    $matheus = new Humano;

    $matheus->falar();
    
    $matheus->dizerNome();
    

?>