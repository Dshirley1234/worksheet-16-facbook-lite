<?php

include_once "db.php";
include_once "user.php";

$sql = "SELECT username FROM dbpwusers2 WHERE email='".$_POST['email']."'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];


$u = new User($connection, $_POST['email'], $_POST['password'], $username);

$u->authenticate();

if ($u->is_logged_in()) {
    session_start();
    $_SESSION['user'] = serialize($u);

    header("Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/home1.php");
} else {
    echo "Could not log in with these credentials";
}