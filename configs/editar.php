<?php

require "conn.php";

$rm = $_GET["rm"];



$select = "SELECT * FROM aluno WHERE rm = $rm";
$result = mysqli_query($conn, $select);
while ($aluno = mysqli_fetch_assoc($result)) {
    $rm = $aluno['rm'];
    $nome = $aluno['nome'];
    $email = $aluno['email'];
    $senha = $aluno['senha'];
    
}
?>
<!doctype html>
<html lang="pt-br">

<head>
    <title>x</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>

<body class="bg-light">

    <div class="container">
        <?php echo "<h1>Os dados a serem editados serão do RM: $rm </h1>"; ?>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div class="row justify-content-center">
                <div class="form-floating">
                    <input type="text" class="form-control" name="rm" id="rm" placeholder="" hidden value="<?php echo $rm ?>" />
                    <label for="rm">RM</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="" value="<?php echo $nome ?>" />
                    <label for="nome">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" />
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="" />
                    <label for="senha">Senha</label>
                </div>
                
                
                <button type="submit" class="btn btn-success col-xl-4 col-sm-4">
                    Salvar
                </button>
                <button type="reset" class="btn btn-danger col-xl-4 col-sm-4">
                    Limpar
                </button>
            </div>
        </form>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>