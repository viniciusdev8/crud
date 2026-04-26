<?php
session_start();

require_once "../auth/protect.php";
require_once "../db/connection.php";

$sql="SELECT nome FROM usuarios WHERE id=:id";
$stmt=$conn->prepare($sql);
$stmt->bindParam(":id", $_SESSION['userId']);
$stmt->execute();
$userInfo=$stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas vindas</title>
</head>
<body>
    <h1>Olá, <?= $userInfo['nome'] ?>!</h1>
    <a href="alterarDados.php">Alterar Dados</a>
    <a href="../actions/logout.php">Sair</a>
</body>
</html>