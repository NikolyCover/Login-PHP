<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <div class="body">
    <div id="login-card">
        <h1>Login</h1>
        <form>
                <div id="wrong-login">
                    Email e/ou senha inválidos.
                </div>
                <div class="textfield">
                    <label for="login">Login:</label>
                    <input type="email" name="login" placeholder="email" required>
                </div>
                <div class="textfield">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" placeholder="senha" required>
                </div>
                <input id="get-in" type="submit" value="Entrar">
        </form>
    </div>
    </div>
</body>
</html>

<?php
    
?>