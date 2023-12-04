<?php
include_once 'db.php';
include_once 'user.php';
include_once 'partials/header.php';
session_start();
//starts session and includes some usefull code
$logged_in = false;
if (isset($_SESSION['user'])) {
    $logged_in = true;
    $user = unserialize($_SESSION['user']);
} elseif (! isset($_SESSION['user'])) {
    echo "<p>No session</p>";
}
//checks for session

?>

<html>
    <head></head>

    <body>
<?php if ($logged_in): ?>
    <p>
        Hello <?= $user->username; ?>
    </p>


<form action="send-message.php" method="post">
    <label for="messageinput" class="form-label">Enter message</label>
    <textarea name="message" type="message" rows="4" cols="50" id="messageinput"></textarea>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<!--this form is for sending messages-->
<?php endif?>
    </body>
</html>