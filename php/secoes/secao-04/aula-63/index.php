<?php 

$teste = "asd";

echo "$teste global 1 <BR>";

if(5 > 2) {
    $teste = "dsa";

    echo "$teste if <BR>";
}

echo "$teste global 2 <BR>";

function funcao() {

    $teste = "xsxs";

    echo "$teste local 2 <BR>";
}

funcao();

?>