<?php
include_once "db.php";
include_once "message.php";
include_once "user.php";

session_start();
if (isset($_SESSION['user'])) {
    echo"<p>yes</p>";
};

$user = unserialize($_SESSION['user']);
$username = $user->username;

$sql = "SELECT * FROM dbpwusers2 WHERE username=$username;
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$username = $row['username'];