<?php

include_once "db.php";
include_once "user.php";

if( ! isset($_POST["email"])) {
    exit();
}
//if there is no email the code will stop
$user = new User($connection, $_POST["email"], $_POST["password"], $_POST['username']);
$user->insert();
//addes the new user to the databse
header('Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/login.php?msg=account-made');

