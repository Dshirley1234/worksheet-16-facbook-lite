<?php
include_once 'db.php';
include_once 'user.php';
session_start();

//starts session and includes some usefull code
$logged_in = false;
if (isset($_SESSION['user'])) {
    $logged_in = true;
    $user = unserialize($_SESSION['user']);
};
//checks for session

?>

<html>
    <?php include_once 'partials/header.php';?>
    <head>
        <link rel="stylesheet" href="css/home.css">
    </head>

    <body>
<?php if ($logged_in): ?>

    <br>

    <div>
        <?php include "partials/convo.php" ?>
    </div>
<br>
<div class="container">
<form action="send-message.php" method="post">
    <p>Enter post</p>
    <textarea name="message" type="message" rows="4" cols="50" id="messageinput"></textarea>
    <br/>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!--this form is for sending messages-->
    <?php if(isset($_GET['msg']) && $_GET["msg"]=="message-send"): ?>
        <div>
            Message sent
        </div>
    <?php endif ?>

<?php endif?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>