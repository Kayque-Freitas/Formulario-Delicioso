<?php
$host = "127.0.0.1:3306";
$user = "root"; // usuário padrão do Laragon
$pass = "";     // senha marota
$db   = "kayqueFreitas"; // nome do banco de dados

// Criando conexão
$conn = new mysqli($host, $user, $pass, $db);

date_default_timezone_set("America/Sao_Paulo");

// Tratando a conexã o
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>
