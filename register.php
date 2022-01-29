<?php

session_start();

include('connection.php');

if(empty($_POST['name']) || empty($_POST['user']) || empty($_POST['password']) || empty($_POST['password-confirmation'])) {
    header('Location: index.php');
    exit();
}

$name = $_POST['name'];
$email = $_POST['user'];
$password = $_POST['password'];
$confirm = $_POST['password-confirmation'];

if($password != $confirm) {
    $_SESSION['differentPw'] = true;
    header('Location: singUp.php');
}

$query = "INSERT INTO user (email, password, name) VALUES ('{$email}', '{$password}', '{$name}')";

if (mysqli_query($connection, $query)) {
    $_SESSION['registered'] = true;
    header('Location: index.php');
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connection);
}