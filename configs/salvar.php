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
    echo '<!DOCTYPE html>';
    echo '<html lang="pt-br">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<title>Dados enviados</title>';
    echo '</head>';
    echo '<body>';
    echo '<div class="container mt-5">';
    echo '<div class="card">';
    echo '<div class="card-header bg-success text-white">Dados enviados</div>';
    echo '<div class="card-body">';
    echo "<p><strong>RM:</strong> $rm</p>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Senha criptografada:</strong> $senha</p>";
    echo "<p><strong>Sexo:</strong> $sexo</p>";
    echo "<p><strong>Avatar:</strong> $avatarf</p>";
    echo "<img src='../upload/$avatarf' class='img-thumbnail mt-3' style='max-width:150px;' alt='Avatar'>";
    echo '</div></div></div>';
    echo '</body></html>';
    
} else {
    die("Falha ao enviar arquivo");
}
?>
