<?php
include 'conn.php';

//varialveu

$rm    = $_POST['rm'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); //
$sexo  = $_POST['sexo'];

$avatar  = $_FILES['avatar']['name'];
$caminho = __DIR__ . '/../upload/';

$ext = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
$avatarf = $rm . '.' . $ext;

if (move_uploaded_file($_FILES['avatar']['tmp_name'], $caminho . $avatarf)) {
    echo "Upload feito com sucesso";
    echo "Rm: $rm <br> Nome: $nome <br> Email: $email <br> Senha criptografada: $senha <br> Sexo: $sexo <br> Avatar: $avatar";
} else {
    die("Falha ao enviar arquivo");
}
?>
 