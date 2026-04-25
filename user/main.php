<?php
session_start();

require_once "../auth/protect.php";

$nome=$_SESSION['username'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas vindas</title>
</head>
<body>
    <h1>Olá, <?= $nome ?>!</h1>
    <a href="../actions/logout.php">Sair</a>
</body>
</html>