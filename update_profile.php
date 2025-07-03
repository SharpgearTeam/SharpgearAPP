<?php

    require_once "src/php/auths/quickAuth.php";
    require_once "src/php/conexao.php";
    require_once "src/php/auths/getUserInfo.php";

    $user = getUser();

    $pdo = getPDO();
    if($avatar_url){
        $stmt = $pdo->prepare("UPDATE users username = ?, avatar_url = ?, description = ? WHERE id = ?") ;
        $stmt->execute([$username, $avatar_url, $description, $userId]);
    }else{
        $stmt = $pdo->prepare("UPDATE users SET username = ?, description = ? WHERE id = ?");
        $stmt->execute([$username, $description, $userId]);

    }















?>