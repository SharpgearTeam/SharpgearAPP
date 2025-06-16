<?php

require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    try {  
        $nome = $_POST["Username"] ?? '';
        $dtbirth= $_POST["dt_birth"] ?? '';
        $usemail = $_POST["us_email"] ?? '';
        $uspassword = $_POST["us_password"] ?? '';

            // Validação do nome
            if (empty($nome)) {
                throw new Exception("Nome não pode ser vazio.");
            }
             // Inserção no banco de dados
        $sql = "INSERT INTO users (Username, dt_birth, us_email, us_password) 
                VALUES (:nome, :dtbirth, :usemail, :uspassword)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':dtbirth', $dtbirth);
        $stmt->bindParam(':usemail', $usemail);
        $stmt->bindParam(':uspassword', $uspassword);
        $stmt->execute();

        // Retorno de sucesso
        echo  "cliente cadastrado com sucesso!";
    } catch (PDOException $e) {
        // Captura erro do banco e retorna JSON
        echo "Erro ao cadastrar: " . $e->getMessage();
    } catch (Exception $e) {
        // Captura erro geral e retorna JSON
        echo  "Erro: " . $e->getMessage();
    }  

} else {
    echo  "Erro no envio do formulário.";
}
exit; // Garante que o script encerre corretamente















?>