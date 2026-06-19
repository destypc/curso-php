<?php 

function velocidadeMaxima($vel) {
    
    if (is_int($vel)) {
        echo "O carro atinge a velocidade máxima de $vel km/h <br>";
    } else {
        echo "Valor informado incorreto, passe um número inteiro <br>";
    } 

}
velocidadeMaxima(200);
velocidadeMaxima(300);
velocidadeMaxima(400);

$velocidade = 67;

velocidadeMaxima($velocidade);
velocidadeMaxima($velocidade * 2);
velocidadeMaxima($velocidade, "teste");
velocidadeMaxima("teste"); # Valor informado incorreto, Passe um número inteiro


 ?>