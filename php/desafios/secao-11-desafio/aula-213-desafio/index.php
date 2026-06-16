<?php

$ranking = [
    'Enzo' => 670,
    'Fernando' => 170,
    'Cristiano' => 0707,
    'Messi' => 121,
];

arsort($ranking);
// print_r($ranking);
?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Pontos</th>
    </tr>
    <?php foreach ($ranking as $nome => $pontos): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $pontos; ?></td>
    </tr>
    <?php endforeach; ?>
</table>