<?php

include_once "db.php";
include_once "user.php";
//useful code

$sql = "SELECT username FROM dbpwusers2 WHERE email='".$_POST['email']."'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
//pulls the username from the database

$u = new User($connection, $_POST['email'], $_POST['password'], $username);

$u->authenticate();
//authernticates the user
if ($u->is_logged_in()) {
    session_start();
    $_SESSION['user'] = serialize($u);

    header("Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/home1.php");
} else {
    header("Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/login.php?msg=failed");
}