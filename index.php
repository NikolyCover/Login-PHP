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
    <div class="card">
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
        
        <?php
        
        if(isset($_SESSION['registered'])):

        ?>
        <div id="registered">
            Cadastro realizado com sucesso!
        </div>
        <?php

        endif;

        unset($_SESSION['registered']);

        ?>

        <form action="login.php" method="POST">
                <div class="textfield">
                    <label for="user">Email:</label>
                    <input type="email" name="user" placeholder="example@domain.com" required>
                </div>
                <div class="textfield">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" placeholder="senha" required>
                </div>
                <input class="submit" type="submit" value="Entrar">
        </form>
        <p id="sing-up">Ainda não tem uma conta? <a href="singUp.php">Cadastrar-se</a></p>
    </div>
</body>
</html>