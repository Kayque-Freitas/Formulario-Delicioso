<?php
include 'conn.php';

//varialveu

$rm    = $_POST['rm'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); //
$sexo  = $_POST['sexo'];

$avatarNome  = $_FILES['avatar']['name'];
$avatarTmp   = $_FILES['avatar']['tmp_name'];
$avatarTipo  = $_FILES['avatar']['type'];

$caminho = "uploads/". basename($avatarNome);

if ()move_uploaded_file($avatarTmp, $caminho)) {
    echo "Upload feito com sucesso";
} else {
    die("Falha ao enviar arquivo");
}
?>
 