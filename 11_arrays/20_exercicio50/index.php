<?php

$pessoas = [
    'Pualo' => 25,
    'Maria' =>43,
    'Francisco' => 65,
    'Bia' => 12
];

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Idade</th>
    </tr>
    <?php foreach($pessoas as $nome => $idade): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $idade; ?></td>
    </tr>
    <?php endforeach; ?>
</table>