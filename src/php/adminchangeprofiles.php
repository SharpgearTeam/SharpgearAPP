<?php
require_once 'conexao.php';
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método não permitido']);
    exit;
}

$data = json_decode(file_get_contents("php://input"), true);

if (!isset($data['id'])) {
    http_response_code(400);
    echo json_encode(['error' => 'ID ausente']);
    exit;
}

$pdo = getPDO();

$sql = "
    UPDATE users SET
        username = :username,
        email = :email,
        role = :role,
        birth_date = :birth_date,
        description = :description,
        avatar_url = :avatar_url
    WHERE id = :id
";

$stmt = $pdo->prepare($sql);

$success = $stmt->execute([
    'id' => $data['id'],
    'username' => $data['username'],
    'email' => $data['email'],
    'role' => $data['role'],
    'birth_date' => $data['birth_date'],
    'description' => $data['description'],
    'avatar_url' => $data['avatar_url'],
]);

echo json_encode(['success' => $success]);
