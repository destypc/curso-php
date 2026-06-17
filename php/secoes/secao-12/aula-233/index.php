<?php

class Humano
{
    public const OLHOS = "2 Olhos";
    public const BRACOS = "2 Braços";
    public const PERNA = "2 Pernas";

    function mostrarConstante()
    {

        echo self::BRACOS . "<br>";
    }
}

$enzo = new Humano;

echo $enzo::OLHOS . "<br>";

$enzo->mostrarConstante();