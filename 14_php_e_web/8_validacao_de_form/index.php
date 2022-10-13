<?php

$validacoes = [];

if(count($_POST) > 0) {

    if($_POST['nome'] === "") {
        $validacoes[] = "por favor, preencha o nome do usuario!";
    }

    if($_POST['email'] === "") {
        $validacoes[] = "por favor, preencha o email do usuario!";
    }

    if($_POST['senha'] != $_POST["confirmacao"]) {
        $validacoes[] = "As senhas devem ser iguais";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
            <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
        <?endif;  ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="digite seu nome">
        </div>
        <div>
            <input type="text" name="email" placeholder="digite seu email">
        </div>
        <div>
            <input type="password" name="senha" placeholder="digite sua senha">
        </div>
        <div>
            <input type="password" name="confirmacao" placeholder="confirme sua senha">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>