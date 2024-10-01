<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários PHP</title>
</head>
<body>
    <h1>Formulário H1</h1>

    <form action="/formularios/cadclienteself.php" method='post'>

        Nome: <input type='text' name='nome'><br><br>
        Email: <input type='text' name='email'><br><br>
        CPF: <input type='text' name='cpf'><br><br>

        <button type='submit' name='enviar-formulario'>Enviar Dados</button>

    </form>

<?php
    if (isset($_POST['enviar-formulario'])):
            $nome=$_POST['nome'];
            $email=$_POST['email'];
            $cpf=$_POST['cpf'];
        echo "<br><br><h1>Dados do Formulário</h1><br>";
        echo "<h4>Nome: $nome </h4> Email: $email <br> <br>";
        echo "<p>CPF: $cpf </p>";
    else:
        echo "Dados Renderizados Pela Primeira Vez na tela!";
    endif;
?>
</body>
</html>