<?php
include 'conn.php';

//varialveu

echo '<!DOCTYPE html>';
$rm    = $_POST['rm'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = ($_POST['senha']); //
$sexo  = $_POST['sexo'];

$avatar  = $_FILES['avatar']['name'];
$caminho = "upload/";
$voltar ="../";

$ext = strtolower(pathinfo($avatar, PATHINFO_EXTENSION));
$avatarf = $rm . '.' . $ext;
$avatarbd = $caminho . $avatarf;


$sql = "SELECT * FROM alunos WHERE rm = '$rm'";
$resultRm = $conn->query($sql);
if ($resultRm->num_rows > 0){
    echo 'RM em uso!<br>';
}

$sql = "SELECT * FROM alunos WHERE email = '$email'";
$resultEmail = $conn->query($sql);
if ($resultEmail->num_rows > 0){
    echo 'Email em uso!';
}
else{
    

if (move_uploaded_file($_FILES['avatar']['tmp_name'], $voltar . $caminho . $avatarf)) {
} else {
    die("Falha ao enviar arquivo");
}

$conn->query("INSERT INTO alunos (rm, nome, email, senha, avatar, sexo) VALUES ('$rm','$nome','$email','$senha','$avatarbd','$sexo')");
header("refresh: 3; URL=../forms.html");
}
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
echo '<div class="card-header bg-sucess text-white">Dados enviados</div>';
echo '<div class="card-body">';
echo "<p><strong>RM:</strong> $rm</p>";
echo "<p><strong>Nome:</strong> $nome</p>";
echo "<p><strong>Email:</strong> $email</p>";
echo "<p><strong>Senha marota:</strong> $senha</p>";
echo "<p><strong>Sexo:</strong> $sexo</p>";
echo "<p><strong>Avatar:</strong> $avatarf</p>";
echo "<img src='../upload/$avatarf' class='img-thumbnail mt-3' style='max-width:150px;' alt='Avatar'>";
echo '</div></div></div>';
echo '</body></html>';
?>
