<?php
$servername = "mainline.proxy.rlwy.net"; // ou seu host, ex: '127.0.0.1'
$username = "root";        // seu usuário do MySQL
$password = "CUDEAPITO";            // senha do MySQL
$dbname = "usuarios";    // nome do banco que você criou

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
