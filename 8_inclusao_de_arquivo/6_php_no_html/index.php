<?

include_once "backend.php";

?>

<hi>Seja bem vindo ao nosso site</h1>
<p><?= $nome; ?> veja as nossas ofertas</p>

<h2>confira nossos principais produtos:</h2>
<ul>
<?php foreach($produtos as $produto): ?>
    <li><?= $produto; ?></li>
<?php endforeach; ?>
</ul>