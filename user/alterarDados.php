<?php
session_start();

require_once "../auth/protect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Alterar dados</title>
</head>
<body>
    <h1>Alterar Dados</h1>
    <form action="../actions/alterarDados.php" method="post">
        <label for="userName">Novo nome:</label>
        <input type="text" id="userName" name="userName" required><br><br>

        <label for="pw">Nova senha:</label>
        <input type="password" id="pw" name="pw" required><br><br>

        <input type="submit" value="Alterar">
    </form>
</body>
</html>