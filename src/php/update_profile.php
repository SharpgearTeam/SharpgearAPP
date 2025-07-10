<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "auths/quickAuth.php";
    require_once "conexao.php";
    require_once "auths/getUserInfo.php";
    require_once "uploadimage.php";

    $user = getUser();
    $pdo = getPDO();

    try {
        $uploadedAvatar = handleAvatarUpload();
    } catch (RuntimeException $e) {
        header("Location: editprofile.php");
        exit($e->getMessage());
    }

    $avatar_url = $uploadedAvatar ?: $user['avatar_url'];
    $username = trim($_POST["username"] ?? $user['username']);
    $description = trim($_POST["description"] ?? $user['description']);
    $userId = $user['id'];

    if ($avatar_url !== $user['avatar_url']) {
        $stmt = $pdo->prepare("UPDATE users SET username = ?, avatar_url = ?, description = ? WHERE id = ?");
        $stmt->execute([$username, $avatar_url, $description, $userId]);
    } else {
        $stmt = $pdo->prepare("UPDATE users SET username = ?, description = ? WHERE id = ?");
        $stmt->execute([$username, $description, $userId]);
    }

    $_SESSION['username'] = $username;
    $_SESSION['logged_in'] = true;
    $_SESSION['description'] = $description;
    $_SESSION['avatar_url'] = $avatar_url;

    header("Location: ../../profilepage.php?id={$userId}");
    exit;
}
