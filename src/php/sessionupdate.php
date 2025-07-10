<?php
require_once 'auths/getUserInfo.php';
require_once 'conexao.php';

$user = getUser();

$pdo = getPDO();
$exec = $pdo->prepare("SELECT username, description, avatar_url, role FROM users WHERE id = :id");
$exec->bindParam(":id", $_SESSION['user_id']);
$exec->execute();

$newUser = $exec->fetch(PDO::FETCH_ASSOC);
$_SESSION['username'] = $newUser['username'];
$_SESSION['description'] = $newUser['description'];
$_SESSION['avatar_url'] = $newUser['avatar_url'];
$_SESSION['isAdmin'] = $newUser['role'] === 'admin';

?>