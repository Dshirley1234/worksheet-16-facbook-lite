<?php
include_once "db.php";
include_once "message.php";
include_once "user.php";
//useful code that it needs

session_start();


$newMessage = $_POST['message'];
//gets the message from the home1.php post

$user = unserialize($_SESSION['user']);
$username = $user->username;
//grabs the username from the session

$sql = "SELECT id FROM dbpwusers2 WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$user_id = $row['id'];
echo $user_id;
//uses the username to grab that users id

date_default_timezone_set('Europe/London');
$time = date('Y-m-d H:i:s'); 
//current date and time

$message = new Message($connection, $_POST['message'], $time, $user_id);
$message->insert();
//creates a new message class and uploads it into the database
header('Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/home1.php?msg=message-send');
