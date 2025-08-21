<?php
$nome = $_GET['nome'];
$mensagem = "Boa noite $nome";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <h1>PHP & Mysql</h1>
    <p><?= $message ?></p>
    <h1>Teste</h1>
</body>
</html>