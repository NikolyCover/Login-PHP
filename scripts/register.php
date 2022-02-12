<?php

session_start();

include('connection.php');

if(empty($_POST['name']) || empty($_POST['user']) || empty($_POST['password']) || empty($_POST['password-confirmation'])) {
    header('Location: ../index.php');
    exit();
}

$email = $_POST['user'];
$password = $_POST['password'];
$confirm = $_POST['password-confirmation'];

if($password != $confirm) {
    $_SESSION['differentPw'] = true;
    header('Location: ../singUp.php');
    exit();
}

$name = $_POST['name'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$celphone = $_POST['celphone'];
$adress = $_POST['adress'];
$hobbys = $_POST['hobbys'];
$cars = $_POST['cars'];
$sport = $_POST['sport'];

$loginQuery = "INSERT INTO user (email, password, name) VALUES ('{$email}', '{$password}', '{$name}')";


if (mysqli_query($connection, $loginQuery)) {
    $user_id = mysqli_insert_id($connection);
    
    foreach($hobbys as $hobby) {
        $query = "INSERT INTO hobby (hobby_name, user_id) VALUES ('{$hobby}', '{$user_id}')";
        mysqli_query($connection, $query);
    }
    
    foreach($cars as $car) {
        $query = "INSERT INTO car (car_name, user_id) VALUES ('{$car}', '{$user_id}')";
        mysqli_query($connection, $query);
    }

    $query = "INSERT INTO sport (sport_name, user_id) VALUES ('{$sport}', '{$user_id}')";
    mysqli_query($connection, $query);

    $_SESSION['registered'] = true;
    header('Location: ../index.php');
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($connection);
  header('Location: ../singUp.php');
}

