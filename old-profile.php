<?php
include_once 'db.php';
include_once 'user.php';
session_start();

$user = unserialize($_SESSION['user']);

include_once 'partials/header.php';

$username = $user->username;
$sql = "SELECT id FROM dbpwusers2 WHERE username='$username'";
$result = mysqli_query($connection, $sql);
$row = $result->fetch_assoc();
$user_id = $row['id'];

$sql = "SELECT * FROM messages WHERE id = '$user_id'";
$messages = mysqli_query($connection, $sql);
//$messages = $result->fetch_assoc();

?>
<html>
<head>
    <title>Profile</title>
</head>
        <div style="text-align:center">
            <h1><?= $username?>'s Profile</h1>
        </div>
<body>
    <br/>
    <?php if (! isset($_GET["user"])): ?>
    <a class="btn btn-primary" href="change_password.php" role="button">Change password</a>
    <? endif?>
    <br/>
    <div class="container chatcontainer">
    <?php while($row = $messages->fetch_array(MYSQLI_ASSOC)): ?>
        <h5><?= $username ?></h5>
    <div class="msg_content">
        <p style="font-size:20px";><?= $row["content"] ?></p>
        <p class="date" style="color:#669A9B;"><?= $row["date"]?></p>
    </div>
<!--for each row in the database display them on screen in a certain format.-->
        <br/>
    <?php endwhile; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>