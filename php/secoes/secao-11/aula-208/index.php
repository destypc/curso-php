<?php 

$pessoa = [
'nome' => 'Enzo',
'idade' => 15,
'profissao' => 'Desenvolvedor',
];

$pessoa2 = [
'nome' => 'Murilo',
'idade' => 23,
'profissao' => 'Treinador',
];

foreach($pessoa as $carac => $value) {
    
    echo "$carac : $value <br><br>";

}

foreach($pessoa2 as $carac => $value) {
    
    echo "$carac : $value <br>";

}

?>