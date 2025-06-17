<?php

$host = "localhost";
$dbname = "sharpgear_users";
$usuario  = "root";
$senha = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("erro de conexão:". $e->getMessage());
}    
?>