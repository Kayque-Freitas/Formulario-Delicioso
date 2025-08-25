<?php
$host = "localhost";
$user = "root"; // usuário padrão do Laragon
$pass = "";     // senha marota
$db   = "cadastro";

// Criando conexão
$conn = new mysqli($host, $user, $pass, $db);

// Tratando a conexã o
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
