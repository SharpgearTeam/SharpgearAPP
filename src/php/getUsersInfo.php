<?php
require_once 'conexao.php';

$pdo = getPDO();
$stmt = $pdo->prepare("SELECT id, username, email, role, birth_date, avatar_url, password, description FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($users);
?>