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

$query = "INSERT INTO user (email, password, name) VALUES ('{$email}', '{$password}', '{$name}')";

if (mysqli_query($connection, $query)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connection);
}