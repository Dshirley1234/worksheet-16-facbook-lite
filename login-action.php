<?php

include_once "db.php";
include_once "user.php";
//useful code

$sql = "SELECT username FROM dbpwusers2 WHERE email='".$_POST['email']."'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];
$user_id = $row['id'];
//pulls the username from the database

$u = new User($connection, $_POST['email'], $_POST['password'], $username, $user_id);

$u->authenticate();
//authernticates the user
if ($u->is_logged_in()) {
    session_start();
    $_SESSION['user'] = serialize($u);

    header("Location: ./home.php");
} else {
    header("Location: ./login.php?msg=failed");
}