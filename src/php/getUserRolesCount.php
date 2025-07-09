<?php

require_once './conexao.php';

$pdo = getPDO();

$exec = $pdo->prepare("SELECT role, COUNT(*) as total FROM users GROUP BY role");
$exec->execute();

$results = $exec->fetchAll(PDO::FETCH_ASSOC);

$data = [
    'user' => 0,
    'vip' => 0,
    'admin' => 0
];

foreach ($results as $row) {
    $role = strtolower($row['role']);
    if (isset($data[$role])) {
        $data[$role] = (int)$row['total'];
    }
}

header('Content-Type: application/json');
echo json_encode($data);

?>