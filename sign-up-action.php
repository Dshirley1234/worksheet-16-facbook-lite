<?php

include_once "db.php";
include_once "user.php";

if( ! isset($_POST["email"])) {
    
    exit();
}

$user = new User($connection, $_POST["email"], $_POST["password"], $_POST['username']);
$user->insert();
//var_dump($_POST);
header('Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/login.php?msg=account-made');

