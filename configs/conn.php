<?php
$host = "localhost";
$user = "root"; // usuário padrão do Laragon
$pass = "";     // senha marota
$db   = "cadastro";

// Criando conexão
$host = "127.0.0.1:4444";
$conn = new mysqli($host, $user, $pass, $db);

// Tratando a conexã o
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
