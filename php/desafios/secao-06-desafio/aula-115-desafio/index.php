<?php 

$vel = 67;
$velMax = 60;

if ($vel < $velMax) {
    echo "O motorista esta dirigindo da forma correta";
} else if ($vel == 40) {
    echo "Motorista deve começar a tomar cuidado";
} else {
    echo "O motorista vai ser multado";
}

?>