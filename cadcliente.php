<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários PHP</title>
</head>
<body>
    <h1>Cadastro do Cliente</h1>

    <form action="dadosform.php" method='post'>

        Nome: <input type='text' name='nome'><br><br>
        Email: <input type='text' name='email'><br><br>
        CPF: <input type='text' name='cpf'><br><br>

        <button type='submit'>Enviar Dados</button>

    </form>
</body>
</html>