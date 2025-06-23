<?php

session_start();
require_once("conexao.php");
echo "Logando";
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["us_email"] ?? '');
    $password = trim($_POST["us_password" ??'']);

    $stmt = $pdo->prepare("SELECT id, username, password FROM users WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    if ($stmt->rowCount() === 1){
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user["password"])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['logged_in'] = true;
            header("Location: ../../index.php");
            exit;
        }
    }

    echo "Login não encontrado ou incorreto.";
}

?>