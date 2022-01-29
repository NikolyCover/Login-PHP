<?php

session_start()

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="card">
        <h1>Cadastro</h1>
        <form action="register.php" method="POST">
                <div class="textfield">
                    <label for="name">Nome:</label>
                    <input type="text" name="name" placeholder="nome completo" required>
                </div>
                <div class="textfield">
                    <label for="user">Email:</label>
                    <input type="email" name="user" placeholder="example@domain.com" required>
                </div>
                <div class="textfield">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" placeholder="senha" required>
                </div>
                <div class="textfield">
                    <label for="password-confirmation">Confirmação de senha:</label>
                    <input type="password" name="password-confirmation" placeholder="digite sua senha novamente" required>
                </div>
                <input class="submit" type="submit" value="Cadastrar">
        </form>
        <p id="sing-up">Já tem uma conta? <a href="index.php">Fazer login</a></p>
    </div>
</body>
</html>