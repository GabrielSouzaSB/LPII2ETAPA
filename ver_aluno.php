<?php
    include "conexao.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "select * from aluno where id  = '$id'";
        $seleciona = mysqli_query($conexao, $sql);
        $exibe = mysqli_fetch_array($seleciona);

        $nome = $exibe['nome'];
        $telefone = $exibe['telefone'];
        $email = $exibe['email'];
        $cpf = $exibe['cpf'];
    }
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aluno(a): <?php echo $nome?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1 class="mt-3 text-center">Aluno: <?php echo $nome?></h1>
        <hr>
        <strong>
            <p>Telefone: <?php echo $telefone?></p>
            <p>E-mail: <?php echo $email?></p>
            <p>CPF: <?php echo $cpf?></p>
        </strong>

        <hr>

        <div class="row">
            <div class="col text-start">
                <button type="button" class="btn btn-warning" onclick="history.go(-1)">Voltar</button>
            </div>
            <div class="col text-end">
                <button type="button" class="btn btn-primary" onclick="location.href='editar_aluno.php?id=<?php echo $id?>';">Editar</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>