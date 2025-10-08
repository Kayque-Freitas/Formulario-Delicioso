<?php
$host = "sql308.infinityfree.com";
$user = "if0_39645844"; // usuário padrão do Laragon
$pass = "208KqnHO2d";     // senha marota
$db   = "if0_39645844_noite2"; // nome do banco de dados

// Criando conexão
$conn = new mysqli($host, $user, $pass, $db);

date_default_timezone_set("America/Sao_Paulo");

// Tratando a conexã o
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
