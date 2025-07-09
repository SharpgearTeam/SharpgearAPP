<?php

require_once 'conexao.php';

$pdo = getPDO();
$query = $pdo->prepare("SELECT COUNT(*) FROM users");
$query->execute();
$result = $query->fetchColumn();

return $result;
?>