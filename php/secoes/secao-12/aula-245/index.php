<?php

class Humano
{

    public function falar()
    {
        echo "Olá";
    }
}

$matheus = new Humano;

if (is_object($matheus)) {
    echo "True <br>";
} else {
    echo "False <br>";
}

echo get_class($matheus) . "<br>";

if (method_exists($matheus, "falar")) {
    echo "True <br>";
} else {
    echo "False <br>";
}