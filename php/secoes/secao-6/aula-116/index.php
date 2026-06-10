<?php 

$dia = "segunda";

if ($dia == "segunda") {
    echo "Começo da semana";
} elseif ($dia == "sexta") {
    echo "Sextou!";
} elseif ($dia == "domingo") {
    echo "Descanso";
}

$dia1 = "segunda";

switch ($dia1) {
    case "segunda":
        echo "Começo da semana";
        break;

    case "sexta":
        echo "Sextou!";
        break;

    case "domingo":
        echo "Descanso";
        break;

    default:
        echo "Dia inválido";
}

?>