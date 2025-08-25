<?php
required 'conn.php';

//varialveu

$rm    = $_POST['rm'];
$nome  = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); //
$sexo  = $_POST['sexo'];


?>
