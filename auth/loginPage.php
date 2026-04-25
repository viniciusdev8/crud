<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Entrar</title>
</head>
<body>
    <h1>Entrar</h1>
    <form action="../actions/login.php" method="post">
        <label>NOME: <input type="text" name="userName" placeholder="Nome do usuário"></label>
        <br>
        <label>SENHA: <input type="password" name="pw" placeholder="Senha" required></label>
        <br>
        <button>Enviar dados para DB</button>
    </form>
    <a href="criarPage.php">Criar uma conta</a>
</body>
</html>