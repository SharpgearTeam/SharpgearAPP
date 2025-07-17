<?php
header('Content-Type: application/json');
session_start();
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    try {
        $nome = htmlspecialchars(trim($_POST["Username"] ?? ''));
        $dtbirth = $_POST["dt_birth"] ?? '';
        $usemail = htmlspecialchars(trim($_POST["us_email"] ?? ''));
        $senhaBruta = $_POST["us_password"] ?? '';
        $uspassword = password_hash($senhaBruta, PASSWORD_DEFAULT);

        if (empty($nome) || empty($dtbirth) || empty($usemail) || empty($senhaBruta)) {
            throw new Exception("Todos os campos são obrigatórios.");
        }

        $pdo = getPDO();

        // Verifica se o email já está cadastrado
        $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
        $stmt->execute([':email' => $usemail]);
        if ($stmt->fetch()) {
            throw new Exception("Email já cadastrado.");
        }

        // Insere novo usuário
        $sql = "INSERT INTO users (username, birth_date, email, password)
                VALUES (:nome, :dtbirth, :usemail, :uspassword)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dtbirth', $dtbirth);
        $stmt->bindParam(':usemail', $usemail);
        $stmt->bindParam(':uspassword', $uspassword);
        $stmt->execute();

        echo json_encode([
            "success" => true,
            "message" => "Usuário cadastrado com sucesso."
        ]);
    } catch (Exception $e) {
        echo json_encode([
            "success" => false,
            "message" => $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        "success" => false,
        "message" => "Requisição inválida."
    ]);
}
exit;
