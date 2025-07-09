<?php
require_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] !== "POST"){
    http_response_code(405);
    echo json_encode(['error' => 'Método de envio incorreto.']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

if (!isset($data['id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Id não encontrado.']);
    exit;
}

$pdo = getPDO();
$exec = $pdo->prepare("DELETE FROM users WHERE id = :id");
$success = $exec->execute(['id' => $data['id']]);

if ($success) {
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Usuário não encontrado no banco de dados.']);
}

?>