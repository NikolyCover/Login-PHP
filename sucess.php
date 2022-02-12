<?php

/*session_start();

if(!$_SESSION['user']) {
    header('Location: ../index.php');
    exit();
}*/
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucess</title>

    <style rel="stylesheet">
        body {
            background: url(https://c.tenor.com/zoD-a4zYa-EAAAAC/entrapta-entrapdak.gif) repeat;
            background-size: cover;
        }

        input {
            background-color: #e62020;
            border: none;
            color: #FFF;
            border-radius: 10px;
            padding: 10px 40px;
            position: absolute;
            bottom: 4vh;
            right: 4vw;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="scripts/logOut.php">
        <input type="submit" value="Sair" name="out">
    </form>
</body>
</html>