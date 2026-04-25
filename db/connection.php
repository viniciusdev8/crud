<?php

$localdb="localhost";
$database="crud";
$user="root";
$pass="";

try{
    $conn= new PDO("mysql:host=$localdb; dbname=$database", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
}

?>