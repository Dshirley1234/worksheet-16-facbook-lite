<?php
include_once "db.php";
include_once "message.php";
include_once "user.php";

session_start();
if (isset($_SESSION['user'])) {
    echo"<p>yes</p>";
};

$newMessage = $_POST['message'];

$user = unserialize($_SESSION['user']);
$username = $user->username;

$sql = "SELECT id FROM dbpwusers2 WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$user_id = $row['id'];
echo $user_id;

date_default_timezone_set('Europe/London');
$time = date('Y-m-d H:i:s');  

$message = new Message($connection, $_POST['message'], $time, $user_id);
$message->insert();
header('Location: http://localhost/Cookies-practise/worksheet-16-facbook-lite/home1.php?msg=message-send');
