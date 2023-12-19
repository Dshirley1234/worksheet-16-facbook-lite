<?php

include_once "db.php";
include_once "user.php";

if( ! isset($_POST["email"])) {
    exit();
}
//if there is no email the code will stop
$input = $_POST["email"];
$sql ="SELECT * FROM dbpwusers2";
$result = mysqli_query($connection, $sql);
$same_email = 0;
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    echo $row["email"];
    echo "<br>";
    if ($row["email"] == $input){
        $same_email=1;
    };
    if ($row["username"] == $_POST["username"]) {
        $same_email=1;
    };
    echo $same_email;
};
if ($same_email==0) {
$user = new User($connection, $_POST["email"], $_POST["password"], $_POST['username']);
$user->insert();
//addes the new user to the databse
header('Location: ./login.php?msg=account-made');
} elseif ($same_email==1) {
    header('Location: ./sign-up.php?msg=emailfailed');
} else {
    header('Location: ./sign-up.php?msg=userfailed');
}
