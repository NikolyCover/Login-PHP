<?php

if(!empty($_POST['out'])) {
    session_destroy($_SESSION['user']);
    header('Location: ../index.php');
}