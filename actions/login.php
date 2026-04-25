<?php
session_start();
require_once "../db/connection.php";

$nome=$_POST['userName'];
$senha=$_POST['pw'];

$sql="SELECT nome, senha FROM usuarios WHERE nome=:nome";

$stmt=$conn->prepare($sql);
$stmt->bindParam(":nome", $nome);
$stmt->execute();

$userInfo=$stmt->fetch(PDO::FETCH_ASSOC);

$valido=false;

if($userInfo){
    $valido=password_verify($senha, $userInfo['senha']);
}

if($valido) {
    $_SESSION['username']=$userInfo['nome'];
    header("Location: ../user/main.php");
    exit();

} else {
    die("Usuário ou senha inválidos.");
}

?>