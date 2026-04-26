<?php
session_start();

require_once "../db/connection.php";

$idUsuario=$_SESSION['userId'];

$novoNome=$_POST['userName']??'';
$novaSenha=$_POST['pw']??'';

if (!$idUsuario) {
    die("Usuário não autenticado");
}

$senhaHash=password_hash($novaSenha, PASSWORD_DEFAULT);

try {
    $conn->beginTransaction();

    $sql = "UPDATE usuarios SET nome=:nome, senha=:senha WHERE id=:id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":nome", $novoNome);
    $stmt->bindParam(":senha", $senhaHash);
    $stmt->bindParam(":id", $idUsuario);
    $stmt->execute();

    $conn->commit();

    echo "Dados alterados com sucesso!";

} catch (PDOException $e) {
    $conn->rollBack();
    echo "Erro ao atualizar dados.";
}
?>