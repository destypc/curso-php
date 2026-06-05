<?php
class Pessoa
{
    public string $nome;

    function falar()
    {
        echo "Olá pessoal";
    }
}
$matheus = new Pessoa();

$matheus->nome = "Matheus";

echo $matheus->nome;

echo "<BR>";

$matheus->falar();




?>