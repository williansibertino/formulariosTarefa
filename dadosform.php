<?php
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $cpf=$_POST['cpf'];

    echo '<br><br><h1>Dados do Formulário</h1><br>';
    echo "<h4>Nome: $nome </h4> Email: $email <br> <br>";
    echo "<p>CPF: $cpf </p>";
?>