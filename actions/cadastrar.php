<?php
session_start();

require_once "../db/connection.php";

$nome=$_POST['userName'];
$senha=$_POST['pw'];

$pwHash=password_hash($senha, PASSWORD_DEFAULT);

try{

    $conn->beginTransaction();
    $sql="INSERT INTO usuarios(nome, senha) VALUES(:nome, :senha)";

    $stmt=$conn->prepare($sql);
    $stmt->bindValue(":nome", $nome);
    $stmt->bindValue(":senha", $pwHash);

    $stmt->execute();
    $conn->commit();

    $_SESSION['username']=$nome;
    $_SESSION['pwHash']=$pwHash;

    header("Location: ../user/main.php");
    exit();

}catch(PDOException $e) {
    if($conn->inTransaction()){
        $conn->rollBack();
    }
    echo "ERRO: ".$e->getMessage();
}

?>