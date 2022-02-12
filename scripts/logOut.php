<?php

session_destroy($_SESSION['user']);
header('Location: ../index.php');