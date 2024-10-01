<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css"/>
</head>
<body>
<div>
<?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $cpf = $_POST["cpf"];
        $email = $_POST["email"];
        date_default_timezone_set('America/Sao_Paulo');
        $dataCadastro = date( 'd/m/Y H:i:s', $_SERVER['REQUEST_TIME']);

        $avisoClasse = "aviso";

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
            echo "<h1 class='$avisoClasse'><strong>Dados Cadastrados</strong></h1>";
            echo "<p class='$avisoClasse'><strong>Nome:</strong> $nome</p>";
            echo "<p class='$avisoClasse'><strong>CPF:</strong> $cpf</p>";
            echo "<p class='$avisoClasse'><strong>E-mail:</strong> $email</p>";
            echo "<p class='$avisoClasse'><strong>Data de Cadastro:</strong> $dataCadastro</p>";
        }
    } else {
        echo "<p>Nenhum dado foi enviado.</p>";
    }

    //echo "<p><a href="cadcliente.php">Voltar para o formulário de cadastro</a></p>";
?>
</div>
</body>
</html>