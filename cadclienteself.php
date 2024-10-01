<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários PHP</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
<div class="card">
    <h1>Cadastro de Cliente</h1>

    <form action="/formulariosTarefa/cadclienteself.php" method='post'>

        <span>Nome:</span><br> <input type='text' name='nome'><br><br>
        <span>Email:</span><br> <input type='text' name='email'><br><br>
        <span>CPF:</span><br> <input type='text' name='cpf'><br><br>

        <button type='submit' name='enviar-formulario'>Cadastrar</button>

    </form>

<?php

    if (isset($_POST['enviar-formulario'])) {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        date_default_timezone_set('America/Sao_Paulo');
        $dataCadastro = date( 'd/m/Y H:i:s', $_SERVER['REQUEST_TIME']);

        $avisoClasse = "aviso";
        $avisoClasse2 = "avisoSelf";

        $errors = [];

        // Validações
        if (empty($nome)) {
            $errors[] = "<p class='$avisoClasse'>O campo Nome não pode estar em branco.</p>";
        }
        if (empty($cpf)) {
            $errors[] = "<p class='$avisoClasse'>O campo CPF não pode estar em branco.</p>";
        } elseif (strlen($cpf) !== 11) {
            $errors[] = "<p class='$avisoClasse'>O CPF deve conter exatamente 11 caracteres.</p>";
        }
        if (empty($email)) {
            $errors[] = "<p class='$avisoClasse'>O campo E-mail não pode estar em branco.</p>";
        }

        // Exibir erros ou dados do cliente
        if (!empty($errors)) {
            echo "<div class='error'>";
            foreach ($errors as $error) {
                echo "<p>$error</p>";
            }
            echo "</div>";
        } else {
            echo "<h1 class='$avisoClasse2'><strong>Dados Cadastrados</strong></h1>";
            echo "<p class='$avisoClasse2'><strong>Nome:</strong> $nome</p>";
            echo "<p class='$avisoClasse2'><strong>CPF:</strong> $cpf</p>";
            echo "<p class='$avisoClasse2'><strong>E-mail:</strong> $email</p>";
            echo "<p class='$avisoClasse2'><strong>Data de Cadastro:</strong> $dataCadastro</p>";
        }
    } else {
        echo "<p>Nenhum dado foi enviado.</p>";
    }
?>
</div>
</body>
</html>