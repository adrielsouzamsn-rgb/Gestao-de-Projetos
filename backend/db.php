<?php

$host = "localhost";    // ajustar host
$user = "root";         // usuario do banco  
$pass = "";             // senha
$dbname = "ppa";        // nome final do banco

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
