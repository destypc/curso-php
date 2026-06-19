<?php 

if ( 10 > 5) {
    echo "Entrou no if <BR>";
} else if (10 > 6) {
    echo "Entrou no else if <BR>";
}

if ( 10 < 5) {
    echo "Entrou no if 2<BR>";
} else if (10 > 6) {
    echo "Entrou no else if 2<BR>";
}

if ( 10 < 5) {
    echo "Entrou no if 4<BR>";
} else if (10 > 6) {
    echo "Entrou no else if 4<BR>";
} else if (11 > 1) {
    echo "Entrou no else if 2 da quarta execução <BR>";
} else {
    echo "Entrou no else 4 <BR>";
}
?>