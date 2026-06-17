<?php

class Humano
{
    public $idade = 15;

    public function falar()
    {
        echo "Olá mundo! <br>";
    }

    private function gritar()
    {
        echo "ESTOU GRITANDO! <br>";
    }

    public function acessaGritar() {
        $this -> gritar();
    }
    
}

class Programador extends Humano {}

$ze = new Humano;

$ze->falar();
$ze->acessaGritar();

$matheus = new Programador;

echo $matheus->idade . "<br>";