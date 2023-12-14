<?php
session_start();
include_once "db.php";
include_once 'user.php';

$new_password = $_POST['new_password'];
$password_check = $_POST['password_check'];


$username = $user->username;
$sql = "SELECT id FROM dbpwusers2 WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$user_id = $row['id'];



if ($new_password == $password_check){
    $password_hash = password_hash($new_password, PASSWORD_BCRYPT);
    $sql = "UPDATE dbpwusers2 SET password ='$password_hash' WHERE id='$user_id'";
    $connection->query($sql);
    header("http://localhost/Cookies-practise/worksheet-16-facbook-lite/change_password.php?msg=changed");

} else {
    header("http://localhost/Cookies-practise/worksheet-16-facbook-lite/change_password.php?msg=wrong");
}