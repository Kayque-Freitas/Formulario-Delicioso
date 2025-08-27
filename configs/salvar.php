<?php
include 'conn.php';

//varialveu

$rm    = $_POST['rm'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); //
$sexo  = $_POST['sexo'];

$avatar  = $_FILES['avatar']['name'];
$caminho = "uploads/". basename($avatarNome);

$ext = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
$avatarf = $rm . '.' . $ext;

if (move_uploaded_file($_FILES['avatar']['tmp_name'], $)) {
    echo "Upload feito com sucesso";
} else {
    die("Falha ao enviar arquivo");
}
?>
 