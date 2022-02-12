<?php

session_start();

include('connection.php');

if(empty($_POST['user']) || empty($_POST['password'])) {
    header('Location: ../index.php');
    exit();
}

$email = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT user_id, email FROM user WHERE email = '{$email}' AND password = '{$password}'";

$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    header('Location: ../sucess.php');
    exit();
} else {
    $_SESSION['unauthenticated'] = true;
    header('Location: ../index.php');
    exit();
}