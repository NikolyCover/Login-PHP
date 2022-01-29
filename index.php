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
    <title>Login</title>
</head>
<body>
    <div id="login-card">
        <h1>Login</h1>

        <?php
        
        if(isset($_SESSION['unauthenticated'])):

        ?>
        <div id="wrong-login">
            Email e/ou senha inválidos.
        </div>
        <?php

        endif;

        unset($_SESSION['unauthenticated']);

        ?>

        <form action="login.php" method="POST">
                <div class="textfield">
                    <label for="login">Login:</label>
                    <input type="email" name="user" placeholder="email" required>
                </div>
                <div class="textfield">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" placeholder="senha" required>
                </div>
                <input id="get-in" type="submit" value="Entrar">
        </form>
    </div>
</body>
</html>