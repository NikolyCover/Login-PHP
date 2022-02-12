<?php

session_start();

if(!isset($_SESSION['user'])) {
    header('Location: ../index.php');
    exit();
}

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
    </style>
</head>
<body>
</body>
</html>