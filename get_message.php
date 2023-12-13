<?php
include_once "db.php";

if (isset($_GET['number'])) {
    $chatLimit = $_GET['number'];
};
$message = array();



//$chatlimit = $_SESSION['count'];
$sql = "SELECT messages.content, messages.date, dbpwusers2.username  #selects the message content, the date it was sent and the username from dpbwusers2 of who sent it
FROM messages
INNER JOIN dbpwusers2 ON messages.id = dbpwusers2.id  #join messages id column with dbpwusers2 id column to get the coresponding usernames
ORDER BY date DESC LIMIT ".$chatLimit;  #limit the chat to only show the top 20 messages
$messResult = $connection->query($sql);


while($row = $messResult->fetch_array(MYSQLI_ASSOC)){
$a = array("username"=>$row["username"], "content"=>$row["content"],"date"=> $row["date"]);
array_push($message, $a);
};


$msg = $message[0];

if (isset($_GET["id"])) {
    $msg = $message[$_GET["id"]];
    $msg = array_values($msg);
};
echo json_encode($message)
//echo json_encode($msg);



?>