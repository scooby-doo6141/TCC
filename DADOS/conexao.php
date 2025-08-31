<?php
$servername = "mainline.proxy.rlwy.net"; 
$username   = "root";        
$password   = "CUDEAPITO";    
$dbname     = "usuarios";    
$port       = 52574; // ⚠️ Coloque aqui a porta que aparece no Railway

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
