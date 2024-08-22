<?php
$dsn = "mysql:host=localhost;dbname=meu_banco";
$username = "root";
$password = "";

try {
    // Criando a conexão
    $conn = new PDO($dsn, $username, $password);
    // Definindo o modo de erro do PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão bem-sucedida";
} catch (PDOException $e) {
    echo "Conexão falhou: " . $e->getMessage();
}

// Fechando a conexão
$conn = null;
?>
