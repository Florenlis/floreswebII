<?php
    $nome = $_POST['nome'];
    $dataNascimento = $_POST['dataNascimento'];
    
    $data = new DateTime($dataNascimento);
    $intervalo = $data->diff( new DateTime( date('Y-m-d') ) );
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Resultado</title>
</head>
<body>
<div class="container py-4">
            <div class="jumbotron">
                <p class="h3 text-center">FORMS</p>
            </div>
        <div class="row py-4">
            <div class="col-sm-12 text-center">
                <p><?php echo "Olá " . $nome . "! Você tem " . $intervalo->format( '%Y anos' ) . "!";?></p>
            </div>
        </div>
    </div>
    <div class="container py-4">
        <div class="card-footer text-center">
            <p>Todos os direitos reservados a &copy;Copyright</p>
        </div>
    </div>
</body>
</html>
