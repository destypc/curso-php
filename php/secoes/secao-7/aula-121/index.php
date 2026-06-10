<?php 
 $x = 0;

 while ($x < 10) {
    echo "O X é $x <br>";

    if ($x === 5) {
        echo "Terminando o loop";
        break;
    }

    $x++;
 }
 echo "Saiu do loop <br>";

?>