<?php

$arr = [
    "Paulo" => 30,
    "maria" => 20,
    "Carlos" => 10,
    "Bruno" => 40,
];

arsort($arr);
print_r($arr);
echo "<br>";

?>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Pontos</th>
    </tr>
    <?php foreach($arr as $nome => $pontos): ?>
    <tr>
        <td><?= $nome; ?></td>
        <td><?= $pontos; ?></td>
    </tr>
    <?php endforeach; ?>
</table>