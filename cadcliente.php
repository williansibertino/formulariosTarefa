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
    <h1>Cadastro do Cliente</h1>

    <form action="dadosform.php" method='post'>

        <span>Nome:</span><br> <input type='text' name='nome'><br><br>
        <span>Email:</span><br> <input type='text' name='email'><br><br>
        <span>CPF:</span><br> <input type='text' name='cpf'><br><br>

        <button type='submit'>Cadastrar</button>

    </form>
    </div>
</body>
</html>